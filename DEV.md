# Development & Operations Guide

## Project Setup

**Tech Stack:**
- Jekyll 4.4.1 (static site generator)
- Ruby (Gemfile)
- SCSS for styling (`assets/css/main.scss`)
- GitHub Pages for hosting
- Domain: `petersalvato.com`

---

## Remote Workflow (Homelab Server via SSH)

### Initial Setup
```bash
cd /home/peter/homelab/projects/active/petersalvato.com
bundle install
```

### Development Process

**1. Build the site**
```bash
bundle exec jekyll build
```
Compiles everything to `_site/`. Builds `main.scss` → `main.css`.

**2. Start local server with live reload**
```bash
bundle exec jekyll serve
```
- Runs at: `http://localhost:4000/`
- Auto-recompiles on file changes
- Keep this running in one terminal

**3. Edit styles in another terminal**
Edit: `assets/css/main.scss`
- Save file
- Watch terminal shows: `Regenerating: assets/css/main.scss`
- Refresh browser to see changes

**4. Edit content**
- Markdown files: `index.md`, `_protocols/*.md`, `_systems/*.md`, `_practice/*.md`
- Data files: `_data/*.json`
- Templates: `_layouts/*.html`
- Includes: `_includes/*.html`

**5. Commit and push**
```bash
git add [files]
git commit -m "description"
git push origin main
```
GitHub Pages auto-deploys within 30 seconds.

---

## Local Workflow (Your Machine)

### Initial Setup
```bash
git clone https://github.com/PeterSalvato/PeterSalvato.Com.git
cd PeterSalvato.Com
bundle install
```

### Development
```bash
bundle exec jekyll serve
```
Visit: `http://localhost:4000/`

### After Changes
```bash
git add [files]
git commit -m "description"
git push origin main
```

---

## Key Files & Directories

| Path | Purpose |
|------|---------|
| `index.md` | Homepage (layout: systemworks) |
| `assets/css/main.scss` | **All styles go here** |
| `assets/css/main.css` | Compiled CSS (auto-generated) |
| `_layouts/*.html` | Page templates |
| `_includes/sidebar-nav.html` | Sidebar navigation |
| `_data/*.json` | Content data (navigation, routes, etc.) |
| `_protocols/` | Governing logic and cognitive firmware |
| `_systems/` | Production deployments under constraint |
| `_practice/` | Systemic research and expression |
| `provenance/` | Biographical narrative |
| `protocols/` | Tier landing page |
| `systems/` | Tier landing page |
| `practice/` | Tier landing page |
| `docs/voice-protocol.md` | Master Builder voice reference |
| `_config.yml` | Jekyll configuration |
| `Gemfile` | Ruby dependencies |

---

## CSS Conventions

**Object-Oriented CSS (OOCSS)** is the standard for this project.

- Base class carries shared properties: `.image`, `.card`, `.nav`
- Modifier class adds specific behavior: `.image.diagram`, `.card.featured`
- SCSS nesting: `&.modifier` under base class
- Prefer `.object.modifier` over BEM (`--modifier`) or flat prefixes
- Markup reads naturally: `class="image diagram"` not `class="image--diagram"`

### Image Presentation System

Four treatments for project page images. Applied via kramdown IAL:

```
![alt text](path){:.image.diagram}
```

- `.image.diagram` — Mounted document: border, matte, shadow, "Fig. N" caption. Use for screenshots, interfaces, wireframes.
- `.image.photo` — Object on bench: heavier shadow, rounded corners, no border. Use for product shots, material photography.
- `.image.artifact` — Artwork: surface background, light shadow, sharp corners. Use for posters, prints, design output.
- `.image.logo` — Part of the wall: ghosted into header, low opacity, blend mode. Use for logos, brand marks, sigils.

**Default:** Images without a class get legacy treatment (centered, max-width, no framing). Images with `.image.*` classes get wrapped in `<figure>` with `<figcaption>` auto-generated from alt text.

---

## Site Structure (3 Tiers + About)

1. **Governance** (red) — `_protocols/` → Savepoint Syntax, Order of the Aetherwright, Formwork Protocol
2. **Deployments** (blue) — `_systems/` → Encore, Joinery, Aiden-Jae, Everyday Gold, Altrueism, Modernist Homestead
3. **Practice** (green) — `_practice/` → New City, MathOnTape, Photogeography, The Deep Cuts, Echo & Bone, Versagrams, Colophon
4. **About** (neutral) — `bio/` → Lineage narrative

---

## Common Tasks

### Edit Styles
```bash
# Remote or Local
nano/vim assets/css/main.scss
# Save file
# Watch terminal shows recompile
# Refresh browser
```

### Add New Project
1. Create markdown file in appropriate collection:
   - Protocols: `_protocols/project-name.md`
   - Systems: `_systems/project-name.md`
   - Practice: `_practice/project-name.md`

2. Add frontmatter:
   ```markdown
   ---
   layout: whitepaper
   title: "Project Title"
   client: "Client Name"
   ---
   ```

3. Write content in Master Builder voice (see `docs/voice-protocol.md`)
4. Push to deploy

### Update Navigation
Edit: `_data/navigation.json`
Changes appear immediately on next build.

### Update Homepage Content
Edit: `_data/index.json` (sections: `manifesto`, `routes`)
Changes appear on next build.

---

## Troubleshooting

**"main.css not found"**
- Run: `bundle exec jekyll build`
- Ensure `assets/css/main.scss` exists with front matter (`---\n---\n`)

**Changes not appearing**
- Refresh browser (hard refresh: Cmd+Shift+R)
- Check terminal shows "Regenerating"
- Rebuild: `bundle exec jekyll build`

**Links broken**
- Check baseurl in `_config.yml` is `""` (empty — custom domain)
- Use `{{ '/' | relative_url }}` for all internal links

---

## Deployment

**Automatic (GitHub Pages)**
- Push to `main` branch
- GitHub Actions auto-builds and deploys
- Live in ~30 seconds at `petersalvato.com`

---

## Notes

- **SCSS:** Edit `assets/css/main.scss`, Jekyll compiles automatically
- **No npm required** for SCSS (using Jekyll's native SASS compiler)
- **All data in JSON** for consistency
- **Collections structure** keeps projects organized
- **Multi-page layout** preserved (sidebar + main content always visible)
- **Voice:** All copy follows Master Builder protocol (see `docs/voice-protocol.md`)
