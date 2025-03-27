# Converting HTML Templates to a WordPress Theme

This guide provides specific steps to convert HTML templates into a functional WordPress theme. We'll focus on creating the essential files, converting the header and footer, and setting up basic templates without adding dynamic content yet.

## 1. Create a WordPress Theme Folder

First, create a folder for your theme in the WordPress themes directory:

```bash
# Create the theme directory in your WordPress installation
mkdir -p /path/to/wordpress/wp-content/themes/flora-fauna
```

## 2. Create Essential WordPress Files

### Create style.css

This file contains theme metadata and is required for WordPress to recognize your theme:

```css
/*
Theme Name: Flora-Fauna
Theme URI: https://example.com/flora-fauna
Author: Your Name
Author URI: https://example.com
Description: A clean, modern WordPress theme with Tailwind CSS.
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: flora-fauna
Tags: responsive, modern, tailwind
*/

/* 
Main styles are in assets/css/tailwind.min.css
This file is required for WordPress theme identification
*/
```

### Create functions.php

```php
<?php
/**
 * Theme functions and definitions
 */

// Set up theme defaults and register support for various WordPress features
function florafauna_setup() {
    // Add default posts and comments RSS feed links
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(
        array(
            'primary' => esc_html__('Primary Menu', 'flora-fauna'),
            'footer-1' => esc_html__('Footer Menu 1', 'flora-fauna'),
            'footer-2' => esc_html__('Footer Menu 2', 'flora-fauna'),
            'footer-3' => esc_html__('Footer Menu 3', 'flora-fauna'),
        )
    );

    // Switch default core markup to output valid HTML5
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );
}
add_action('after_setup_theme', 'florafauna_setup');

// Enqueue scripts and styles
function florafauna_scripts() {
    // Enqueue Tailwind CSS
    wp_enqueue_style('florafauna-tailwind', get_template_directory_uri() . '/assets/css/tailwind.min.css', array(), '1.0.0');
    
    // Enqueue Alpine.js (if your template uses it)
    wp_enqueue_script('alpine-js', 'https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js', array(), '3.13.3', true);
}
add_action('wp_enqueue_scripts', 'florafauna_scripts');
```

## 3. Copy Assets to Theme Folder

Copy the assets directory from this project to your WordPress theme:

```bash
cp -r assets/ /path/to/wordpress/wp-content/themes/flora-fauna/
```

## 4. Create Header and Footer

### Create header.php

