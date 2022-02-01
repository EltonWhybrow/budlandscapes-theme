<?php get_header(); ?>

<!-- Mobile Header -->
<div class="bg-bl-orange-500 sm:block md:hidden">
    <div class="w-full p-3 ">
        <h2 class="heading-2 uppercase text-3xl font-bold text-white"><?php the_title(); ?></h2>
    </div>

    <?php if (get_field('page_mobile_image')) { ?>
        <div class="py-0">
            <img class="h-full w-full object-cover" src="<?php the_field('page_mobile_image'); ?>" alt="<?php the_title(); ?>">
        </div>
    <?php } ?>
</div>

<!-- Main Header -->
<?php if (has_post_thumbnail()) : ?>
    <div class="py-0 hidden md:block">
        <img class="h-full w-full object-cover" src="<?php the_post_thumbnail_url('page-hero-banner'); ?>" alt="<?php the_title(); ?>">
    </div>
<?php endif; ?>

<!-- wysiwyg main content -->
<section class="wysiwyg-content bg-bl-cadet-blue-500">
    <?php the_content(); ?>
</section>

<?php get_template_part('templates/partials/section', 'partners');  ?>

<?php get_footer(); ?>


<?php // if (is_page(array('contact-us'))) {
// get_footer('contact-us'); // either in about us, or contact, or management page is in view
//} else {
// get_footer();   // none of the page about us, contact or management is in view
//}
?>