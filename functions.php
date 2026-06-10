<?php
function stablo_wp_setup() {
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_theme_support("html5", array("search-form", "comment-form", "comment-list", "gallery", "caption"));
    register_nav_menus(array(
        "primary-left" => __("Primary Left Menu", "stablo-wp"),
        "primary-right" => __("Primary Right Menu", "stablo-wp"),
    ));
}
add_action("after_setup_theme", "stablo_wp_setup");

function stablo_wp_scripts() {
    wp_enqueue_style("stablo-wp-tailwind", "https://cdn.tailwindcss.com");
    wp_enqueue_style("stablo-wp-inter", "https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap");
    wp_enqueue_style("stablo-wp-style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "stablo_wp_scripts");

function stablo_wp_tailwind_config() {
    ?>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        gray: {
                            50: "#fafafa", 100: "#f5f5f5", 200: "#e5e5e5", 300: "#d4d4d4", 400: "#a3a3a3", 500: "#737373", 600: "#525252", 700: "#404040", 800: "#262626", 900: "#171717"
                        }
                    },
                    fontFamily: {
                        sans: ["Inter", "sans-serif"]
                    }
                }
            }
        }
    </script>
    <?php
}
add_action("wp_head", "stablo_wp_tailwind_config");
