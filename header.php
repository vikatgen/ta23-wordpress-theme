
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.png"/>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class('antialiased bg-body text-body font-body'); ?>>
    <div>
      <div>
        <p class="mb-0 py-3 bg-lime-500 text-center">Want to learn how to build templates like this one? Visit <a href="https://www.pixelrocket.store">www.pixelrocket.store</a></p>
      </div>
      <div>
        <section class="relative bg-teal-900" x-data="{ mobileNavOpen: false }"><img class="absolute top-0 left-0 w-full h-full" src="<?php echo get_template_directory_uri(); ?>/assets/fauna-assets/headers/bg-waves.png" alt=""/>
          <nav class="py-6">
            <div class="container mx-auto px-4">
              <div class="relative flex items-center justify-between"><a class="inline-block" href="#"><img class="h-8" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.svg" alt=""/></a>
                <ul class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 hidden md:flex">
                  <li class="mr-8"><a class="inline-block text-white hover:text-lime-500 font-medium" href="about.html">About us</a></li>
                  <li class="mr-8"><a class="inline-block text-white hover:text-lime-500 font-medium" href="pricing.html">Pricing</a></li>
                  <li class="mr-8"><a class="inline-block text-white hover:text-lime-500 font-medium" href="contact.html">Contact us</a></li>
                  <li><a class="inline-block text-white hover:text-lime-500 font-medium" href="blog.html">Blog</a></li>
                </ul>
                <div class="flex items-center justify-end">
                  <div class="hidden md:block"><a class="inline-flex group py-2.5 px-4 items-center justify-center text-sm font-medium text-white hover:text-teal-900 border border-white hover:bg-white rounded-full transition duration-200" href="contact.html"><span class="mr-2">Get in touch</span>                      <span class="transform group-hover:translate-x-0.5 transition-transform duration-200">
                        <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M4.75 10H15.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path d="M10 4.75L15.25 10L10 15.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg></span></a></div>
                  <button class="md:hidden text-white hover:text-lime-500" x-on:click="mobileNavOpen = !mobileNavOpen">
                    <svg width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.19995 23.2H26.7999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M5.19995 16H26.7999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M5.19995 8.79999H26.7999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </nav>