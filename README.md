# WordPress Theme Starter

This is a starter project for learning how to convert HTML templates into a WordPress theme. It includes HTML files and Tailwind CSS styling.

> **New!** Check out our [WordPress Theme Development Guide](WORDPRESS-GUIDE.md) for detailed explanations of WordPress template files, theme structure, and how to use Advanced Custom Fields for dynamic content!
>
> For a step-by-step guide specific to converting these HTML templates to a WordPress theme, see our [Conversion Guide](CONVERSION-GUIDE.md).

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
├── README.md              # This file
├── WORDPRESS-GUIDE.md     # Detailed WordPress theme development guide
└── CONVERSION-GUIDE.md    # Step-by-step guide for converting these templates
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

The conversion from HTML to PHP should be done manually as a learning exercise. Follow our [Conversion Guide](CONVERSION-GUIDE.md) for detailed, step-by-step instructions specific to this project.

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
- [Advanced Custom Fields](https://www.advancedcustomfields.com/)
- [Tailwind CSS](https://tailwindcss.com/)