```php
<?php
/**
 * The header for our theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.png">
    <?php wp_head(); ?>
</head>

<body <?php body_class('antialiased bg-body text-body font-body'); ?>>
<?php wp_body_open(); ?>

<div>
    <div>
        <p class="mb-0 py-3 bg-lime-500 text-center">Want to learn how to build templates like this one? Visit <a href="https://www.pixelrocket.store">www.pixelrocket.store</a></p>
    </div>
    
    <div>
        <section x-data="{ mobileNavOpen: false }" class="relative bg-teal-900">
            <img class="absolute top-0 left-0 w-full h-full" src="<?php echo get_template_directory_uri(); ?>/assets/fauna-assets/headers/bg-waves.png" alt="">
            <nav class="py-6">
                <div class="container mx-auto px-4">
                    <div class="relative flex items-center justify-between">
                        <a class="inline-block" href="<?php echo esc_url(home_url('/')); ?>">
                            <img class="h-8" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.svg" alt="<?php bloginfo('name'); ?>">
                        </a>
                        
                        <?php
                        // If we want to include the WordPress menu, we'd replace the static menu with something like:
                        /*
                        wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'container' => 'ul',
                                'container_class' => 'absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 hidden md:flex',
                                'menu_class' => '',
                                'items_wrap' => '<ul class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 hidden md:flex">%3$s</ul>',
                            )
                        );
                        */
                        ?>
                        
                        <!-- For now we'll keep the static menu for simplicity -->
                        <ul class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 hidden md:flex">
                            <li class="mr-8"><a class="inline-block text-white hover:text-lime-500 font-medium" href="<?php echo esc_url(home_url('/about')); ?>">About us</a></li>
                            <li class="mr-8"><a class="inline-block text-white hover:text-lime-500 font-medium" href="<?php echo esc_url(home_url('/pricing')); ?>">Pricing</a></li>
                            <li class="mr-8"><a class="inline-block text-white hover:text-lime-500 font-medium" href="<?php echo esc_url(home_url('/contact')); ?>">Contact us</a></li>
                            <li><a class="inline-block text-white hover:text-lime-500 font-medium" href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a></li>
                        </ul>
                        
                        <div class="flex items-center justify-end">
                            <div class="hidden md:block">
                                <a class="inline-flex group py-2.5 px-4 items-center justify-center text-sm font-medium text-white hover:text-teal-900 border border-white hover:bg-white rounded-full transition duration-200" href="<?php echo esc_url(home_url('/contact')); ?>">
                                    <span class="mr-2">Get in touch</span>
                                    <span class="transform group-hover:translate-x-0.5 transition-transform duration-200">
                                        <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.75 10H15.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10 4.75L15.25 10L10 15.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <button class="md:hidden text-white hover:text-lime-500" x-on:click="mobileNavOpen = !mobileNavOpen">
                                <svg width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.19995 23.2H26.7999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5.19995 16H26.7999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5.19995 8.79999H26.7999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
            
            <!-- Mobile Menu -->
            <div x-cloak x-show="mobileNavOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" class="fixed top-0 left-0 bottom-0 w-full xs:w-5/6 xs:max-w-md z-50">
                <!-- Mobile menu content remains the same as original HTML -->
            </div>
        </section>
    </div>
</div>
```

### Create footer.php

