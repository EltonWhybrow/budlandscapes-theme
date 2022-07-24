<?php

/*
 * Template Name: Services Template
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
        <!-- <h2 class="text-sm text-center bg-teal-500 p-2 text-white"><?php the_title(); ?></h2> -->
    </div>
<?php endif; ?>

<!-- wysiwyg main content -->
<div class="wysiwyg-content bg-white">

    <section class="w-full bg-gray-700">
        <div class="flex max-w-5xl mx-auto pt-5 md:pt-10 pb-12 space-x-5">

            <div class="px-5 text-base">
                <h4 class="pt-6 font-semibold">What we do</h4>
                <h2 class="text-2xl uppercase">Make amazing <span class="bg-orange-500 px-1 text-white transform inline-block -skew-y-2">outdoor spaces</span> and put smiles on faces</h2>
                <p class="py-2">Here at Bud Design &amp; Landscaping we pride ourselves on pushing the boundaries with what is possible when it comes to outdoor spaces. We cover all aspects of garden creation from custom made offices &amp; cabins to the beautiful planting and landscaped retreats. Learn more about what we offer below or contact us to <a class="relative text-base text-white hover:underline" href="/contact#contact-form">arrange a visit</a> today.</p>
            </div>
        </div>
    </section>


    <section class="w-full bg-gray-300">
        <div class="md:max-w-3xl mx-auto py-10 px-5">

            <div class="text-center">
                <h3 class="text-gray-600 text-2xl uppercase tracking-wide">Services &amp; Skills we offer</h3>
                <h4 class="pt-2 font-semibold">Over 2 decades of experience!</h4>
            </div>

            <div class="flex flex-wrap md:flex-nowrap md:space-x-4 py-10">

                <ul class="w-full md:w-1/2 px-0 md:px-10 text-gray-700">
                    <li class="relative py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:absolute md:-left-10 md:top-2 relative -top-1 text-teal-500 inline-block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        Full detailed design
                    </li>
                    <li class="relative py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:absolute md:-left-10 md:top-2 relative -top-1 text-teal-500 inline-block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        Pruning &amp; Planting
                    </li>
                    <li class="relative py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:absolute md:-left-10 md:top-2 relative -top-1 text-teal-500 inline-block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        Garden &amp; Ground Maintenance
                    </li>
                    <li class="relative py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:absolute md:-left-10 md:top-2 relative -top-1 text-teal-500 inline-block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        Patios
                    </li>
                    <li class="relative py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:absolute md:-left-10 md:top-2 relative -top-1 text-teal-500 inline-block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        Fencing
                    </li>
                    <li class="relative py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:absolute md:-left-10 md:top-2 relative -top-1 text-teal-500 inline-block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        Driveways
                    </li>
                </ul>


                <ul class="w-full md:w-1/2 px-0 md:px-10 text-gray-700">
                    <li class="relative py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:absolute md:-left-10 md:top-2 relative -top-1 text-teal-500 inline-block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        Water features
                    </li>
                    <li class="relative py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:absolute md:-left-10 md:top-2 relative -top-1 text-teal-500 inline-block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        Walls &amp; Ornamental gardens
                    </li>
                    <li class="relative py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:absolute md:-left-10 md:top-2 relative -top-1 text-teal-500 inline-block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        Paving &amp; Steps
                    </li>
                    <li class="relative py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:absolute md:-left-10 md:top-2 relative -top-1 text-teal-500 inline-block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        Play Frames &amp; Pergolas
                    </li>
                    <li class="relative py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:absolute md:-left-10 md:top-2 relative -top-1 text-teal-500 inline-block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        Roof Terraces
                    </li>
                    <li class="relative py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:absolute md:-left-10 md:top-2 relative -top-1 text-teal-500 inline-block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        Decking
                    </li>
                </ul>


            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="max-w-5xl mx-auto py-10 md:py-24">

        <div class="mx-2 flex flex-wrap md:flex-nowrap mb-20">
            <div class="w-full md:w-3/5 px-5">
                <div>
                    <span class="text-gray-600 text-2xl pr-2 uppercase tracking-wide">
                        Cabins
                    </span>
                    <span class="bg-teal-200 text-teal-800 text-2xl px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
                        &amp;
                    </span>
                    <span class="text-gray-600 text-2xl px-2 uppercase tracking-wide">
                        Offices
                    </span>
                </div>

                <h4 class="pt-2 font-semibold">Experts in garden installations and buildings</h4>
                <p class="text-base text-gray-700">Our aim is to help you transform your outdoor space with a high-quality garden building of your choosing. Whether you are looking for a summer house for the children, a log cabin to turn into a home office, or a shed to store your garden tools, we can create custom spaces to anyone's specification. Our extensive experience working with wood and stone materials means we can also create that stunning surrounding area for your structures.</p>
                <div class="py-2">
                    <a class="relative inline-flex primary-btn pr-6" href="/contact#contact-form">
                        Enquire
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-3 right-1 inline-block w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <a class="relative primary-link p-2 text-sm hover:text-teal-700 hover:underline" href="/projects">
                        view past projects
                    </a>
                </div>

            </div>

            <div class="w-full md:w-2/5 px-5">

                <picture>
                    <source srcset="/resources/img/pages/services/cabin-offices.webp" type="image/webp">
                    <source srcset="/resources/img/pages/services/cabin-offices.jpg" type="image/jpeg">
                    <img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/services/cabin-offices.jpg" alt="garden cabins and offices">
                </picture>
            </div>

        </div>

        <div class="mx-2 flex flex-wrap md:flex-nowrap mb-20">

            <div class="hidden md:block w-full md:w-2/5 px-5">
                <picture>
                    <source srcset="/resources/img/pages/services/domestic-general.webp" type="image/webp">
                    <source srcset="/resources/img/pages/services/domestic-general.jpg" type="image/jpeg">
                    <img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/services/domestic-general.jpg" alt="domestic garden landscaping">
                </picture>
            </div>
            <div class="w-full md:w-3/5 px-5">
                <div>
                    <span class="text-gray-600 text-2xl pr-2 uppercase tracking-wide">
                        Domestic
                    </span>
                    <span class="bg-teal-200 text-teal-800 text-2xl px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
                        &amp;
                    </span>
                    <span class="text-gray-600 text-2xl px-2 uppercase tracking-wide">
                        General
                    </span>
                </div>

                <h4 class="pt-2 font-semibold">Making the most of your outside space</h4>
                <p class="text-base text-gray-700">Whatever the size of your garden, we can help you to create that relaxed hideaway for those summer evenings or totally transform it to that country style garden you have always wished for. We have the skills to help you with whatever your heart desires. Whether its decking, fencing, general maintenance or planting, we've got you covered. Garden features are also a speciality of ours. We can creatively install water features, pergolas, full working outside kitchen/BBQ areas and more. </p>
                <div class="py-2">
                    <a class="relative inline-flex primary-btn pr-6" href="/contact#contact-form">
                        Enquire
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-3 right-1 inline-block w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <a class="relative primary-link p-2 text-sm hover:text-teal-700 hover:underline" href="/projects">
                        view past projects
                    </a>
                </div>

            </div>

            <div class="md:hidden w-full md:w-2/5 px-5">
                <picture>
                    <source srcset="/resources/img/pages/services/domestic-general.webp" type="image/webp">
                    <source srcset="/resources/img/pages/services/domestic-general.jpg" type="image/jpeg">
                    <img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/services/domestic-general.jpg" alt="domestic garden landscaping">
                </picture>
            </div>

        </div>

        <div class="mx-2 flex flex-wrap md:flex-nowrap mb-20">


            <div class="w-full md:w-3/5 px-5">
                <div>
                    <span class="text-gray-600 text-2xl pr-2 uppercase tracking-wide">
                        Paving
                    </span>
                    <span class="bg-teal-200 text-teal-800 text-2xl px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
                        &amp;
                    </span>
                    <span class="text-gray-600 text-2xl px-2 uppercase tracking-wide">
                        Decking
                    </span>
                </div>

                <h4 class="pt-2 font-semibold">Only the highest quality materials are used by us</h4>
                <p class="text-base text-gray-700">Highly experienced in laying patios and paving, whether it's a path, driveway or a patio - we work with a variety of materials including block paving, concrete/reconstituted stone paving slabs, or natural stone products. We can advise you of the best products to use in your garden depending on the site conditions and the use required. Building decks for a range of situations, from simple ground level decks to multi-level decks, is our forte. We also work with stainless steel wires and glass panels to create modern balustrades</p>
                <div class="py-2">
                    <a class="relative inline-flex primary-btn pr-6" href="/contact#contact-form">
                        Enquire
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-3 right-1 inline-block w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <a class="relative primary-link p-2 text-sm hover:text-teal-700 hover:underline" href="/projects">
                        view past projects
                    </a>
                </div>

            </div>

            <div class="w-full md:w-2/5 px-5">

                <picture>
                    <source srcset="/resources/img/pages/services/paving-decking.webp" type="image/webp">
                    <source srcset="/resources/img/pages/services/paving-decking.jpg" type="image/jpeg">
                    <img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/services/paving-decking.jpg" alt="domestic garden landscaping">
                </picture>
            </div>

        </div>

        <div class="mx-2 flex flex-wrap md:flex-nowrap">
            <div class="hidden md:block w-full md:w-2/5 px-5">

                <picture>
                    <source srcset="/resources/img/pages/services/maintenance-more.webp" type="image/webp">
                    <source srcset="/resources/img/pages/services/maintenance-more.jpg" type="image/jpeg">
                    <img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/services/maintenance-more.jpg" alt="garden cabins and offices">
                </picture>
            </div>
            <div class="w-full md:w-3/5 px-5">
                <div>
                    <span class="text-gray-600 text-2xl pr-2 uppercase tracking-wide">
                        Maintenance
                    </span>
                    <span class="bg-teal-200 text-teal-800 text-2xl px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
                        &amp;
                    </span>
                    <span class="text-gray-600 text-2xl px-2 uppercase tracking-wide">
                        more
                    </span>
                </div>

                <h4 class="pt-2 font-semibold">Let us keep your garden in tip-top shape</h4>
                <p class="text-base text-gray-700">Our team are highly experienced in looking after large and small garden areas. Maintaining your garden space can be time consuming and challenging. We can provide one off, occasional or regular visits and can set up a contract if you wish. Both domestic and commercial customers can benefit from our expert gardening knowledge and experience. We also develop low maintenance gardens for those with busy lifestyles or those that lack the mobility needed, to tackle the job themselves.</p>
                <div class="py-2">
                    <a class="relative inline-flex primary-btn pr-6" href="/contact#contact-form">
                        Enquire
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-3 right-1 inline-block w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <a class="relative primary-link p-2 text-sm hover:text-teal-700 hover:underline" href="#maintenance-offers">
                        maintenance range
                    </a>

                </div>
            </div>

            <div class="md:hidden w-full md:w-2/5 px-5">

                <picture>
                    <source srcset="/resources/img/pages/services/maintenance-more.webp" type="image/webp">
                    <source srcset="/resources/img/pages/services/maintenance-more.jpg" type="image/jpeg">
                    <img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/services/maintenance-more.jpg" alt="garden cabins and offices">
                </picture>
            </div>
        </div>

    </section>

    <section id="maintenance-offers" class="w-full bg-gray-200">
        <div class="md:max-w-3xl mx-auto py-10 px-5">

            <div class="text-center">
                <h1 class="hidden">Maintenance range we provide</h1>
                <h3 class="text-gray-600 text-2xl uppercase tracking-wide">Maintenance range we provide</h3>
                <h4 class="pt-2 font-semibold">No job too big or too small</h4>
            </div>

            <div class="flex flex-wrap md:flex-nowrap md:space-x-4 py-10">

                <ul class="w-full md:w-1/2 px-0 md:px-5 text-gray-700">
                    <li class="relative py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:absolute md:-left-10 md:top-2 relative -top-1 text-teal-500 inline-block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        Maintenance contracts available
                    </li>
                    <li class="relative py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:absolute md:-left-10 md:top-2 relative -top-1 text-teal-500 inline-block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        One off and regular maintenance visits
                    </li>
                    <li class="relative py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:absolute md:-left-10 md:top-2 relative -top-1 text-teal-500 inline-block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        Garden tidying and clearance
                    </li>
                    <!-- <li class="relative py-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:absolute md:-left-10 md:top-2 relative -top-1 text-teal-500 inline-block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        One off maintenance visits
                    </li> -->
                    <li class="relative py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:absolute md:-left-10 md:top-2 relative -top-1 text-teal-500 inline-block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        Aftercare of borders
                    </li>
                    <li class="relative py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:absolute md:-left-10 md:top-2 relative -top-1 text-teal-500 inline-block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        Mulching, hand weeding
                    </li>

                </ul>

                <ul class="w-full md:w-1/2 px-0 md:px-5 text-gray-700">
                    <li class="relative py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:absolute md:-left-10 md:top-2 relative -top-1 text-teal-500 inline-block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        Plant care, pruning trees, roses, shrubs
                    </li>
                    <li class="relative py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:absolute md:-left-10 md:top-2 relative -top-1 text-teal-500 inline-block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        Pest and disease control
                    </li>

                    <li class="relative py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:absolute md:-left-10 md:top-2 relative -top-1 text-teal-500 inline-block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        Lawn care, top dressing, renovating existing lawns
                    </li>
                    <li class="relative py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:absolute md:-left-10 md:top-2 relative -top-1 text-teal-500 inline-block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        Weed control, using chemical and non-chemical herbicides
                    </li>

                </ul>


            </div>
        </div>
    </section>

    <!-- THE FORM -->
    <section id="request-callback" class="w-full bg-gray-700">
        <div class="flex max-w-5xl mx-auto py-20 space-x-5 ">

            <div class="px-5 text-base">
                <h4 class="pt-6 font-semibold">Eager to get started?</h4>
                <h2 class="text-2xl uppercase">Looking for a <span class="bg-orange-500 px-1 text-white transform inline-block -skew-y-2">hassel-free</span> quote?</h2>
                <p class="py-2">The first step is an initial consultation to discuss your garden design project and what you are looking to achieve. Get in touch on our contact page if you would like to arrrange consultation with a member of our team<a class="relative text-base text-white hover:underline" href="/contact#contact-form"></a>. Alternatively, fill out this quick quote form and a member of the team with call you back.</p>
                <p>
                    <!-- <a class="relative inline-flex tertiary-btn pr-6 space-x-2" href="/contact#contact-form">
Contact us
<svg xmlns="http://www.w3.org/2000/svg" class="absolute top-3 right-1 inline-block w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
</svg>
</a> -->
                    <!-- <a class="relative primary-link p-2 text-sm hover:underline" href="/about">
Testimonials
</a> -->
                </p>

                <?php the_content(); ?>

            </div>
        </div>
    </section>





</div>

<?php get_template_part('templates/partials/section', 'partners');  ?>

<?php get_footer(); ?>