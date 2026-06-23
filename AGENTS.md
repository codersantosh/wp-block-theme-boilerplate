# AGENTS.md

Working guide for the `wp-block-theme-boilerplate` WordPress block theme.
Read this before changing anything. This file is action-oriented: how to
do things in this theme. High-level theme metadata lives in `README.md`.

## Documentation precedence

If `AGENTS.md` instructions conflict with the official WordPress
developer documentation (developer.wordpress.org) or the WordPress
core source code running on the local installation, follow the
official WordPress sources. `AGENTS.md` documents theme-specific
conventions but is not authoritative for general WordPress APIs.

## Quick reference

- **Theme URI:** `https://github.com/codersantosh/wp-block-theme-boilerplate`
- **Author URI:** `https://patternswp.com/`
- **Stable tag / Version:** `1.0.0` (boilerplate — locked)
- **Text Domain:** `wp-block-theme-boilerplate`
- **Version constant:** `WP_BLOCK_THEME_BOILERPLATE_VERSION` (in `functions.php`)
- **Pattern category slug:** `page`
- **Block bindings:** `wp-block-theme-boilerplate/copyright`,
  `wp-block-theme-boilerplate/archive-title`
- **REST namespace:** `wp-block-theme-boilerplate/v1`
- **Singleton:** all classes use `public static function get_instance()`
- **CSS prefix:** `companydomain-wbtb-` (boilerplate placeholder; rename via
  `npm run initial-rename`)

## Verification gates

Run before any commit. All three must exit 0.

```bash
cd wp-content/themes/<theme>
vendor/bin/phpcs --standard=WordPress-Extra functions.php includes/ admin/ public/
npx wp-scripts lint-js src/
npm run build
```

One-time PHPCS install:
```bash
composer config --no-plugins allow-plugins.dealerdirect/phpcodesniffer-composer-installer true
composer require --dev wp-coding-standards/wpcs squizlabs/php_codesniffer phpcompatibility/phpcompatibility-wp
```

## Build / dev commands

- `npm run build` — compile JS+SCSS. Source in `src/`, output in `build/`.
- `npm run deploy` — builds JS+SCSS, regenerates the `.pot`, then
  produces `deploy/<slug>/` folder + `deploy/<slug>-<version>.zip`
  for wp.org submission. Uses `.bin/deploy.js` with the `archiver`
  package.
- `npm run deploy:bundle` — runs only the bundling step (skip
  build + makepot). Useful when iterating on `deploy.js`. **Warning:**
  if `build/` is empty (e.g. fresh clone without `npm run build` first),
  this produces a deploy with no compiled JS/CSS. For releases, always
  run `npm run deploy` (full pipeline).
- `npm run initial-rename` — replaces boilerplate identifiers across
  all files (run once on new theme creation).
- `npm run makepot` — regenerates `languages/<text-domain>.pot`.
- `npm run start` — parallel watch mode for 4 src entrypoints.

## How to use this boilerplate to create a new theme

1. **Read `README.md`** for high-level narrative.
2. **Copy the folder** to `wp-content/themes/<new-slug>/`.
3. **Edit `.bin/initial-rename.js`** — define new identifiers:
   - `wp-block-theme-boilerplate` → `<new-slug>`
   - `Wp_Block_Theme_Boilerplate` → `<New_Slug_PascalCase>`
   - `wp_block_theme_boilerplate` → `wp_<new_slug_snake>`
   - `WP_BLOCK_THEME_BOILERPLATE` → `<NEW_SLUG_UPPER>`
   - `WpBlockThemeBoilerplate` → `<NewSlugCamelCase>` (localize global)
   - `companydomain-wbtb-` → `<brand>-<new-slug>-`
   - `codersantosh` references in headers → your author name.
4. **Run `npm run initial-rename`** — rewrites identifiers and renames
   matching PHP files.
5. **Run `npm install`** in the new theme directory.
6. **Edit `theme.json`** — update palette, fonts, spacing for your brand.
7. **Edit `style.css` and `README.txt`** headers.
8. **Modify or remove patterns** that don't fit the new design.
9. **Add new patterns** in `patterns/` (see "How to add a pattern" below).
10. **Run verification gates.**
11. **Commit on a topic branch**, push, open a PR.

## Architecture

