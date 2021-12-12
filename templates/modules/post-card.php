<!-- This is an example component -->
<div class="my-2 shadow-lg rounded-lg bg-white dark:bg-gray-800 shadow-md border border-gray-200 rounded-lg  dark:border-gray-700">
    <a href="<?php echo esc_url(get_permalink()) ?>" title="<?php echo the_title() ?>">
        <figure class="relative w-full h-64 overflow-hidden bg-purple-600">
            <?php
            // Lazy-loading attributes should be skipped for thumbnails since they are immediately in the viewport.
            the_post_thumbnail('post-thumbnail',  array('loading' => false, 'class' => 'w-full h-full absolute object-cover'));
            ?>
            <?php if (wp_get_attachment_caption(get_post_thumbnail_id())) : ?>
                <figcaption class="rounded-t-lg w-full"><?php echo wp_kses_post(wp_get_attachment_caption(get_post_thumbnail_id())); ?></figcaption>
            <?php endif; ?>
        </figure><!-- .post-thumbnail -->
    </a>
    <div class="p-5">
        <?php get_template_part('templates/partials/categories'); ?>
        <?php the_title(sprintf('<h2 class="text-gray-900 dark:text-white font-bold text-2xl tracking-tight my-2"><a href="%s">', esc_url(get_permalink())), '</a></h2>'); ?>
        <div class="font-normal text-gray-700 dark:text-white mb-3"><?php the_excerpt() ?></div>
        <a href="<?php echo esc_url(get_permalink()) ?>" class="uppercase font-bold mt-2 w-full text-white bg-purple-600 hover:bg-purple-700 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 py-2 justify-center inline-flex items-center">
            Leer más
            <svg class="-mr-1 ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </a>
    </div>
</div>