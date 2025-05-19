<?php
$page_meta = [
  "title" => "Home",
  "summary" => "TODO: Add summary for Home.",
  "type" => "page"
];
?>

<article id="home" class="home">
  <div class="hero">

    <img src="assets/img/Diagram6.svg" alt="Flowchart of Systems Design" class="hero-image" />
    
    <h1>Designing Systems That Think</h1>
    <p>
      Scaling platforms tends to erase clarity.  
      Decisions get disconnected from their reasons.  
      Interfaces drift from their intent.
    </p>
    <p>
      I build frameworks that stop that from happening.  
      Tools that help teams keep meaning intact — even as systems grow more complex.
    </p>
  </div>

  <section class="access-road">
    <div class="diagramtest">
      <div class="diagram-container"  style="display:none;">
        <div class="node" id="node1">Box 1</div>
        <div class="node" id="node2">Box 2</div>
        <div class="node" id="node3">Box 3</div>
        <svg id="polyline-svg">
          <polyline id="polyline"></polyline>
        </svg>
      </div>
      <!-- counter junk//////////////////////////////////////////// -->
        <div class="counterContainer" style="display:none;">
          <style>
              #coords {
                  position: fixed;
                  top: 10px;
                  right: 10px;
                  background: rgba(0, 0, 0, 0.7);
                  color: #0f0;
                  font-family: monospace;
                  padding: 5px 10px;
                  border-radius: 4px;
                  z-index: 9999;
              }

              .control-btn {
                  position: fixed;
                  right: 10px;
                  padding: 5px 10px;
                  background: #222;
                  color: #f00;
                  border: 1px solid #f00;
                  border-radius: 4px;
                  cursor: pointer;
                  z-index: 9999;
              }

              #reset { top: 50px; }
              #copy { top: 90px; }

              #coords-list {
                  position: fixed;
                  top: 130px;
                  right: 10px;
                  background: rgba(0, 0, 0, 0.7);
                  color: #0f0;
                  font-family: monospace;
                  padding: 5px 10px;
                  border-radius: 4px;
                  z-index: 9999;
                  max-width: 300px;
                  word-wrap: break-word;
              }

              svg#polyline-svg {
                  position: absolute;
                  top: 0;
                  left: 0;
                  width: 100%;
                  height: 100%;
                  pointer-events: none;
              }

              polyline {
                  stroke: #ff6600;
                  stroke-width: 2;
                  fill: none;
              }
          </style>
          <div id="coords">X: 0, Y: 0</div>
          <button id="reset" class="control-btn">Reset Points</button>
          <button id="copy" class="control-btn">Copy Coords</button>
          <div id="coords-list"></div>
          <script>
            const coordsDisplay = document.getElementById('coords');
            const coordsDisplayList = document.getElementById('coords-list');
            const resetBtn = document.getElementById('reset');
            const copyBtn = document.getElementById('copy');
            const polyline = document.getElementById('polyline');
            const svg = document.getElementById('polyline-svg');
            let recordedPoints = [];

            document.addEventListener('mousemove', e => {
                coordsDisplay.textContent = `X: ${e.clientX}, Y: ${e.clientY}`;
            });

            document.addEventListener('click', e => {
                if (e.target.closest('.control-btn') || e.target.id === 'coords') return;

                // Convert clientX, clientY to SVG coordinate space
                const pt = svg.createSVGPoint();
                pt.x = e.clientX;
                pt.y = e.clientY;
                const svgPoint = pt.matrixTransform(svg.getScreenCTM().inverse());

                const point = { x: Math.round(svgPoint.x), y: Math.round(svgPoint.y) };
                recordedPoints.push(point);
                console.log(`Recorded: ${point.x}, ${point.y}`);
                updateCoordsList();
                updatePolyline();
            });

            resetBtn.addEventListener('click', () => {
                recordedPoints = [];
                console.log('Points reset.');
                updateCoordsList();
                updatePolyline();
            });

            copyBtn.addEventListener('click', () => {
                const pointsString = recordedPoints.map(p => `${p.x},${p.y}`).join(' ');
                navigator.clipboard.writeText(pointsString)
                    .then(() => console.log('Coords copied to clipboard:', pointsString))
                    .catch(err => console.error('Copy failed:', err));
            });

            function updateCoordsList() {
                coordsDisplayList.textContent = recordedPoints.map(p => `${p.x},${p.y}`).join(' ');
            }

            function updatePolyline() {
                polyline.setAttribute('points', recordedPoints.map(p => `${p.x},${p.y}`).join(' '));
            }
          </script>
        </div>
      <!-- end counter junk//////////////////////////////////////// -->
    </div>    
  </section>
  
</article>

<section class="pathways">
  <ul>
    <li><a href="/about"><strong>Hiring manager or recruiter?</strong> Get a direct view of my systems leadership and platform work.</a></li>
    <li><a href="/savepoint"><strong>Tool-seeker or builder?</strong> Start with Savepoint.Protocol and see how I design for scale.</a></li>
    <li><a href="/journals"><strong>Philosophically curious?</strong> Dive into essays on cognitive systems and semantic clarity.</a></li>
  </ul>
</section>

