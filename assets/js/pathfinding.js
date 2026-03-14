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
})();
