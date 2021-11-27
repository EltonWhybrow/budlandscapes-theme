<?php
/*
 * Template Name: Case Studies Template
 * Template Post Type: post, page, press-release, people
 */

get_header(); ?>


<!-- Mobile Header -->
<div class="bg-igb-orange-500 sm:block md:hidden">
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

<div class="bg-igb-orange-500">

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


        <h2 class="heading-2 font-bold text-igb-orange-500 my-3 pl-0">Latest Studies</h2>

        <?php get_template_part('templates/partials/section', 'case-studies'); ?>

    </div>
</section>

<!-- <section class="bg-igb-li-grey-500 my-12">
    <div class="container text-sm mt-0 mb-4 p-2 mx-auto">
        <h3 class="heading-3 px-5">In the press</h3>

        <div class="px-5 my-4 flex flex-wrap justify-center mb-4 gap-10">
            <div class="flex-auto md:flex-1">
                <div class="text-center">
                    <img class="object-cover mx-auto" src="/resources/img/pages/press-centre/the-telegraph-logo.svg"
                        alt="the telegraph" title="the telegraph" width="275" height="auto">
                </div>
            </div>

            <div class="flex-auto md:flex-1">
                <div class="text-center">
                    <img class="object-cover mx-auto" src="/resources/img/pages/press-centre/the-sun-logo.svg"
                        alt="the sun" title="the sun" width="275" height="auto">
                </div>
            </div>

            <div class="flex-auto md:flex-1">
                <div class="text-center">
                    <img class="object-cover mx-auto" src="/resources/img/pages/press-centre/insurance-times-logo.svg"
                        alt="insurance times" title="insurance times" width="275" height="auto">
                </div>
            </div>

            <div class="flex-auto md:flex-1">
                <div class="text-center">
                    <img class="object-cover mx-auto" src="/resources/img/pages/press-centre/the-independent-logo.svg"
                        alt="the independent" title="the independent" width="275" height="auto">
                </div>
            </div>

            <div class="flex-auto md:flex-1">
                <div class="text-center">
                    <img class="object-cover mx-auto" src="/resources/img/pages/press-centre/daily-mirror-logo.svg"
                        alt="daily mirror" title="daily mirror" width="275" height="auto">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container text-sm mt-0 mb-4 p-2 mx-auto">

    <div class="px-5">
        <h3 class="heading-3">Assets</h3>
        <p class="py-1">You can download ingenie logos in EPS and PNG formats</p>
    </div>

    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:flex-1">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-contain mx-auto h-32"
                    src="/resources/img/pages/press-centre/assets/ingenie-logo-png.png" alt="ingenie logo" width="auto"
                    height="auto">
                <div class="font-semibold py-4">
                    <a href="/resources/img/pages/press-centre/assets/ingenie-logo-eps.eps" class="primary-link">EPS</a>
                    | <a href="/resources/img/pages/press-centre/assets/ingenie-logo-png.png" target="_blank"
                        rel="noopener noreferrer" class="primary-link">PNG</a>
                </div>
            </div>
        </div>

        <div class="flex-auto md:flex-1">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-contain mx-auto h-32"
                    src="/resources/img/pages/press-centre/assets/ingenie-icon-png.png" alt="ingenie icon" width="auto"
                    height="auto">
                <div class="font-semibold py-4">
                    <a href="/resources/img/pages/press-centre/assets/ingenie-icon-eps.eps" class="primary-link">EPS</a>
                    | <a href="/resources/img/pages/press-centre/assets/ingenie-icon-png.png" target="_blank"
                        rel="noopener noreferrer" class="primary-link">PNG</a>
                </div>
            </div>
        </div>

        <div class="flex-auto md:flex-1">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-contain mx-auto h-32"
                    src="/resources/img/pages/press-centre/assets/ingenie-business-png.png" alt="ingenie business"
                    width="auto" height="auto">
                <div class="font-semibold py-4">
                    <a href="/resources/img/pages/press-centre/assets/ingenie-business-eps.eps"
                        class="primary-link">EPS</a> | <a
                        href="/resources/img/pages/press-centre/assets/ingenie-business-png.png" target="_blank"
                        rel="noopener noreferrer" class="primary-link">PNG</a>
                </div>
            </div>
        </div>
    </div>
</section> -->

<?php get_footer(); ?>