```php
<?php
/**
 * The template for displaying the footer
 */
?>

<footer class="relative py-12 lg:py-24 bg-orange-50 overflow-hidden">
    <img class="absolute bottom-0 left-0" src="<?php echo get_template_directory_uri(); ?>/assets/fauna-assets/footer/waves-lines-left-bottom.png" alt="">
    <div class="container px-4 mx-auto relative">
        <div class="flex flex-wrap mb-16 -mx-4">
            <div class="w-full lg:w-2/12 xl:w-2/12 px-4 mb-16 lg:mb-0">
                <a class="inline-block mb-4" href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="<?php bloginfo('name'); ?>">
                </a>
            </div>
            
            <div class="w-full md:w-7/12 lg:w-6/12 px-4 mb-16 lg:mb-0">
                <div class="flex flex-wrap -mx-4">
                    <!-- Footer menus remain static for now -->
                    <div class="w-1/2 xs:w-1/3 px-4 mb-8 xs:mb-0">
                        <h3 class="mb-6 font-bold">Platform</h3>
                        <ul>
                            <li class="mb-3"><a class="inline-block text-gray-600 hover:text-lime-500 font-medium" href="#">Overview</a></li>
                            <li class="mb-3"><a class="inline-block text-gray-600 hover:text-lime-500 font-medium" href="#">Features</a></li>
                            <li class="mb-3"><a class="inline-block text-gray-600 hover:text-lime-500 font-medium" href="#">Solutions</a></li>
                            <li class="mb-3"><a class="inline-block text-gray-600 hover:text-lime-500 font-medium" href="#">Tutorials</a></li>
                            <li><a class="inline-block text-gray-600 hover:text-lime-500 font-medium" href="#">Pricing</a></li>
                        </ul>
                    </div>
                    
                    <div class="w-1/2 xs:w-1/3 px-4 mb-8 xs:mb-0">
                        <h3 class="mb-6 font-bold">Resources</h3>
                        <ul>
                            <li class="mb-3"><a class="inline-block text-gray-600 hover:text-lime-500 font-medium" href="#">Blog</a></li>
                            <li class="mb-3"><a class="inline-block text-gray-600 hover:text-lime-500 font-medium" href="#">Support</a></li>
                            <li class="mb-3"><a class="inline-block text-gray-600 hover:text-lime-500 font-medium" href="#">Status</a></li>
                            <li><a class="inline-block text-gray-600 hover:text-lime-500 font-medium" href="#">Webinars</a></li>
                        </ul>
                    </div>
                    
                    <div class="w-full xs:w-1/3 px-4">
                        <h3 class="mb-6 font-bold">Company</h3>
                        <ul>
                            <li class="mb-3"><a class="inline-block text-gray-600 hover:text-lime-500 font-medium" href="#">About us</a></li>
                            <li class="mb-3"><a class="inline-block text-gray-600 hover:text-lime-500 font-medium" href="#">Careers</a></li>
                            <li class="mb-3"><a class="inline-block text-gray-600 hover:text-lime-500 font-medium" href="#">Press</a></li>
                            <li><a class="inline-block text-gray-600 hover:text-lime-500 font-medium" href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="w-full md:w-5/12 lg:w-4/12 px-4">
                <div class="max-w-sm p-8 bg-teal-900 rounded-2xl mx-auto md:mr-0">
                    <h5 class="text-xl font-medium text-white mb-4">Your Source for Green Energy Updates</h5>
                    <p class="text-sm text-white opacity-80 leading-normal mb-10">Stay in the loop with our Green Horizon newsletter, where we deliver bite-sized insights into the latest green energy solutions.</p>
                    <div class="flex flex-col">
                        <input type="email" class="h-12 w-full px-4 py-1 placeholder-gray-700 outline-none ring-offset-0 focus:ring-2 focus:ring-lime-500 shadow rounded-full" placeholder="Your e-mail...">
                        <a href="#" class="h-12 inline-flex mt-3 py-1 px-5 items-center justify-center font-medium text-teal-900 border border-lime-500 hover:border-white bg-lime-500 hover:bg-white rounded-full transition duration-200">Get in touch</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bottom footer -->
        <div class="flex flex-wrap -mb-3 justify-between">
            <div class="flex items-center mb-3">
                <a href="#" class="inline-block mr-4 text-black hover:text-lime-500">
                    <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_230_4832)">
                            <path d="M11.5481 19.9999V10.8776H14.6088L15.068 7.32147H11.5481V5.05138C11.5481 4.02211 11.8327 3.32067 13.3104 3.32067L15.1919 3.3199V0.139138C14.8665 0.0968538 13.7496 -9.15527e-05 12.4496 -9.15527e-05C9.735 -9.15527e-05 7.87654 1.65687 7.87654 4.69918V7.32147H4.80652V10.8776H7.87654V19.9999H11.5481Z" fill="currentColor"/>
                        </g>
                    </svg>
                </a>
                <!-- Additional social icons... -->
            </div>
            <p class="text-sm text-gray-500 mb-3">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
```

## 5. Create index.php

This is the main template file that WordPress will use if no other template exists:

