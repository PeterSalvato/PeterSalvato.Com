# Design

## Theme

Light. A practitioner reading case studies and methodology at a desk during the day, coffee nearby, printed book open. The warmth comes from the paper tone and ink color, not from darkness. The aged textbook interior, Tufte-calibrated.

## Color Strategy

Restrained. Tinted warm neutrals with one accent at less than 10%.

## Colors

### Primary

- Paper: `#ffffff` (background)
- Paper Warm: `#fafafa` (alternate background)
- Surface: `#eae7e0` (cards, panels, sidebar tints)

### Text

- Ink: `#2c2418` (primary text, warm near-black)
- Ink Light: `#5c5347` (secondary text)
- Ink Faint: `#8a8279` (metadata, timestamps, tertiary)

### Accent

- Accent: `#7a4e2d` (links, highlights, active states)

### Structure

- Rule: `#d5d0c8` (dividers, borders)
- Rule Dark: `#b5aea4` (heavier dividers)

## Typography

### Font Stacks

- Display: `Calder Dark`, `Chainprinter`, `Space Mono`, monospace
- Display Grit: `Calder Dark Grit`, `Calder Dark`, `Space Mono`, monospace
- Body: `Rubik`, system sans-serif
- Mono: `Space Mono`, monospace

### Usage

- h1, page titles, hero titles, sidebar title, reading titles: Display (Calder Dark clean)
- h2, h3, h4, nav labels, card titles, footer headings, breadcrumbs, tabs, buttons, metadata labels: Display Grit (Calder Dark Grit)
- Body text, descriptions, prose: Body (Rubik)
- Code, technical metadata: Mono (Space Mono)
- All headings: uppercase, letter-spacing 0.02em

### Scale

- Display: 2rem (32px)
- h1: 1.625rem (26px)
- h2: 1.375rem (22px)
- h3: 1.125rem (18px)
- Body: 1rem (16px)
- Body Small: 0.9375rem (15px)
- Caption: 0.8125rem (13px)
- Fine: 0.75rem (12px)

### Measure

- Body line length: 65ch max
- Leading: 1.43 (body), 1.2 (tight/headings), 1.6 (loose)

## Spacing

Modular scale based on 1rem baseline:

- xs: 0.25rem
- sm: 0.5rem
- md: 1rem
- lg: 2rem
- xl: 3rem
- xxl: 4rem
- xxxl: 6rem

## Layout

- Sidebar navigation (desktop), hamburger (mobile)
- Content area max-width governed by measure (65ch for prose)
- No grid framework. Content-driven widths.
- Cards used for artifact/project listings (earned, not default)

## Components

### Sidebar

Fixed left navigation. Site title in Display face. Nav items in Display Grit. Collapsible on mobile with hamburger.

### Cards

Artifact cards for project listings. Border on hover. Title in Display Grit, metadata in caption size, description in body.

### Brand Walks

Reading layout with specimen blocks (image, swatch, quote, side-by-side, absence). Specimen labels in Display Grit. Analysis text in body.

### Images

Four presentation classes: `.image.diagram`, `.image.photo`, `.image.artifact`, `.image.logo`. Each has appropriate framing.

## Texture

Grain overlay on body (subtle, paper-like). The site aims for aged textbook warmth, not digital flatness. Texture is the shared thread across the constellation (petersalvato.com, third.industries, journeymanshow.com).

## Motion

- Transitions: 0.15s ease (fast), 0.25s ease (medium), 0.3s ease (slide)
- No animations on layout properties
- Hover states on links and cards only
- Reduced motion respected

## Anti-patterns

- No gradient text
- No glassmorphism
- No side-stripe borders on cards
- No em dashes in copy
- No hero-metric templates
- No identical card grids
- No modal-first patterns
