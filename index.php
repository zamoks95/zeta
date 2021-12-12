<?php get_header(); ?>

<?php if (is_home() && !is_front_page() && !empty(single_post_title('', false))) : ?>
    <header class="page-header alignwide">
        <h1 class="page-title"><?php single_post_title(); ?></h1>
    </header><!-- .page-header -->
<?php endif; ?>

<?php $gridLayout = is_single() ? 'flex flex-col lg:flex-row' : 'grid gap-2 md:grid-cols-2 xl:grid-cols-3'; ?>

<?php get_template_part('templates/modules/header'); ?>

<main class="<?php echo $gridLayout ?> max-w-7xl mx-auto px-2 mt-6">
    <?php
    if (have_posts()) {
        if (is_single()) {
            the_post();
            get_template_part('templates/modules/post');
            echo '<div class="bg-purple-600 w-full lg:w-3/12 xl:w-2/12 lg:ml-1"></div>';
        } else {
            while (have_posts()) {
                the_post();
                get_template_part('templates/modules/post-card');
            }
        }
    }
    ?>
</main>

<?php get_footer(); ?>