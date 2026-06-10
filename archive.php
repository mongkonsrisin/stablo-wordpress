<?php get_header(); ?>
<main class="container px-8 py-5 lg:py-8 mx-auto xl:px-5 max-w-screen-lg">
    <header class="mb-10 text-center">
        <h1 class="text-3xl font-semibold tracking-tight lg:text-4xl dark:text-white">
            <?php the_archive_title(); ?>
        </h1>
    </header>
    <div class="grid gap-10 md:grid-cols-2 xl:grid-cols-3">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
             <article class="cursor-pointer group">
                <div class="relative overflow-hidden transition-all bg-gray-100 rounded-md dark:bg-gray-800 hover:scale-105 aspect-square">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : the_post_thumbnail("medium_large", array("class" => "w-full h-full object-cover rounded-md")); endif; ?>
                    </a>
                </div>
                <h2 class="mt-2 text-lg font-semibold tracking-normal text-brand-primary dark:text-white">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>
<?php get_footer(); ?>