```php
<?php
/**
 * The main template file
 */

get_header(); ?>

<main class="antialiased bg-body text-body font-body">
    <?php if (have_posts()) : ?>
        
        <section class="relative pt-18 pb-24 sm:pb-32 lg:pt-36 lg:pb-62 bg-teal-900">
            <img class="absolute top-0 left-0 w-full h-full" src="<?php echo get_template_directory_uri(); ?>/assets/fauna-assets/headers/bg-waves.png" alt="">
            <div class="container mx-auto px-4 relative">
                <div class="max-w-lg xl:max-w-xl mx-auto text-center">
                    <h1 class="font-heading text-5xl xs:text-7xl xl:text-8xl tracking-tight text-white mb-8">
                        Energizing a Green Future
                    </h1>
                    <p class="max-w-md xl:max-w-none text-lg text-white opacity-80 mb-10">
                        Our commitment to green energy is paving the way for a cleaner, healthier planet. Join us on a journey towards a future where clean, renewable energy sources transform the way we power our lives.
                    </p>
                    <a href="#" class="inline-flex py-4 px-6 items-center justify-center text-lg font-medium text-teal-900 border border-lime-500 hover:border-white bg-lime-500 hover:bg-white rounded-full transition duration-200">
                        See our solutions
                    </a>
                </div>
            </div>
        </section>

        <!-- Stats section -->
        <section class="py-12 lg:py-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full sm:w-1/2 md:w-1/4 px-4 mb-10 md:mb-0">
                        <div class="text-center">
                            <h5 class="text-2xl xs:text-3xl lg:text-4xl xl:text-5xl mb-4">5,000 Mwh</h5>
                            <span class="text-base lg:text-lg text-gray-700">Renewable Energy Generated</span>
                        </div>
                    </div>
                    <!-- Additional stats... -->
                </div>
            </div>
        </section>

        <!-- Main loop -->
        <div class="container mx-auto px-4 py-12">
            <div class="flex flex-wrap -mx-4">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                        <article class="bg-white rounded-lg shadow-md overflow-hidden">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="aspect-w-16 aspect-h-9">
                                    <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover']); ?>
                                </div>
                            <?php endif; ?>
                            <div class="p-6">
                                <h2 class="text-2xl font-medium mb-2">
                                    <a href="<?php the_permalink(); ?>" class="text-teal-900 hover:text-lime-500">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                <div class="text-gray-700 mb-4">
                                    <?php the_excerpt(); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="inline-block text-lg font-medium hover:text-lime-500">
                                    Read more
                                </a>
                            </div>
                        </article>
                    </div>
                <?php endwhile; ?>
            </div>
            
            <div class="pagination flex justify-center mt-8">
                <?php the_posts_pagination(); ?>
            </div>
        </div>

    <?php else : ?>
        <div class="container mx-auto px-4 py-12">
            <h2 class="text-3xl font-medium mb-4">No posts found</h2>
            <p>Sorry, but no posts match your search criteria.</p>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
```

## 6. Create page.php

This template handles individual pages:

```php
<?php
/**
 * The template for displaying all pages
 */

get_header(); ?>

<main class="antialiased bg-body text-body font-body">
    <?php
    while (have_posts()) :
        the_post();
        ?>

        <section class="relative py-16 md:py-24 bg-teal-900">
            <img class="absolute top-0 left-0 w-full h-full" src="<?php echo get_template_directory_uri(); ?>/assets/fauna-assets/headers/bg-waves.png" alt="">
            <div class="container mx-auto px-4 relative">
                <div class="max-w-lg xl:max-w-xl mx-auto text-center">
                    <h1 class="font-heading text-4xl md:text-5xl tracking-tight text-white mb-8">
                        <?php the_title(); ?>
                    </h1>
                </div>
            </div>
        </section>

        <section class="py-12 lg:py-24">
            <div class="container mx-auto px-4">
                <div class="max-w-3xl mx-auto">
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
```

## 7. Create single.php

This template handles individual posts:

```php
<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

<main class="antialiased bg-body text-body font-body">
    <?php
    while (have_posts()) :
        the_post();
        ?>

        <section class="relative py-16 md:py-24 bg-teal-900">
            <img class="absolute top-0 left-0 w-full h-full" src="<?php echo get_template_directory_uri(); ?>/assets/fauna-assets/headers/bg-waves.png" alt="">
            <div class="container mx-auto px-4 relative">
                <div class="max-w-2xl mx-auto text-center">
                    <h1 class="font-heading text-4xl md:text-5xl tracking-tight text-white mb-8">
                        <?php the_title(); ?>
                    </h1>
                    <div class="text-white opacity-80 mb-8">
                        <?php echo get_the_date(); ?> | <?php the_author(); ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-12 lg:py-24">
            <div class="container mx-auto px-4">
                <div class="max-w-3xl mx-auto">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="mb-10">
                            <?php the_post_thumbnail('large', ['class' => 'w-full h-auto rounded-lg']); ?>
                        </div>
                    <?php endif; ?>

                    <div class="content">
                        <?php the_content(); ?>
                    </div>

                    <div class="mt-12 pt-12 border-t border-gray-200">
                        <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
```

