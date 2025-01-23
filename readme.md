# WP Block Theme Boilerplate

> `WP Block Theme Boilerplate` is a starter WordPress theme to develop WordPress block themes with modern development practices.

## Description

[Demo WP React Plugin Boilerplate](https://demo.patternswp.com/wp-block-theme-boilerplate/)

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
  - [Changelog](#changelog)
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
2. Run the `npm run start` command to initialize the development of React JS. This command sets up a development server, allowing you to see changes in real time. Use this in the development environment.
3. Once development is complete, run the `npm run build` command to finalize the development and prepare the theme for production. This command creates production files. After building, move the production files to the appropriate production directory.
4. Run the `npm run deploy` command directly to create a production-ready deploy folder. This folder contains all the necessary files for deploying your theme to a live WordPress site, skipping the need for `npm run build` beforehand.

## Folder Information

<strong>WP Block Theme Boilerplate</strong> Folder Information

```sh
INSIDE: /wp-installatioon-folder/wp-content/themes/your-renamed-theme-folder

├── .babelrc
├── .gitignore
├── functions.php
├── index.php
├── LICENSE.txt
├── package-lock.json (auto-generated by NPM)
├── package.json
├── readme.md (Edit as needed)
├── README.txt (Edit as needed)
├── screenshot.png (Edit as needed)
├── style.css(Edit as needed)
├── theme.json (Edit as needed)
|
├── .bin
|  ├── copy.js
|  ├── initial-rename.js
|  └── make-string.js
|
├── admin
|  ├── templates
|  |  ├── index.php
|  |  ├── notice-getting-started.php (Edit as needed)
|  |  ├── notice-review.php (Edit as needed)
|  |  └── page-theme-info.php (Edit as needed)
|  ├── class-editor.php
|  ├── class-info.php
|  ├── class-notice.php
|  └── index.php
|
├── assets
|  ├── fonts (Add your own fonts as per theme.json)
|  |  ├── font1.ttf (Add own font)
|  |  ├── font1.ttf (Add own font)
|  |  ├── font3.css (Add own font)
|  |  └── (Add fonts as needed)
|  ├── img (Add your own images as per patterns and other requirements)
|  |  ├── banner-img.png (Replace with your image - images for pattern)
|  |  ├── default-banner.png (Replace with your image - images for pattern)
|  |  ├── feature-img-1.png (Replace with your image - images for pattern)
|  |  └── wp-block-theme-boilerplate-logo.png (Replace with your logo)
|  └── library
|       └── atomic-css
|           ├── atomic-rtl.css
|           ├── atomic-rtl.min.css
|           ├── atomic.css
|           └── atomic.min.css
|
├── build (auto-generated by NPM)
|  ├── admin
|  |   ├── editor
|  |   |   ├── editor-rtl.css
|  |   |   ├── editor.asset.php
|  |   |   ├── editor.css
|  |   |   └── editor.js
|  |   ├── info
|  |   |   ├── info-rtl.css
|  |   |   ├── info.asset.php
|  |   |   ├── info.css
|  |   |   └── info.js
|  |   └── notice
|  |       ├── notice-rtl.css
|  |       ├── notice.asset.php
|  |       ├── notice.css
|  |       └── notice.js
|  |
|  └── public
|        ├── public-rtl.css
|        ├── public.asset.php
|        ├── public.css
|        └── public.js
|
├── includes
|  ├── api
|  |  ├── class-api-install-plugin.php
|  |  ├── class-api-settings.php
|  |  ├── class-api.php
|  |  └── index.php
|  ├── class-include.php
|  ├── functions.php (Custom functions.php, adjust recommended plugins array as needed)
|  ├── index.php
|  └── main.php
|
├── languages
|  └── your-renamed-theme.pot
|
├── parts (Core WordPress folder for template parts like header, footer, sidebar, etc. Add/Edit as needed)
|  ├── comments.html
|  ├── footer.html
|  ├── header.html
|  ├── post-meta.html
|  ├── post-navigation.html
|  ├── primary-sidebar.html
|  ├── secondary-sidebar.html
|  └── (Add own template parts as needed)
|
├── patterns (Core WordPress folder for patterns (pre-designed blocks). Add your own patterns here)
|  ├── pattern-1.php
|  ├── another-example.php
|  └── (Add own patterns as needed)
|
├── public
|  ├── class-public.php
|  └── index.php
|
├── src (Remove any unnecessary folders if they are not needed, and make sure to adjust the package.json file accordingly.)
|  ├── admin
|  |   ├── editor(for block editor)
|  |   |   ├── index.js
|  |   |   └── index.scss
|  |   ├── info(for theme info page)
|  |   |   ├── index.js
|  |   |   └── index.scss
|  |   └── notice(for theme notice)
|  |       ├── index.js
|  |       └── index.scss
|  |
|  └── public(for frontend)
|        ├── index.js
|        └── index.scss
|
├── styles(Core WordPress folder for theme’s global settings and style variations. Add your own json/s)
|  ├── dark.json (Add own theme.json variation)
|  ├── ember.json (Add own theme.json variation)
|  ├── fossil.json (Add own theme.json variation)
|  ├── blocks (Additional blocks variations)
|  |  ├── pill.jss (Add own variation)
|  |  ├── post-terms-1.json (Add own variation)
|  |  ├── section-1.json (Add own variation)
|  |  └── (Add blocks variations as needed)
|  ├── colors (Additional colors variations)
|  |  ├── 01-evening.json (Add own variation)
|  |  ├── 02-noon.json (Add own variation)
|  |  ├── 03-dusk.json (Add own variation)
|  |  └── (Add colors variations as needed)
|  ├── typography(Additional typography variations)
|  |  ├── typography-preset-1.json
|  |  ├── typography-preset-2.json
|  |  ├── typography-preset-3.json
|  |  └── (Add typography variations as needed)
|  └── (Additional theme.json, blocks, colors and typography variations)
|
└── templates(Core WordPress folder for templates. Add/Edit as needed based on Template Hierarchy)
   ├── 404.html
   ├── archive.html
   ├── page.html
   ├── index.html
   └── (Additional templates as needed)
```

## Changelog

### 1.0.0

- Initial Release

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
