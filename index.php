<?php get_header(); ?>
<main class="container px-8 py-5 lg:py-8 mx-auto xl:px-5 max-w-screen-lg">
    <div class="grid gap-10 lg:gap-10 md:grid-cols-2">
        <?php if (have_posts()) : $count = 0; while (have_posts()) : the_post(); $count++; ?>
            <?php if ($count <= 2) : ?>
                <article class="cursor-pointer group">
                    <div class="relative overflow-hidden transition-all bg-gray-100 rounded-md dark:bg-gray-800 hover:scale-105 aspect-video">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : the_post_thumbnail("large", array("class" => "w-full h-full object-cover rounded-md")); endif; ?>
                        </a>
                    </div>
                    <h2 class="mt-2 text-lg font-semibold tracking-normal text-brand-primary dark:text-white">
                        <a href="<?php the_permalink(); ?>">
                            <span class="bg-gradient-to-r from-green-200 to-green-100 dark:from-purple-800 dark:to-purple-900 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]">
                                <?php the_title(); ?>
                            </span>
                        </a>
                    </h2>
                    <div class="flex items-center mt-3 space-x-3 text-gray-500 dark:text-gray-400">
                        <span class="text-sm"><?php the_author(); ?></span>
                        <span class="text-xs text-gray-300 dark:text-gray-600">&bull;</span>
                        <time class="text-sm" datetime="<?php echo get_the_date("c"); ?>"><?php echo get_the_date(); ?></time>
                    </div>
                </article>
            <?php endif; ?>
        <?php endwhile; endif; ?>
    </div>
    <div class="grid gap-10 mt-10 lg:gap-10 md:grid-cols-2 xl:grid-cols-3">
        <?php if (have_posts()) : rewind_posts(); $count = 0; while (have_posts()) : the_post(); $count++; ?>
            <?php if ($count > 2) : ?>
                 <article class="cursor-pointer group">
                    <div class="relative overflow-hidden transition-all bg-gray-100 rounded-md dark:bg-gray-800 hover:scale-105 aspect-square">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : the_post_thumbnail("medium_large", array("class" => "w-full h-full object-cover rounded-md")); endif; ?>
                        </a>
                    </div>
                    <h2 class="mt-2 text-lg font-semibold tracking-normal text-brand-primary dark:text-white">
                        <a href="<?php the_permalink(); ?>">
                            <span class="bg-gradient-to-r from-green-200 to-green-100 dark:from-purple-800 dark:to-purple-900 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]">
                                <?php the_title(); ?>
                            </span>
                        </a>
                    </h2>
                    <div class="flex items-center mt-3 space-x-3 text-gray-500 dark:text-gray-400">
                        <span class="text-sm"><?php the_author(); ?></span>
                        <span class="text-xs text-gray-300 dark:text-gray-600">&bull;</span>
                        <time class="text-sm" datetime="<?php echo get_the_date("c"); ?>"><?php echo get_the_date(); ?></time>
                    </div>
                </article>
            <?php endif; ?>
        <?php endwhile; endif; ?>
    </div>
</main>
<?php get_footer(); ?>
