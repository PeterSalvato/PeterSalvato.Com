/**
 * Pathfinding — Session-based visitor path tracking
 * Layer 3 of the adaptive system.
 *
 * Tracks which pages the visitor has seen, in what order,
 * and which page they came from. Stores in sessionStorage only.
 * Nothing persists. Nothing leaves the browser.
 *
 * Layer 4 (path-aware bridge text) reads this data to adjust
 * connection card emphasis and intro copy.
 */
(function () {
  'use strict';

  var STORAGE_KEY = 'ps_path';

  function getPath() {
    try {
      var raw = sessionStorage.getItem(STORAGE_KEY);
      return raw ? JSON.parse(raw) : { pages: [], current: null, previous: null };
    } catch (e) {
      return { pages: [], current: null, previous: null };
    }
  }

  function savePath(path) {
    try {
      sessionStorage.setItem(STORAGE_KEY, JSON.stringify(path));
    } catch (e) {
      // sessionStorage unavailable or full — degrade silently
    }
  }

  // Record current page visit
  var currentUrl = window.location.pathname;
  var path = getPath();

  // Don't double-record on refresh
  if (path.current !== currentUrl) {
    path.previous = path.current;
    path.current = currentUrl;

    // Add to history if not already the last entry
    if (path.pages[path.pages.length - 1] !== currentUrl) {
      path.pages.push(currentUrl);
    }
  }

  savePath(path);

  // Expose for Layer 4 to read
  window.PSPath = {
    current: path.current,
    previous: path.previous,
    pages: path.pages,
    pageCount: path.pages.length,
    hasSeen: function (url) {
      return path.pages.indexOf(url) !== -1;
    }
  };

  // Layer 4: Adapt connection cards based on visitor path
  function adaptConnections() {
    var cards = document.querySelectorAll('.connection-card[data-connection-url]');
    if (!cards.length) return;

    var previous = path.previous;
    var seen = path.pages;

    cards.forEach(function (card) {
      var url = card.getAttribute('data-connection-url');

      // Mark the page the visitor just came from
      if (previous && url === previous) {
        card.classList.add('connection--source');
      }

      // Mark pages already visited
      if (seen.indexOf(url) !== -1) {
        card.classList.add('connection--visited');
      }
    });

    // Reorder: source first, then unseen, then visited
    var grid = document.querySelector('.connections-grid');
    if (!grid) return;

    var allCards = Array.prototype.slice.call(grid.querySelectorAll('.connection-card'));
    var source = [];
    var unseen = [];
    var visited = [];

    allCards.forEach(function (card) {
      if (card.classList.contains('connection--source')) {
        source.push(card);
      } else if (card.classList.contains('connection--visited')) {
        visited.push(card);
      } else {
        unseen.push(card);
      }
    });

    var sorted = source.concat(unseen).concat(visited);
    sorted.forEach(function (card) {
      grid.appendChild(card);
    });
  }

  // Run after DOM is ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', adaptConnections);
  } else {
    adaptConnections();
  }
})();
