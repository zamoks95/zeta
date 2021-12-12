<!-- This is an example component -->
<div class="w-full lg:w-9/12 xl:w-10/12 lg:mr-1 bg-white dark:bg-transparent rounded-lg">
    <figure class="relative w-full h-96 overflow-hidden bg-purple-600">
        <?php the_post_thumbnail('post-thumbnail',  array('loading' => false, 'class' => 'w-full h-full absolute object-cover')); ?>
        <?php if (wp_get_attachment_caption(get_post_thumbnail_id())) : ?>
            <figcaption class="rounded-t-lg w-full"><?php echo wp_kses_post(wp_get_attachment_caption(get_post_thumbnail_id())); ?></figcaption>
        <?php endif; ?>
    </figure>
    <div class="py-5">
        <?php get_template_part('templates/partials/categories'); ?>
        <h2 class="text-gray-900 font-bold text-2xl tracking-tight my-2 dark:text-white"><?= the_title() ?></h2>
        <article class="font-normal text-gray-700 mb-3 dark:text-gray-400 article"><?php the_content() ?></article>
    </div>
</div>