```
includes/main.php             Core class Wp_Block_Theme_Boilerplate, loads deps
includes/class-include.php    Singleton: pattern category, atomic CSS, textdomain
includes/class-block-bindings.php  Block bindings (copyright, archive-title)
admin/                        Admin notice, info page, editor assets + templates/
public/                       Frontend enqueue (atomic CSS + build/public/*)
includes/api/                 REST controllers (settings, install-plugin)
patterns/                     55 PHP block patterns
parts/                        11 HTML template parts
templates/                    15 HTML templates
src/                          SCSS + JS source; compiled to build/ via wp-scripts
styles/                       Style variations (dark.json) + block styles
assets/fonts/                 Self-hosted woff2 (Inter, Mukta)
assets/img/                   Theme images
assets/library/atomic-css/    Utility framework (atomic.css)
```

### Naming conventions
- **Text domain:** `wp-block-theme-boilerplate` everywhere:
  `__()`, `_e()`, `_x()`, `esc_html__()`, `esc_attr__()`,
  `load_theme_textdomain()`, `wp_set_script_translations()`.
- **Version:** `WP_BLOCK_THEME_BOILERPLATE_VERSION` constant. Use this in
  asset cache busters and PHP version references. No literal version
  strings.
- **Singleton:** `public static function get_instance()` on every class.
- **Pattern slug format:** `wp-block-theme-boilerplate/<name>`.
- **Class file naming:** `class-<ClassName>.php`. PHP files start with
  `<?php // phpcs:ignore` then ABSPATH guard.

## Design tokens (`theme.json`)

All visual properties flow from `theme.json`. Read `theme.json` before
changing the visual design — patterns reference these tokens via
`var:preset|*`.

### Color palette (8 entries)
Slugs: `base`, `default`, `primary`, `secondary`, `tertiary`,
`quaternary`, `quinary`, `accent`. Reference as:
- Block attribute: `{"textColor":"primary"}`
- CSS: `var(--wp--preset--color--primary)`

### Typography
- Font families: `heading` (Mukta) + `base` (Inter).
- Font sizes: `x-small`, `small`, `medium`, `large`, `x-large`,
  `xx-large` (fluid `clamp()` scaling).
- Reference as: `{"fontSize":"medium"}` or `var(--wp--preset--font-size--medium)`.

### Spacing scale (8 sizes)
Slugs: `10`, `20`, `30`, `40`, `50`, `60`, `70`, `80`. The first two
are fixed pixels; the rest are fluid `clamp(min, vw, max)`.

Reference as: `var(--wp--preset--spacing--30)` in patterns.

### Layout
- `contentSize: 850px` (constrained)
- `wideSize: 1320px` (wide alignment)

### Per-block styles
Block-level defaults defined for: `paragraph`, `navigation`,
`navigation-link`, `navigation-submenu`, `button` (with `outline`
variation), `site-title`, `site-tagline`, `code`, `quote`, `pullquote`,
`html`, `categories`, `post-{title,date,terms,author,excerpt,
featured-image}`, `query-pagination`, `query-no-results`,
`comment-template`, `comment-{author-name,date,edit-link,reply-link,
content}`, `post-comments-form`, `comments-pagination`,
`latest-posts`, `latest-comments`, `table`.

### How to extend the design system
1. **Add palette entry:** append to `settings.color.palette` (and
   `duotone` for image filters). Reference by slug.
2. **Add font weight:** drop `.woff2` in `assets/fonts/<family>/`,
   append `fontFace` entry to `theme.json` `fontFamilies` array.
3. **Add spacing size:** append to `spacing.spacingSizes`.
4. **Tweak block default:** edit `styles.blocks.core/<block>`.
5. **Add style variation:** create `styles/<slug>.json` (global) or
   `styles/blocks/<block>.json` (block-style). WP auto-discovers.

## Atomic CSS utility classes

`assets/library/atomic-css/atomic.css` provides utility classes for
spacing, layout, and visual primitives. Use these in patterns when you
need layout that goes beyond what `theme.json` block supports expose.

### Available utility classes (verified in patterns)
- **Layout:** `at-flx` (flex), `at-flx-col` (flex column), `at-row`,
  `at-al-itm-ctr` (align-items center), `at-jfy-cont-ctr` (justify-content
  center)
