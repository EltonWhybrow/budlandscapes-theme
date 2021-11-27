<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- <?php the_title(); ?> -->
<?php the_date('F j, Y'); ?><br />
<?php the_content(); ?>

<?php endwhile;
else : endif; ?>
