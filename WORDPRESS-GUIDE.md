# WordPress Theme Development Guide

This guide explains the fundamentals of WordPress theme development, the purpose of template files, and how to make content dynamic using Advanced Custom Fields.

## WordPress Theme Structure

A WordPress theme typically contains these key files:

- `style.css` - Contains theme metadata and optional CSS
- `functions.php` - Defines theme functionality, features, and hooks
- `index.php` - The main fallback template
- `header.php` - The site header template
- `footer.php` - The site footer template
- Other template files (explained below)

## Template Hierarchy

WordPress uses a template hierarchy to determine which file to use for different content types:

![Template Hierarchy](https://developer.wordpress.org/files/2014/10/Screenshot-2019-01-23-00.20.04.png)

### Key Template Files

| File | Purpose |
|------|---------|
| `index.php` | The main fallback template that displays content when no more specific template is found |
| `front-page.php` | Displays the front/home page (takes precedence over homepage.php and index.php) |
| `page.php` | Used for displaying individual pages |
| `single.php` | Used for displaying individual posts |
| `archive.php` | Used for category, tag, author, date, custom post type archives |
| `search.php` | Displays search results |
| `404.php` | Displays when no page is found |

### Content Template Parts

These files are typically included within the main templates:

| File | Purpose |
|------|---------|
| `content.php` | Displays post/page content, usually called from the loop in index.php or other templates |
| `content-{post-type}.php` | Specific template part for different post types (e.g., content-page.php) |
| `template-parts/` | Directory for organizing reusable template parts |

## The WordPress Loop

The Loop is the core mechanism WordPress uses to display posts:

```php
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <!-- Content goes here -->
        <h2><?php the_title(); ?></h2>
        <div><?php the_content(); ?></div>
    <?php endwhile; ?>
<?php else : ?>
    <p>No posts found.</p>
<?php endif; ?>
```

## Template Tags

WordPress provides template tags to display content:

| Tag | Description |
|-----|-------------|
| `<?php the_title(); ?>` | Display the post/page title |
| `<?php the_content(); ?>` | Display the full content |
| `<?php the_excerpt(); ?>` | Display a summary of the content |
| `<?php the_permalink(); ?>` | Get the URL of the post/page |
| `<?php the_post_thumbnail(); ?>` | Display the featured image |

## Advanced Custom Fields (ACF)

[Advanced Custom Fields](https://www.advancedcustomfields.com/) is a plugin that allows you to add custom fields to WordPress edit screens and display them in your theme.

### What is ACF?

ACF allows you to:
- Create custom fields for pages, posts, custom post types
- Group fields together under field groups
- Assign field groups to specific pages/posts using location rules
- Create flexible content areas with multiple layouts

### Creating Dynamic Content with ACF

#### 1. Install and Activate ACF

Install the ACF plugin from the WordPress plugin directory or purchase ACF Pro for more features.

#### 2. Create Field Groups

In the WordPress admin, go to **Custom Fields → Add New** to create a field group:
- Add fields (text, image, repeater, etc.)
- Set location rules (where these fields appear)
- Configure field settings

#### 3. Display ACF Fields in Your Theme

```php
<?php 
// Basic text field
$title = get_field('hero_title');
if ($title) {
    echo '<h1>' . $title . '</h1>';
}

// Image field
$image = get_field('hero_image');
if ($image) {
    echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '">';
}
?>
```

#### 4. Common ACF Field Types

- **Text** - Simple text input
- **Textarea** - Multi-line text
- **WYSIWYG Editor** - Visual editor for formatted content
- **Image** - Upload/select an image
- **Gallery** - Multiple images
- **File** - Any file type
- **Select** - Dropdown with choices
- **Checkbox** - Multiple choices
- **Radio Button** - Single choice
- **Repeater** - Group of fields that can be repeated
- **Flexible Content** - Multiple content layouts

### Example: Making a Hero Section Dynamic

#### Create the Fields

1. Create a field group called "Hero Section"
2. Add fields:
   - Title (text)
   - Description (textarea)
   - Background Image (image)
   - Button Text (text)
   - Button Link (url)
3. Set location rules to show on the home page

#### Display in Theme

```php
<section class="hero">
    <?php if (get_field('hero_background_image')) : ?>
        <img class="bg-image" src="<?php echo get_field('hero_background_image')['url']; ?>" alt="">
    <?php endif; ?>
    
    <div class="container">
        <?php if (get_field('hero_title')) : ?>
            <h1><?php echo get_field('hero_title'); ?></h1>
        <?php endif; ?>
        
        <?php if (get_field('hero_description')) : ?>
            <p><?php echo get_field('hero_description'); ?></p>
        <?php endif; ?>
        
        <?php if (get_field('hero_button_text') && get_field('hero_button_link')) : ?>
            <a href="<?php echo get_field('hero_button_link'); ?>" class="button">
                <?php echo get_field('hero_button_text'); ?>
            </a>
        <?php endif; ?>
    </div>
</section>
```

### ACF Flexible Content

For more dynamic layouts, use ACF's Flexible Content field:

1. Create a flexible content field named "Page Content"
2. Add layout options like "Text Block", "Image & Text", "Gallery", etc.
3. Within each layout, add relevant sub-fields

```php
<?php
// Check if the flexible content field exists
if (have_rows('page_content')) :
    // Loop through the rows of data
    while (have_rows('page_content')) : the_row();

        // Text Block layout
        if (get_row_layout() == 'text_block') : ?>
            <section class="text-block">
                <h2><?php echo get_sub_field('heading'); ?></h2>
                <div class="content">
                    <?php echo get_sub_field('content'); ?>
                </div>
            </section>

        // Image & Text layout
        <?php elseif (get_row_layout() == 'image_text') : 
            $image = get_sub_field('image');
            ?>
            <section class="image-text <?php echo get_sub_field('image_position'); ?>">
                <div class="image">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
                <div class="content">
                    <h2><?php echo get_sub_field('heading'); ?></h2>
                    <?php echo get_sub_field('content'); ?>
                </div>
            </section>

        <?php endif;
    endwhile;
endif;
?>
```

## Converting HTML to WordPress Theme

When converting the HTML templates to WordPress:

1. Identify common elements for `header.php` and `footer.php`
2. Create page templates for different layouts
3. Replace static content with WordPress template tags
4. Add ACF fields for dynamic content areas
5. Update asset paths using `<?php echo get_template_directory_uri(); ?>/assets/...`

## Further Resources

- [WordPress Theme Developer Handbook](https://developer.wordpress.org/themes/)
- [Advanced Custom Fields Documentation](https://www.advancedcustomfields.com/resources/)
- [WordPress Template Hierarchy](https://wphierarchy.com/) 