- **Positioning:** `at-pos` (position: relative/absolute), `at-z-idx`
- **Sizing:** `at-w` (width: 100%), `at-h` (height: 100%), `at-p` (padding)
- **Display:** `at-d-non` (display: none)
- **Responsive:** `at-lg-blk` (large breakpoint — display block)
- **Border:** `at-bdr` (border), `at-bdr-rad` (border-radius)
- **Components:** `at-accordion`, `at-svg`, `at-comment-pagination`

### Usage example in a pattern
```html
<!-- wp:group {"className":"at-flx at-flx-col at-gap at-pos at-z-idx"} -->
<div class="wp-block-group at-flx at-flx-col at-gap at-pos at-z-idx">
  <!-- block content -->
</div>
<!-- /wp:group -->
```

### Brand classes (`companydomain-wbtb-`)
Project-level components defined in `src/admin/common.scss` and
`src/public/theme.scss`. Current usages in patterns:
- `companydomain-wbtb-header` — absolute-positioned site header
- `companydomain-wbtb-hero-banner` — cover-block hero
- `companydomain-wbtb-hero-banner-content` — hero content layer
- `companydomain-wbtb-is-h-w-*` — fixed height/width utilities
- `companydomain-wbtb-shape-t` / `companydomain-wbtb-shape-b` — hero
  top/bottom SVG waves

