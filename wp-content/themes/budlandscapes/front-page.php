<?php get_header('frontpage'); ?>

<section class="wysiwyg-content">
    <?php the_content(); ?>
</section>

<?php get_template_part('templates/partials/section', 'partners');  ?>

<?php get_footer(); ?>