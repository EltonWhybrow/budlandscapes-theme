<?php
/*
 * Template Name: Projects Template
 * Template Post Type: post, page, press-release, people
 */

get_header(); ?>

<!-- Mobile Header -->
<?php if (get_field('page_mobile_image')) { ?>
    <div class="sm:block md:hidden relative">
        <img class="h-full w-full object-cover" src="<?php the_field('page_mobile_image'); ?>" alt="<?php the_title(); ?>">
        <h2 class="text-xl bg-teal-500 py-1 text-white px-5"><?php the_title(); ?></h2>
    </div>
<?php } ?>

<!-- Main Header -->
<?php if (has_post_thumbnail()) : ?>
    <div class="py-0 hidden md:block">
        <img class="h-full w-full object-cover" src="<?php the_post_thumbnail_url('page-hero-banner'); ?>" alt="<?php the_title(); ?>">
    </div>
<?php endif; ?>

<!-- wysiwyg main content -->
<div class="wysiwyg-content bg-white">

    <section class="w-full bg-gray-700">
        <div class="max-w-5xl mx-auto pt-5 md:pt-10 pb-12 space-x-5">

            <div class="px-5 text-base">
                <h4 class="pt-6 font-semibold">Past projects</h4>
                <h2 class="text-2xl uppercase">A selection of previous <span class="bg-orange-500 px-1 text-white transform inline-block -skew-y-2">garden spaces</span> developed for clients</h2>
                <p class="py-2">Get in touch if you want to discuss anything around a planned project you have in mind.</p>

            </div>

            <p class="inline-flex space-x-2 pb-4">
                <a class="relative inline-flex primary-btn pr-6" href="/contact">
                    Get in touch
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-3 right-1 inline-block w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <a class="relative primary-link p-2 text-sm hover:text-teal-700 hover:underline" href="#quick-quote">
                    Call back?
                </a>
            </p>
        </div>
    </section>
</div>


<section class="w-full bg-gray-200">
    <div class="flex max-w-5xl mx-auto pb-12 px-5">

        <?php get_template_part('templates/partials/section', 'projects-list'); ?>

    </div>
</section>

<!-- THE FORM -->
<section id="quick-quote" class="w-full bg-gray-700">
    <div class="flex max-w-5xl mx-auto py-20 space-x-5 ">

        <div class="px-5 text-base">
            <h4 class="pt-6 font-semibold">Eager to get started?</h4>
            <h2 class="text-2xl uppercase">Looking for a <span class="bg-orange-500 px-1 text-white transform inline-block -skew-y-2">hassel-free</span> quote</h2>
            <p class="py-2">The first step is a initial consultation to discuss your garden design project and what you are looking to achieve. Get in touch on our contact page if you want a <a class="relative text-base text-white hover:underline" href="/contact">more detailed quote</a>. Alternatively, fill out this quick quote form and a member of the team with call you back.</p>

            <?php echo do_shortcode('[wpforms id="153" title="false"]'); ?>

        </div>
    </div>
</section>

<?php get_template_part('templates/partials/section', 'partners');  ?>

<?php get_footer(); ?>