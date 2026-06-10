<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class("bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100"); ?>>
    <header>
        <div class="container px-8 py-5 lg:py-8 mx-auto xl:px-5 max-w-screen-lg">
            <nav class="flex flex-wrap justify-between md:gap-10 md:flex-nowrap">
                <div class="flex-col items-center justify-start order-1 hidden w-full md:flex md:flex-row md:justify-end md:w-auto md:order-none md:flex-1">
                    <?php
                    wp_nav_menu(array(
                        "theme_location" => "primary-left",
                        "container" => false,
                        "menu_class" => "flex space-x-5",
                        "fallback_cb" => false,
                        "items_wrap" => "%3\$s",
                    ));
                    ?>
                </div>
                <div class="flex items-center justify-between w-full md:w-auto">
                    <a class="w-28 text-2xl font-bold" href="<?php echo esc_url(home_url("/")); ?>">
                        STABLO
                    </a>
                </div>
                <div class="flex-col items-center justify-start order-2 hidden w-full md:flex md:flex-row md:w-auto md:flex-1 md:order-none">
                     <?php
                    wp_nav_menu(array(
                        "theme_location" => "primary-right",
                        "container" => false,
                        "menu_class" => "flex space-x-5",
                        "fallback_cb" => false,
                        "items_wrap" => "%3\$s",
                    ));
                    ?>
                </div>
            </nav>
        </div>
    </header>
