# WordPress Theme Starter

This is a starter project for learning how to convert HTML templates into a WordPress theme. It includes HTML files and Tailwind CSS styling.

## Project Structure

```
wordpress-theme-starter/
├── *.html                 # HTML files to be converted to WordPress templates
├── assets/                # All assets and configuration
│   ├── css/               # Compiled CSS files
│   ├── images/            # Image files
│   ├── fauna-assets/      # Theme-specific assets
│   └── tailwind/          # Tailwind CSS configuration
├── package.json           # Project dependencies and scripts
└── README.md              # This file
```

## Getting Started

1. Install dependencies:

```bash
npm install
```

2. Build Tailwind CSS:

```bash
npm run build
```

3. Watch for CSS changes during development:

```bash
npm run watch
```

## WordPress Theme Conversion Process

The conversion from HTML to PHP should be done manually as a learning exercise. Follow these steps:

1. **Create a WordPress theme folder**:
   - Create a folder in your WordPress installation: `wp-content/themes/your-theme-name/`
   - Create a `style.css` file with WordPress theme metadata
   - Create a basic `functions.php` file

2. **Study the HTML structure**:
   - Identify common parts (header, footer, etc.)
   - Look at how the pages are structured
   - Identify dynamic content areas that will need WordPress functions

3. **Convert HTML files to PHP templates**:
   - Start with `header.php` and `footer.php`
   - Create `index.php` by combining your header, content from index.html, and footer
   - Create other templates (page.php, single.php, etc.) as needed

4. **Replace static content with WordPress functions**:
   - Navigation menus → `wp_nav_menu()`
   - Page content → `the_content()`
   - Post loops → WordPress Loop
   - Update asset paths → `<?php echo get_template_directory_uri(); ?>/assets/...`

5. **Copy assets to theme folder**:
   - Copy the contents of the `assets` folder to your theme's `assets` folder

## Example WordPress Theme Structure

```
your-theme-name/
├── style.css              # Theme metadata and CSS
├── functions.php          # Theme functionality
├── index.php              # Main template
├── header.php             # Header template
├── footer.php             # Footer template
├── page.php               # Page template
├── single.php             # Single post template
├── screenshot.png         # Theme preview image
├── assets/                # Theme assets
│   ├── css/               # CSS files
│   ├── js/                # JavaScript files
│   └── images/            # Image files
└── template-parts/        # Reusable template parts
    ├── content.php        # Content template part
    └── components/        # Components
```

## Learning Resources

- [WordPress Theme Development](https://developer.wordpress.org/themes/)
- [WordPress Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/)
- [WordPress Template Tags](https://developer.wordpress.org/themes/basics/template-tags/)
- [Tailwind CSS](https://tailwindcss.com/)
