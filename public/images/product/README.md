# Mevzun product screenshot assets

Homepage V1 uses only real Mevzun Desktop screenshots supplied by the product owner. Do not draw or generate replacement UI in Blade/CSS.

## Desktop assets

Place optimized WebP/AVIF exports here using these exact filenames:

- `home-dark.webp` — Hero / Ana Sayfa, dark theme
- `uyap-cases-light.webp` — UYAP / Davalar, light theme
- `ai-dark.webp` — AI working area, dark theme
- `calendar-light.webp` — Takvim, light theme
- `workspace-smart-table-light.webp` — Yerel Çalışma Alanı / Smart Table, light theme

Until an asset exists, `ProductFrame` keeps the final-ratio placeholder defined by the LOCKED homepage spec.

## Optional mobile crops

When the full desktop screenshot is unreadable on a narrow viewport, provide a deliberate crop with the matching `-mobile` filename:

- `home-dark-mobile.webp`
- `uyap-cases-light-mobile.webp`
- `ai-dark-mobile.webp`
- `calendar-light-mobile.webp`
- `workspace-smart-table-light-mobile.webp`

`ProductFrame` automatically uses the mobile source below 768px when that file exists, otherwise it falls back to the desktop asset.

## Capture rules

- Use synthetic/demo data only; no real client, case or personal data.
- Keep a consistent application window ratio and density across the showcase set.
- Do not include debug/devtools UI.
- Prefer an intentional crop over `object-cover` when important product chrome would be cut.
- Preserve UI text quality; avoid aggressive compression.
- Product screenshots remain shadow-free and are shown with a 1px frame and low radius on the website.
