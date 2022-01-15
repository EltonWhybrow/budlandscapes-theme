<?php
/*
 * Template Name: Case Studies Template
 * Template Post Type: post, page, press-release, people
 */

get_header(); ?>


<!-- Mobile Header -->
<div class="bg-bl-orange-500 sm:block md:hidden">
    <div class="w-full p-3 ">
        <h2 class="heading-2 text-3xl font-bold text-white"><?php the_title(); ?></h2>
    </div>

    <?php if (get_field('page_mobile_image')) { ?>
    <div class="py-0">
        <img class="h-full w-full object-cover" src="<?php the_field('page_mobile_image'); ?>"
            alt="<?php the_title(); ?>">
    </div>
    <?php } ?>
</div>

<!-- Main Header -->
<?php if (has_post_thumbnail()) : ?>
<div class="py-0 hidden md:block">
    <img class="h-full w-full object-cover" src="<?php the_post_thumbnail_url('page-hero-banner'); ?>"
        alt="<?php the_title(); ?>">
</div>
<?php endif; ?>

<div class="bg-bl-orange-500">

    <div class="lg:container lg:mx-auto py-2">

        <div class="flex md:pb-3 pt-2 text-white">

            <div class="sm:w-2/5 text-sm px-5 hidden md:block">
                <h2 class="heading-2 font-bold text-white mb-3 pl-0 text-right">CASE STUDIES</h2>
            </div>

            <div class="sm:w-3/5 px-5 text-sm">
                <!-- <p class="py-2">
                    Nullam eget metus nibh. Suspendisse tincidunt purus auctor, ullamcorper libero id, mollis tortor.
                    Nullam massa lacus, dapibus et arcu et, placerat porttitor tellus. Duis libero justo, lobortis
                    accumsan malesuada ac, congue pulvinar est. </p> -->

                <p class="py-4">
                    <a href="/blog" class="inline-flex primary-btn border-white">
                        <span>NEXT: Blog</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 button-icon-right" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>


<section class="container mx-auto md:py-10 pb-3 max-w-4xl">

    <div class="md:pb-12 pt-4 text-sm px-5">


        <h2 class="heading-2 font-bold text-bl-orange-500 my-3 pl-0">Latest Studies</h2>

        <?php get_template_part('templates/partials/section', 'case-studies'); ?>

    </div>
</section>

<?php get_footer(); ?>
