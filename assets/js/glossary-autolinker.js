document.addEventListener("DOMContentLoaded", function () {
  const contentRegion = document.querySelector('.main-content');
  if (!contentRegion) return;

  fetch('/data/glossary.json')
    .then(response => response.json())
    .then(glossary => {
      Object.keys(glossary).forEach(term => {
        const slug = glossary[term].slug;
        const definition = glossary[term].definition;

        const termRegex = new RegExp(`\\b(${term.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&')})\\b`, 'i');

        const walker = document.createTreeWalker(contentRegion, NodeFilter.SHOW_TEXT, null, false);

        let done = false;
        while (walker.nextNode()) {
          const node = walker.currentNode;
          if (done) break;

          if (termRegex.test(node.nodeValue)) {
            const span = document.createElement('span');
            span.innerHTML = node.nodeValue.replace(termRegex, `
              <a style="border-bottom: 1px solid red;display:inline-block;margin:1px 0;" href="/glossary#${slug}" class="glossary-term" title="${definition}">$1</a>
            `);

            node.parentNode.replaceChild(span, node);
            done = true;
          }
        }
      });
    });
});
