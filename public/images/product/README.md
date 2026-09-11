# Mevzun homepage product screenshot assets

Homepage V2 uses only real Mevzun Desktop screenshots supplied by the product owner. Do not draw or generate replacement application UI in Blade/CSS.

## Required assets

Place optimized WebP exports in this directory using these exact filenames:

- `home-dark.webp` — Hero / Mevzun Ana Sayfa, dark theme
- `ai-dark.webp` — Yapay Zekâ çalışma alanı, dark theme

Until an asset exists, `ProductFrame` keeps the final-ratio placeholder used by the homepage layout.

## Optional mobile crops

If the full desktop screenshot becomes unreadable on narrow viewports, provide deliberate crops rather than relying on aggressive CSS cropping:

- `home-dark-mobile.webp`
- `ai-dark-mobile.webp`

Mobile crops are optional and should be added only after the real screenshots are reviewed.

## Capture rules

- Use synthetic/demo data only; never include real client, case, identity or personal data.
- Keep application density representative of real use; avoid empty screens.
- Do not include debug/devtools UI.
- Capture the application frontally; no device mockup, perspective distortion or generated chrome.
- Preserve text quality; avoid aggressive compression.
- Website presentation remains shadow-free with a 1px frame and low radius.