### Adding new atomic.css classes
Add to `assets/library/atomic-css/atomic.css` (and update RTL variant +
minified). Use the `at-` prefix. Don't break existing class names.
Don't reference atomic.css CSS variables — they're not used in patterns
or src/ SCSS files (the framework's `:root` declarations are vestigial).
Use `theme.json` CSS variables instead (`var(--wp--preset--*)`).

## Patterns (`patterns/`)

55 PHP pattern files. Each follows:

```php
<?php
/**
 * Title: <Display Title>
 * Slug: wp-block-theme-boilerplate/<name>
 * Categories: <comma-separated>
 * Description: <one-line>
 *
 * @package Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since 1.0.0
 */
?>
<!-- wp:group ... -->
...block markup using theme.json tokens and/or atomic classes...
<!-- /wp:group -->
```

### Categories in use
`posts` (12), `featured` (5), `text, featured` (4), `query` (3),
`header` (3), `footer` (2), `contact, call-to-action` (2),
`contact, call-to-action, page` (1),
`buttons` (1), `banner` (1).

### Internal patterns (5 total, `Inserter: no`)
`hidden-404`, `hidden-no-search-results`, `hidden-primary-header`,
`hidden-query-no-results`, `hidden-single-post-content`. Referenced from
templates or other patterns via
`<!-- wp:pattern {"slug":"wp-block-theme-boilerplate/<name>"} /-->`.
May omit `Categories:` header.

### Pattern naming convention
- Public: human-readable (`card-1`, `hero-banner`, `section-title-1`)
- Internal: `hidden-*` prefix
- Template-restricted: descriptive (`list-archive-*`, `single-page-*`,
  `single-post-*`, `page-landing-*`, `templates-*`)

### How to add a new pattern
1. Create `patterns/foo.php` with the docblock header, `<?php` open,
   `?>`, then block markup.
2. Use `theme.json` tokens (colors, fonts, spacing) — not hardcoded
   values. Use atomic.css classes (`at-flx`, `at-pos`, etc.) for
   layout. Use brand classes (`companydomain-wbtb-*`) for branded
   components.
3. Translatable text: `esc_html_e( 'Text', 'wp-block-theme-boilerplate' )`
4. Theme images: `esc_url( get_template_directory_uri() ) . '/assets/img/foo.png'`
5. Reference other patterns via
   `<!-- wp:pattern {"slug":"wp-block-theme-boilerplate/<other>"} /-->`

### Cover blocks (special case)
Cover blocks reference images by URL only. Use
`esc_url( get_template_directory_uri() ) . '/assets/img/foo.png'`. If
you remove the `id` JSON attribute, also remove the matching
`wp-image-{id}` CSS class.

## Templates (`templates/`)

15 HTML templates. Most are 1-line wrappers around a pattern:

| File | Pattern used |
|---|---|
| `index.html`, `home.html`, `archive.html` | `list-archive-right-sidebar` |
| `search.html` | `list-archive-full-width` |
| `front-page.html` | `landing` |
| `404.html` | `header-default` + `hidden-404` + `footer` template-parts |
| `blank.html` | just `wp:post-content` (no header/footer) |
| `page.html` | `single-page-full-width` |
| `single.html` | `single-post-full-width` |
| `page-{left,right,both}-sidebar.html` | `single-page-{left,right,both}-sidebar` |
| `single-{left,right,both}-sidebar.html` | `single-post-{left,right,both}-sidebar` |

### How to add a custom template
1. Create `templates/foo.html`.
2. Register in `theme.json` `customTemplates` with `name: "foo"`,
   `title: "Foo"`, `postTypes: ["page"]`.
3. WP auto-discovers by filename.

## Template parts (`parts/`)

11 HTML template parts. Each is a 1-line wrapper around a pattern.
`theme.json` `templateParts` ↔ `parts/<name>.html` must be **1:1**.
Orphan declarations in `theme.json` (without a matching file) fail
Theme Review.

### How to add a template part
1. Create `parts/foo.html` (1-line pattern wrapper).
2. Register in `theme.json` `templateParts` with matching `name` and
   `area: "header|footer|uncategorized"`.

## Block bindings

`includes/class-block-bindings.php` registers two sources:

| Slug | Args | Returns | Used by |
|---|---|---|---|
| `wp-block-theme-boilerplate/copyright` | `{"key":"copyright"}` | `&copy; <year> <site title>` | `patterns/copyright.php` |
| `wp-block-theme-boilerplate/archive-title` | `{"key":"archive-title"}` | `get_the_archive_title()` HTML on archive; search-formatted string on search; `'Blog'` on home | `patterns/list-archive-header.php` |

### How to add a new block binding
1. Add a new `register_block_bindings_source()` call inside
   `register_block_bindings()`.
2. Implement `get_binding_data( $source_args, $block_instance )`.
3. Guard the registration with `function_exists( 'register_block_bindings_source' )` (requires WP 6.5+).
4. Pattern consumer sets `metadata.bindings.content.source` and `.args`.

## REST API

`includes/api/` exposes endpoints under `wp-block-theme-boilerplate/v1`:

| Endpoint | Method | Permission | Purpose |
|---|---|---|---|
| `/install-plugin` | POST | `install_plugins` | Install + activate a plugin (used by admin notice) |
| `/settings` | GET/POST | `manage_options` | Theme options + per-user meta CRUD |

Both endpoints use `rest_validate_value_from_schema()` and
`rest_sanitize_value_from_schema()` on input.

### How to add a new endpoint
1. Subclass `Wp_Block_Theme_Boilerplate_Api` in `includes/api/`.
2. Set `$namespace`, `$version`, `$rest_base`, `$type`.
3. Implement `register_routes()` with `register_rest_route()`.
4. Implement `*_permissions_check()` and `*_item()` / `*_items()`.
5. Register in `includes/api/index.php`.

## How to add a style variation

1. Create `styles/<slug>.json` with:
   ```json
   {
     "$schema": "https://schemas.wp.org/trunk/theme.json",
     "version": 3,
     "title": "My Variation",
     "settings": { ... },
     "styles": { ... }
   }
   ```
2. WP auto-discovers files in `styles/`.
3. For block-style variations (apply to one block type), use
   `styles/blocks/<block-slug>.json` with `blockTypes` array.

## Conventions

- **Hidden patterns** declare `Inserter: no` in the docblock and may
  omit `Categories:`.
- **Pattern pagination** in `patterns/query-list.php`,
  `query-grid.php`, `query-list-min.php`, `sitemap.php` uses a PHP
  `require 'pagination.php'` (and `require 'hidden-query-no-results.php'`).
  Don't replace these with `<!-- wp:pattern {"slug":"..."} /-->`.
- **Pattern files** do not include ABSPATH guards.
- **Block themes get `html5` / `title-tag` / `post-thumbnails` support
  implicitly.** No `add_theme_support()` calls for these.
- **Templates and parts** are 1-line wrappers around patterns. When
  adding new template/parts files, prefer pattern references over raw
  block markup.
- **JS string extraction:** `@wordpress/babel-plugin-makepot` emits
  strings to `languages/js.pot`. The `npm run makepot` script merges
  this into `languages/<text-domain>.pot`. Run `npm run build` first
  to populate `js.pot`.

## Helper functions

`includes/functions.php` exposes a handful of reusable helpers wrapped in
`if ( ! function_exists() )` so themes forked via `npm run initial-rename`
can override them safely.

| Function | Returns | Used by |
|---|---|---|
| `wp_block_theme_boilerplate_parse_changelog()` | Sanitized text of the `== Changelog ==` section of `readme.txt`, including per-version headings (e.g. `= 1.2.3 =`), bullets, and blank lines between versions. Empty string when the section is missing. | `admin/templates/page-theme-info.php` Changelog card |
| `wp_block_theme_boilerplate_get_theme_faq()` | Array of `{q, a}` pairs rendered in the FAQ accordion. | `admin/templates/page-theme-info.php` FAQ card |
| `wp_block_theme_boilerplate_get_recommended_plugins()` | Array of plugin info entries (`name`, `slug`, `plugin`, optional `source`/`url`). | Admin Recommended Plugins card + REST `/install-plugin` endpoint |
| `wp_block_theme_boilerplate_install_plugin()` | Result array `{success, message}` after installing/activating a plugin. | `includes/api/class-api-install-plugin.php` |
| `wp_block_theme_boilerplate_file_system()` | Initialized `WP_Filesystem` instance. | `wp_block_theme_boilerplate_parse_changelog()` |

### Filters

- `wp_block_theme_boilerplate_changelog_file` — override the absolute path
  to `readme.txt` for `wp_block_theme_boilerplate_parse_changelog()`. Useful
  for tests or for themes whose changelog lives in a separate file.
- `wp_block_theme_boilerplate_recommended_plugins` — add or remove
  entries from the Recommended Plugins list.
- `wp_block_theme_boilerplate_default_options`,
  `wp_block_theme_boilerplate_default_user_meta` — extend the theme
  options / user-meta defaults.
- `wp_block_theme_boilerplate_faq` — add or remove FAQ entries.

## References

- `README.md` — developer README (architecture narrative, dev setup,
  rename workflow).
- `README.txt` — WordPress.org-format readme (description, changelog,
  license). Shipped to wp.org.
- `package.json` — npm scripts, dependencies, browserslist.
- `theme.json` — design tokens, block styles, template / template-part
  registration.
- `languages/wp-block-theme-boilerplate.pot` — translation template.
- `.bin/initial-rename.js` — boilerplate → new-theme identifier swap.

## Project structure notes

- `.bin/` contains `initial-rename.js` (used by `npm run
  initial-rename`) and `deploy.js` (used by `npm run deploy`).
- `atrc` is a dependency kept in `package.json` for future use;
  it's not currently imported anywhere in `src/`. Do not remove
  unless you have a concrete plan to use it.
- `src/` is the development source. Production ships `build/` only.
  Patterns / templates / parts reference compiled assets via
  `get_template_directory_uri() . '/build/...'`.
- Pattern `query-list.php` swaps the no-results pattern based on
  `is_search()`: `hidden-no-search-results` for search pages,
  `hidden-query-no-results` for archives.
- `src/prefix-vars.scss` defines `$themePrefix` and `$varPrefix` as
  `companydomain-wbtb-` and `at-`. After `npm run initial-rename`,
  **also update these two variables** to match the new prefix —
  otherwise compiled CSS will use the new prefix but pattern HTML
  will still reference `companydomain-wbtb-*` classes (broken
  styles).
- Block bindings registration assumes the call happens before
  `init` fires. Currently true (loaded via `functions.php` →
  `includes/main.php` → `class-block-bindings.php`). Do not move the
  call to a later hook without also calling
  `register_block_bindings_source()` directly.

## Git workflow

- Topic branches, merged via PR.
- Conventional Commits: `chore:`, `fix:`, `feat:`, `refactor:`,
  `docs:`, `style:`, `perf:`, `test:`.
- Push: `git push origin <branch>` — upstream tracks automatically.
- `.gitignore` excludes: `.sass-cache`, `node_modules/`,
  `package-lock.json`, `git-source`, `build`, `deploy`, `vendor/`,
  `composer.json`, `composer.lock`. `.bin/copy.js` `excludedFiles`
  array mirrors this list.
