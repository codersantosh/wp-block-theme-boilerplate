# WP Block Theme Boilerplate

> `WP Block Theme Boilerplate` is a starter WordPress theme to develop WordPress block themes with modern development practices.

## Description

[Demo WP Block Theme Boilerplate](https://demo.patternswp.com/wp-block-theme-boilerplate/)

Creating a block theme often involves repetitive tasks, as much of the code is reused. Typically, you begin by building a comprehensive base theme, and then for niche themes such as business, education, or e-commerce, you only need to adjust global settings and styles in the theme.json, add pre-made patterns to the patterns folder, and include relevant templates in the templates folder, such as single-product.html for WooCommerce.

The WP Block Theme Boilerplate starter theme is built to simplify and optimize the development process by providing essential tools and managing repetitive code and features within the theme. It includes a "Getting Started" notice to help users with the initial setup, instructions for installing recommended plugins, and a theme review prompt after 15 days to encourage feedback. Additionally, a detailed theme info page offers an overview of the theme's features and support options. The boilerplate also comes with key development commands to ensure efficient workflow management.

By understanding and utilizing this starter theme, you can establish a solid foundation and focus on designing and customizing specific elements like patterns, theme.json and style variations for your unique needs. Once your theme is tailored to your requirements, you can submit it to the WordPress.org theme repository, making it available to a broader audience. This approach not only speeds up the development process but also allows you to quickly adapt the theme for various projects and share it with the WordPress community.

## Table of Contents

- [WP Block Theme Boilerplate](#wp-block-theme-boilerplate)
  - [Description](#description)
  - [Table of Contents](#table-of-contents)
  - [Features](#features)
  - [Getting Started](#getting-started)
    - [1. Installation](#1-installation)
    - [2. Development Setup](#2-development-setup)
    - [3. Renaming the Theme](#3-renaming-the-theme)
    - [4. Rename the language file](#4-rename-the-language-file)
    - [5. Activate the Theme](#5-activate-the-theme)
    - [6. Start Customization and Coding](#6-start-customization-and-coding)
  - [Folder Information](#folder-information)
  - [Generate a new theme with AI](#generate-a-new-theme-with-ai)
  - [Contributing](#contributing)
  - [Authors](#authors)
  - [Recommendations](#recommendations)
  - [License & Attribution](#license--attribution)

## Features

- **Use the theme as-is:** The WP Block Theme Boilerplate is fully functional and can be used right out of the box by simply deploying the theme.

- **Easy Renaming:** Simplify renaming of theme name, files, constants, variables, classes, text-domain, and functions.

  - Edit the `initial-rename.js` file in the .bin directory.
  - Adjust the naming strings.
  - Run `npm run initial-rename`

- **Development Environment Setup:**

  - Includes `npm run start` command to initialize CSS/JS development environment with a live development server.

- **Production Build:**

  - Provides `npm run build` command to generate optimized production files for the theme.

- **Language File Creation:**

  - Generates `.pot` files from both JavaScript and PHP code.
  - Includes the `npm run makepot` command to generate the `.pot` file. Note: The JavaScript language file is created using `@wordpress/babel-preset-default`. The `npm run makepot` command utilizes WP-CLI to generate PHP file translations and merge them with the `JavaScript .pot` file to produce the final `.pot` file.

- **Deployment Command:**

  - Run `npm run deploy` to create a production-ready deploy folder.
  - Rename and upload this folder to your WordPress site or WordPress.org after thorough testing.

- **REST API Integration:**

  - Utilizes WordPress REST API for backend interactions, found in includes/api directory.

- **Recommended plugins:**

  - Show recommended plugins to users with easily install and activatation features.

- **Getting started notice:**

  - Show getting started notice on theme activation with recommended plugins.

- **Review notice:**

  - Show review notice after 15days of theme activation.

- **Theme info page:**

  - Readymade theme info page on admin with banner, theme features, support, contact, recommended plugins, quick links and free vs pro sections.

- **[Powered by Atomic CSS](https://github.com/codersantosh/atomic-css):**

  - The WP Block Theme Boilerplate leverages Atomic CSS to simplify and enhance the styling process.

- **Customization Encouraged:**

  - Since the WP Block Theme Boilerplate is designed to be highly customizable, developers are encouraged to modify and adapt `Atomic CSS` according to their specific project requirements.
  - Developers are encouraged to customize any aspect of the theme's structure, styling, or functionality according to their needs. They can remove existing libraries and/or integrate additional CSS, or JavaScript libraries and modify them based on their preferences and expertise. It's important to view this theme as a starting point only, allowing developers to tailor it precisely to their requirements and optimize its performance and user experience.

- **Block Bindings:** Two block binding sources are registered in `includes/class-block-bindings.php` (guarded by `function_exists('register_block_bindings_source')`, hooked on `init`): `wp-block-theme-boilerplate/copyright` (renders `&copy; <year> <site title>`) and `wp-block-theme-boilerplate/archive-title` (renders the archive title, search query, or `Blog` on the home page).

  - *Why it matters:* patterns show dynamic text (an auto-updating copyright line and the correct archive heading) with no hardcoded strings, so any theme derived from this boilerplate inherits it for free.

- **Helper functions & filters:** `includes/functions.php` exposes reusable helpers — `get_recommended_plugins()`, `install_plugin()`, `get_plugin_names()`, default/Get/Update options (`default_options`/`get_options`/`update_options`), default/Get/Update user meta (`default_user_meta`/`get_user_meta`/`update_user_meta`), `parse_changelog()`, `get_theme_faq()`, and `is_pro_active()` — wrapped in `if ( ! function_exists() )` so derived themes can override them. Pluggable filters: `recommended_plugins`, `default_options`, `default_user_meta`, `faq`, `changelog_file`.

  - *Why it matters:* because the helpers are pluggable and the filters exist, a child or forked theme can swap in its own recommended plugins, FAQ, options, or user-meta defaults without editing the core files.

- **Style variations & design tokens:** `theme.json` (v3) defines an 8-color palette (`base`, `default`, `primary`, `secondary`, `tertiary`, `quaternary`, `quinary`, `accent`), 6 duotone pairs, fluid spacing scale `10`–`80`, and self-hosted woff2 fonts (Mukta for headings, Inter for body). Style variations: `styles/dark.json` (global) and `styles/blocks/button.json` (block-style variation).

  - *Why it matters:* all visual styling flows from these tokens — patterns reference `var(--wp--preset--*)` instead of hardcoded values, so rebranding is as simple as editing `theme.json` (and optionally the `dark.json` variation) rather than touching every pattern.

- **Automated Deployment:** `.github/workflows/deploy.yml` builds the theme via `npm run deploy` and pushes the result to the WordPress.org SVN theme repository on a `v*` tag or manual workflow dispatch. Requires `SVN_USERNAME` and `SVN_PASSWORD` repository secrets.

  - *Why it matters:* you normally never run this by hand — it fires on a version tag. See **Automated Deployment to WordPress.org** below for the beginner walkthrough.

- **Contact Form 7 ready:** The `patterns/contact-form.php` pattern provides a styled two-column contact layout with a placeholder for a Contact Form 7 shortcode (`<!-- wp:shortcode -->`), so you can drop in your form shortcode.

  - *Why it matters:* paste your `[contact-form-7 ...]` shortcode into the pattern's shortcode block and the surrounding two-column layout is already styled for you.

- **`atrc` dependency note:** `atrc` (Atomic React Components) is listed in `package.json` for future use but is not currently imported anywhere in `src/`. Do not remove it unless you have a concrete plan to use it.

  - *Why it matters:* it is intentionally kept as a reserved dependency for upcoming interactive (React-based) components. Leaving it in `package.json` avoids a future rename — just don't delete it by accident.

## Prerequisites

Before getting started with the WP Block Theme Boilerplate, ensure you have the following:

- **WordPress Installation:** The theme requires a WordPress installation set up on your local machine.

- **Node.js and npm:** Make sure Node.js (which includes npm, the Node Package Manager) is installed on your development environment. You can download and install Node.js from [nodejs.org](https://nodejs.org/en/download/).

- **WP-CLI:** Required to generate `.pot` files for language translations. [Install WP-CLI](https://make.wordpress.org/cli/handbook/guides/installing/)| [View More](https://wp-cli.org/).

- **Code Editor:** Use your preferred code editor (e.g., Visual Studio Code, Sublime Text, Atom) to customize and develop the theme.

- **Basic Understanding of JavaScript:** Familiarity with JavaScript is recommended as the theme utilizes pure JavaScript for some user actions.

- **Basic Understanding of WordPress Coding:** Knowledge of WordPress concepts such as PHP coding, hooks, APIs (like REST API), and WordPress functions.

- **Command Line Interface (CLI):** Comfortable using the command line interface (CLI) for running npm commands and managing the theme development workflow.

- **Git (Optional):** If you plan to clone the theme repository or manage version control, Git should be installed on your system.

## GETTING STARTED

### 1. Installation

- Clone the repository to /wp-content/themes/:

  ```sh
  git clone https://github.com/codersantosh/wp-block-theme-boilerplate.git
  ```

  Or download and upload the theme files to /wp-content/themes/wp-block-theme-boilerplate.

- Rename the folder name `wp-block-theme-boilerplate` to your theme folder.

### 2. Development Setup

<details>
 <summary> Don't have <code>Node.js</code> + <code>npm</code> installed? You have to install them first. (CLICK TO EXPAND)</summary>

Go to the Node's site [download + install](https://nodejs.org/en/download/) Node on your system. This will install both `Node.js` and `npm`, i.e., node package manager — the command line interface of Node.js.

You can verify the installation by opening your terminal app and typing...

```sh
node -v
# Results into 7.19.1 — or installed version.

npm -v
# Results into v14.15.1 — or installed version.
```

</details>

Follow the following steps to add your functionalities to the theme:

1. Navigate to theme files `/wp-content/themes/your-renamed-theme-folder`, and open the terminal app.
2. Run the `npm install` command to install npm dependencies, and wait sometimes to complete it.

### 3. Renaming the Theme

You need to rename the theme folder and file names. Additionally, you should update the constants, variables, classes, text-domain, and functions within the theme to align with your theme name. For instance, if your theme is named `acme-block-theme`, then:

#### i. Renaming using command

In the theme folder, navigate to .bin and open `initial-rename.js`. Make the following changes:

- `your-renamed-theme`,
- `your_renamed_theme`,
- `YOUR_RENAMED_THEME`,
- `YOUR-RENAMED-THEME`,
- `Your-Renamed-Theme`,
- `Your_Renamed_Theme`,
- `YourRenamedTheme`

With:

- `acme-block-theme`,
- `acme_block_theme`,
- `ACME_BLOCK_THEME`,
- `ACME-BLOCK-THEME`,
- `Acme-Block-Theme`,
- `Acme_Block_Theme`,
- `AcmeBlockTheme`

Go to line no. 50 replace with your theme details.

Now Run `npm run initial-rename`

#### ii. OR Manual rename

- rename the folder from `wp-block-theme-boilerplate` to `acme-block-theme`
- rename all files from `wp-block-theme-boilerplate` to `acme-block-theme` PHP, JS and CSS
- replace text `wp_block_theme_boilerplate` to `acme_block_theme`
- replace text `wp-block-theme-boilerplate` to `acme-block-theme`
- replace text `Wp_Block_Theme_Boilerplate` to `Acme_Block_Theme`
- replace text `WP_BLOCK_THEME_BOILERPLATE` to `ACME_BLOCK_THEME`

### 4. Activate the Theme

It's safe to activate the theme at this point. Activate the theme through the `Appearance => Themes` screen in WordPress

Go to WordPress Dashboard => Appearance => Theme Info and View the Default `Theme Info` page.

### 5. Start Customization and Coding

Since this is now your own theme, feel free to customize using your preferred code editor and thoroughly test everything. You have the freedom to add, edit, remove, or update any files, folders, or code within the theme. However, it's important to be knowledgeable about the changes you make. Follow these steps to begin your development:

1. Navigate to theme files `/wp-content/themes/your-renamed-theme-folder`,and open a terminal app.
2. Run the `npm run start` command to start the development server for the JavaScript/SCSS sources (4 entrypoints — `editor.js`, `info.js`, `notice.js`, `public.js` — compiled via `@wordpress/scripts`). This sets up a live development server so you can see changes in real time. Use this in the development environment.
3. Once development is complete, run the `npm run build` command to finalize the development and prepare the theme for production. This command creates production files. After building, move the production files to the appropriate production directory.
4. Run `npm run deploy` to build the assets, regenerate the `.pot` file, and produce a deployable package. The bundling step (`.bin/deploy.js`, using the `archiver` package) creates `deploy/<slug>/` plus a `deploy/<slug>-<version>.zip` for submission to WordPress.org. `npm run deploy` runs the full pipeline (build + makepot + bundle) in one step — for releases, always run `npm run deploy` rather than `npm run deploy:bundle` alone.

**Code Quality / Verification**

Before committing, run the verification gates (per `AGENTS.md`):

- `npm run build` — compile JS + SCSS from `src/` to `build/`.
- `npx wp-scripts lint-js src/` and `npx wp-scripts lint-style` — lint JavaScript and SCSS.
- `vendor/bin/phpcs --standard=WordPress-Extra functions.php includes/ admin/ public/` — PHP coding standards. Requires a one-time `composer` setup to install PHPCS together with the WordPress and PHP Compatibility standards.


## Automated Deployment to WordPress.org

This theme ships with a ready-to-use GitHub Actions workflow at `.github/workflows/deploy.yml` that builds the theme and publishes it to the official WordPress.org theme directory for you. You do **not** need to run `svn` commands yourself.

**When does it run?**

- **Automatically** when you push a Git tag that starts with `v` (for example `v1.2.0`).
- **Manually** from the *Actions* tab in GitHub (workflow_dispatch) — useful for re-running or doing a dry run.

**One-time setup (2 steps):**

1. In your GitHub repository, go to **Settings → Secrets and variables → Actions** and add two repository secrets:
   - `SVN_USERNAME` — your WordPress.org account username.
   - `SVN_PASSWORD` — your WordPress.org account password (or an application password).
2. Make sure the theme slug in `style.css` and `package.json` matches the slug you reserved on WordPress.org.

**To release a new version:**

1. Bump the version in `style.css` and `package.json` (keep them identical).
2. Commit your changes.
3. Tag the release and push the tag:

   ```sh
   git tag v1.2.0
   git push origin v1.2.0
   ```

4. GitHub Actions checks out the code, runs `npm run deploy` (build + `.pot` regeneration + zip), validates the output, and commits the result to `https://themes.svn.wordpress.org/<slug>/<version>/`.

**Manual run options:** from the *Actions → Deploy to WordPress.org* page you can pass `slug`, `version`, and `dry_run=true` to test the pipeline without actually committing to SVN.

**Notes for beginners:**

- The theme slug defaults to your **repository name**; override it with the `slug` input if they differ.
- The workflow uploads any files in a `.wordpress-org/` folder (e.g. screenshot, banner) to the SVN `assets/` directory.
- A `dry_run` never commits — use it first to confirm the build and secrets are correct.

## Folder Information

<strong>WP Block Theme Boilerplate</strong> Folder Information

```sh
INSIDE: /wp-content/themes/your-renamed-theme-folder

├── .babelrc
├── .gitignore
├── AGENTS.md
├── functions.php
├── index.php
├── LICENSE.txt
├── package-lock.json (auto-generated by NPM)
├── package.json
├── readme.md (Edit as needed)
├── readme.txt (Edit as needed)
├── screenshot.png (Edit as needed)
├── style.css(Edit as needed)
├── .stylelintrc.json
├── theme.json (Edit as needed)
│
├── .bin
│  ├── deploy.js
│  └── initial-rename.js
│
├── .github
│  └── workflows
│     └── deploy.yml
│
├── admin
│  ├── templates
│  |  ├── index.php
│  |  ├── notice-getting-started.php (Edit as needed)
│  |  ├── notice-review.php (Edit as needed)
│  |  └── page-theme-info.php (Edit as needed)
│  ├── class-editor.php
│  ├── class-info.php
│  ├── class-notice.php
│  └── index.php
│
├── assets
│  ├── fonts (Self-hosted .woff2 fonts — add your own as per theme.json)
│  |  ├── inter/   (Inter .woff2 weights)
│  |  └── mukta/  (Mukta .woff2 weights)
│  ├── img (Add your own images as per patterns and other requirements)
│  |  ├── patternswp-logo.png
│  |  ├── banner-img.png
│  |   ├── default-banner.jpg
│  |   ├── featured-img-1.png
│  |   ├── bs-icon-columns.png
│  |   ├── bs-icon-columns-gap.png
│  |   ├── bs-icon-arrow-repeat.png
│  |   └── bs-icon-ui-check-grid.png
│  └── library
│       └── atomic-css
│           ├── atomic-rtl.css
│           ├── atomic.css
│           ├── atomic.min-rtl.css
│           └── atomic.min.css
│
├── build (auto-generated by NPM — `npm run build`)
│  ├── admin
│  |   ├── editor
│  |   |   ├── editor-rtl.css
│  |   |   ├── editor.asset.php
│  |   |   ├── editor.css
│  |   |   └── editor.js
│  |   ├── info
│  |   |   ├── info-rtl.css
│  |   |   ├── info.asset.php
│  |   |   ├── info.css
│  |   |   └── info.js
│  |   └── notice
│  |       ├── notice-rtl.css
│  |       ├── notice.asset.php
│  |       ├── notice.css
│  |       └── notice.js
│  └── public
│        ├── public-rtl.css
│        ├── public.asset.php
│        ├── public.css
│        └── public.js
│
├── includes
│  ├── api
│  |  ├── class-api-install-plugin.php
│  |  ├── class-api-settings.php
│  |   ├── class-api.php
│  |   └── index.php
│  ├── class-block-bindings.php
│  ├── class-include.php
│  ├── functions.php (Custom functions, adjust recommended plugins array as needed)
│  ├── index.php
│  └── main.php
│
├── languages
│  └── your-renamed-theme.pot
│
├── parts (Core WordPress folder for template parts: header, footer, sidebar, etc. Add/Edit as needed)
│  ├── comments.html
│  ├── footer.html
│  ├── header-absolute.html
│  ├── header-default.html
│  ├── list-archive-header.html
│  ├── post-meta.html
│  ├── post-navigation.html
│  ├── primary-header.html
│  ├── primary-sidebar.html
│  ├── secondary-sidebar.html
│  └── single-header.html
│
├── patterns (Core WordPress folder for patterns — pre-designed blocks. 55 patterns; add/remove as needed)
│  ├── card-1.php
│  ├── card-2.php
│  ├── contact-form.php
│  ├── copyright.php
│  ├── faq.php
│  ├── featured-section-1.php
│  ├── featured-section-2.php
│  ├── hero-banner.php
│  ├── landing.php
│  ├── list-archive-right-sidebar.php
│  ├── pagination.php
│  ├── query-grid.php
│  ├── query-list.php
│  ├── query-list-min.php
│  ├── scroll-to-top-button.php
│  ├── section-title-1.php
│  ├── single-post-full-width.php
│  ├── site-identity.php
│  └── … (55 patterns total)
│
├── public
│  ├── class-public.php
│  └── index.php
│
├── src (Development source — compiled to build/ by `npm run build`. Adjust package.json if removing folders.)
│  ├── editor.js
│  ├── info.js
│  ├── notice.js
│  ├── public.js
│  ├── _global.scss
│  ├── _mixins.scss
│  ├── prefix-vars.scss
│  ├── admin
│  |   ├── common.scss
│  |   ├── editor
│  |   |   ├── index.js
│  |   |   └── index.scss
│  |   ├── info
│  |   |   ├── index.js
│  |   |   └── index.scss
│  |   └── notice
│  |       ├── index.js
│  |       └── index.scss
│  └── public
│        ├── index.js
│        ├── index.scss
│        └── theme.scss
│
├── styles (Core WordPress folder for theme.json global settings and style variations)
│  ├── dark.json (global style variation)
│  └── blocks
│     └── button.json (block-style variation)
│
└── templates (Core WordPress folder for templates. Add/Edit as needed per Template Hierarchy)
   ├── 404.html
   ├── archive.html
   ├── blank.html
   ├── front-page.html
   ├── home.html
   ├── index.html
   ├── page.html
   ├── page-left-sidebar.html
   ├── page-right-sidebar.html
   ├── page-both-sidebar.html
   ├── search.html
   ├── single.html
   ├── single-left-sidebar.html
   ├── single-right-sidebar.html
   └── single-both-sidebar.html
```

## Generate a new theme with AI

This boilerplate is designed to be forked and renamed for new themes. If
you use an AI assistant (OpenCode, Claude, ChatGPT, Cursor, Copilot, etc.),
copy-paste the prompt below to bootstrap a new theme quickly. The prompt
is intentionally a template — replace the bracketed placeholders with
your brand values before pasting.

### Quick start: have AI rewrite this prompt for you

The full prompt below is intentionally detailed and generic, so it
works for any theme. Before pasting it into your AI chat, you can save
time by asking your favorite AI chat to **rephrase it for your specific
theme**. Copy the short prompt below, fill in the bracketed values
with your own, and paste it into your AI first:

```
My theme name is '[theme-name]' whose purpose is '[purpose]', rephrase
this prompt.
```

Then ask your AI to also customize the larger prompt block in the
next section (`### Prompt`) for your theme. Once your AI returns the
rewritten prompt, paste the rewritten version back into this README
(or feed it directly to a fresh AI session) to bootstrap your theme.

If you prefer, you can skip this step and fill in the full generic
prompt below manually.

### Prompt

``````
You are extending the WordPress block theme boilerplate at
`wp-content/themes/wp-block-theme-boilerplate` (the repo you're in).
Create a new sibling theme by following these steps exactly. Read
`AGENTS.md` and `README.md` first — they document the conventions,
file layout, and verification gates. Do not skip this step.

# Project parameters (replace these with your brand values)

- New theme slug (kebab-case): `[YOUR-THEME-SLUG]`         e.g. `patterns-foo`
- New theme name (display): `[Your Theme Display Name]`    e.g. `Patterns Foo`
- Theme URI: `[https://github.com/your-org/your-repo]`
- Author name: `[Your Name]`
- Author URI: `[https://your-site.com]`
- Brand slug (for CSS prefix): `[yourbrand]`
- Primary color: `[#hexcode]`                              e.g. `#3B82F6`
- Secondary color: `[#hexcode]`
- Accent color: `[#hexcode]`
- Body font family: `[Font Name]`                          e.g. `Inter`
- Heading font family: `[Font Name]`                       e.g. `Mukta`
- Text domain: `[your-theme-slug]`                         (kebab-case, same as slug)

# Steps

1. Copy the boilerplate folder to a new sibling at
   `wp-content/themes/[YOUR-THEME-SLUG]/`.

2. Open `.bin/initial-rename.js` and replace the `from:` and `to:`
   arrays to swap these identifiers across all files in one pass:
   - `wp-block-theme-boilerplate`  → `[YOUR-THEME-SLUG]`
   - `Wp_Block_Theme_Boilerplate`  → `[Your_Theme_PascalCase]`
   - `wp_block_theme_boilerplate`  → `wp_[your_slug_snake]`
   - `WP_BLOCK_THEME_BOILERPLATE`  → `[YOUR_SLUG_UPPER]`
   - `WpBlockThemeBoilerplate`     → `[YourSlugCamelCase]`
   - `companydomain-wbtb-`         → `[yourbrand]-[your-theme-slug]-`
   - `codersantosh` references in headers → your author name
   Run `npm run initial-rename` from the new theme directory.

3. From the new theme directory, install dependencies:
   ```bash
   cd wp-content/themes/[YOUR-THEME-SLUG]
   npm install
   ```

4. Edit `theme.json` design tokens to match your brand:
   - `settings.color.palette` and `settings.color.duotone` — replace
     the 8 palette entries with your brand colors. Keep the slug
     naming convention (`base`, `default`, `primary`, `secondary`,
     `tertiary`, `quaternary`, `quinary`, `accent`).
   - `settings.typography.fontFamilies` — replace with your font
     families. If self-hosting fonts, drop `.woff2` files in
     `assets/fonts/<family>/` and add `fontFace` entries.
   - `settings.spacing.spacingSizes` — adjust if your spacing scale
     differs from the boilerplate defaults.

5. Update `style.css` and `readme.txt` headers with the new theme
   name, URIs, and description. Stable tag can stay at `1.0.0`.

6. Audit the 55 boilerplate patterns:
   - Modify patterns that need adjustment for your brand colors and
     fonts (most patterns reference `var:preset|color|*` and
     `var:preset|font-family|*`, so theme.json changes flow through).
   - Delete patterns you don't need.
   - Add new patterns in `patterns/` following the docblock format:
     ```php
     <?php
     /**
      * Title: My Pattern
      * Slug: [YOUR-THEME-SLUG]/my-pattern
      * Categories: featured
      * Description: ...
      *
      * @package [Your_Theme_PascalCase]
      * @subpackage [Your_Theme_PascalCase]/patterns
      * @since 1.0.0
      */
     ?>
     <!-- wp:group ... -->
     ```

# Conventions to preserve

These are documented in `AGENTS.md` and observed in the boilerplate
source code. Do not deviate:

- Singleton method: `get_instance()`.
- Pattern category slug: `page` (unchanged across derived themes —
  bare slug is reused, not prefixed).
- Version constant: `[YOUR_SLUG_UPPER]_VERSION` (defined in `functions.php`).
  Use this for asset cache busters.
- Pattern, template, template-part file format: `<?php /** docblock */ ?>`
  with `Title / Slug / Categories / Description` fields.
- Cover blocks reference images by URL.
- `atomic.css` is a utility framework, MIT-licensed third-party. License
  header at the top of each file. Drop the file unchanged when renaming.
- Admin external links: replace patternswp.com URLs with your own.

# When uncertain

If you encounter a convention not documented in `AGENTS.md`, prefer
matching the existing patterns in the source code over inventing new
ones. The boilerplate is small (~160 files) and reading the relevant
parts is faster than guessing.

For questions about WordPress core APIs (block bindings, pattern
registry, theme.json schema), consult the official WordPress developer
documentation at developer.wordpress.org rather than guessing.
``````

## Contributing

Thank you for your interest in contributing to Project WP Block Theme Boilerplate. To submit your changes, please follow the steps outlined below.

1. **Fork the Repository:** Click on the "Fork" button on the top right corner of the repository page to create your fork.

2. **Clone your Fork:** Clone your forked repository to your local machine using the following command:

   ```sh
   git clone https://github.com/your-username/wp-block-theme-boilerplate.git
   ```

3. **Create a Feature Branch:** Create a new branch for your feature or bug fix:

   ```sh
   git checkout -b my-new-feature
   ```

4. **Make Changes:** Add your changes to the project. You can use the following command to stage all changes:

   ```sh
   git add .
   ```

5. **Commit Changes:** Commit your changes with a descriptive commit message:

   ```sh
   git commit -a m 'Add some feature'
   ```

6. **Push to your Branch:** Push your changes to the branch you created on your fork:

   ```sh
   git push origin my-new-feature
   ```

7. **Submit a Pull Request:** Go to the Pull Requests tab of the original repository and click on "New Pull Request." Provide a clear title and description for your changes, and submit the pull request.

Thank you for contributing to this project!

## Authors

- **Santosh Kunwar** - [codersantosh](https://twitter.com/codersantosh)

See also the list of [contributors](https://github.com/codersantosh/wp-block-theme-boilerplate/graphs/contributors) who participated in this project.

## Recommendations

- [WP React Plugin Boilerplate](https://github.com/codersantosh/wp-react-plugin-boilerplate)
- [ATOMIC WP CUSTOM TABLE AND QUERY](https://github.com/codersantosh/atomic-wp-custom-table-and-query)
- [Atrc (atrc) - Atomic React Components](https://www.npmjs.com/package/atrc)
- [Atomic CSS](https://github.com/codersantosh/atomic-css)

## License & Attribution

- GPLv2 or later © [Santosh Kunwar](https://twitter.com/codersantosh).

WP Block Theme Boilerplate is developed based on the structure of [WP React Plugin Boilerplate](https://github.com/codersantosh/wp-react-plugin-boilerplate).

## About Me

<strong>I just love WordPress more…</strong>

- [![CoderSantosh on Twitter](https://img.shields.io/twitter/follow/codersantosh.svg)](https://twitter.com/codersantosh/)
- <a href="https://profiles.wordpress.org/codersantosh/" target="_blank"><img src="https://s.w.org/style/images/about/WordPress-logotype-wmark.png" width="50" height="50" />WordPress Profile</a>

### Recent Projects

<a href="https://wordpress.org/plugins/patterns-store/" target="_blank"><img src="https://ps.w.org/patterns-store/assets/icon.svg" width="50" height="50" />Patterns Store – Creates a store for WordPress Patterns</a>