## 8. Add Template-specific Pages

You can create specific page templates for the about, contact, and pricing pages. Here's an example for about.php:

```php
<?php
/**
 * Template Name: About Page
 *
 * @package Flora-Fauna
 */

get_header(); ?>

<main class="antialiased bg-body text-body font-body">
    <!-- Copy the content from about.html and convert paths to use get_template_directory_uri() -->
    <!-- Example: -->
    <section class="relative py-16 md:py-24 bg-teal-900">
        <img class="absolute top-0 left-0 w-full h-full" src="<?php echo get_template_directory_uri(); ?>/assets/fauna-assets/headers/bg-waves.png" alt="">
        <div class="container mx-auto px-4 relative">
            <div class="max-w-2xl mx-auto text-center">
                <h1 class="font-heading text-4xl md:text-5xl tracking-tight text-white mb-8">
                    About Us
                </h1>
                <p class="text-white opacity-80">
                    Learn about our mission and commitment to green energy.
                </p>
            </div>
        </div>
    </section>
    
    <!-- Continue with content from the about.html file -->
    
    <?php the_content(); ?>
</main>

<?php get_footer(); ?>
```

To use this template:

1. Create a page in WordPress admin
2. Set the title to "About Us"
3. In the Page Attributes section, select "About Page" from the Template dropdown
4. Publish the page

## 9. Create a Homepage Template

```php
<?php
/**
 * Template Name: Homepage
 *
 * @package Flora-Fauna
 */

get_header(); ?>

<main class="antialiased bg-body text-body font-body">
    <!-- Hero section -->
    <section class="relative pt-18 pb-24 sm:pb-32 lg:pt-36 lg:pb-62 bg-teal-900">
        <img class="absolute top-0 left-0 w-full h-full" src="<?php echo get_template_directory_uri(); ?>/assets/fauna-assets/headers/bg-waves.png" alt="">
        <div class="container mx-auto px-4 relative">
            <div class="max-w-lg xl:max-w-xl mx-auto text-center">
                <h1 class="font-heading text-5xl xs:text-7xl xl:text-8xl tracking-tight text-white mb-8">
                    Energizing a Green Future
                </h1>
                <p class="max-w-md xl:max-w-none text-lg text-white opacity-80 mb-10">
                    Our commitment to green energy is paving the way for a cleaner, healthier planet. Join us on a journey towards a future where clean, renewable energy sources transform the way we power our lives.
                </p>
                <a href="#" class="inline-flex py-4 px-6 items-center justify-center text-lg font-medium text-teal-900 border border-lime-500 hover:border-white bg-lime-500 hover:bg-white rounded-full transition duration-200">
                    See our solutions
                </a>
            </div>
        </div>
    </section>

    <!-- Copy other sections from index.html -->
    
    <?php the_content(); ?>
</main>

<?php get_footer(); ?>
```

## 10. Make Site Static Content Display Properly

To ensure all static content from your HTML files is displayed properly:

1. Copy the key content sections from your HTML files to the corresponding PHP templates
2. Update all paths to use `<?php echo get_template_directory_uri(); ?>/assets/...`
3. Leave WordPress Loop calls (`the_content()`, etc.) where dynamic content will go

## 11. Configure WordPress Settings

1. Create pages for About, Contact, Pricing, etc.
2. Set the Homepage:
   - Go to Settings → Reading
   - Select "A static page" for "Your homepage displays"
   - Choose your homepage from the dropdown

## Next Steps

After completing these steps, you'll have a working basic WordPress theme that:
- Has the correct file structure
- Includes proper WordPress hooks
- Displays your static content
- Loads your styles and scripts correctly

From here, you can begin:
- Creating dynamic content areas with Advanced Custom Fields
- Setting up WordPress menus
- Adding widget areas
- Creating custom post types if needed

## Testing Your Theme

After implementation:
1. Check if styles load correctly
2. Verify navigation links work
3. Test responsive design
4. Create posts and pages to test the templates
5. Check that images display properly