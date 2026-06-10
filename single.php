<?php get_header(); ?>
<main class="container px-8 py-5 lg:py-8 mx-auto xl:px-5 max-w-screen-lg">
    <?php while (have_posts()) : the_post(); ?>
        <div class="max-w-screen-md mx-auto text-center">
            <h1 class="mt-2 mb-3 text-3xl font-semibold tracking-tight lg:leading-snug text-brand-primary lg:text-4xl dark:text-white">
                <?php the_title(); ?>
            </h1>
            <div class="flex justify-center mt-3 space-x-3 text-gray-500">
                <p class="text-gray-800 dark:text-gray-400"><?php the_author(); ?></p>
                <time class="text-gray-500 dark:text-gray-400"><?php echo get_the_date(); ?></time>
            </div>
        </div>
        <div class="relative z-0 max-w-screen-lg mx-auto overflow-hidden lg:rounded-lg aspect-video mt-8">
            <?php if (has_post_thumbnail()) : the_post_thumbnail("full", array("class" => "w-full object-cover")); endif; ?>
        </div>
        <article class="max-w-screen-md mx-auto mt-8 prose prose-base dark:prose-invert">
            <?php the_content(); ?>
        </article>
    <?php endwhile; ?>
</main>
<?php get_footer(); ?>
