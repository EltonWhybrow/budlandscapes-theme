<?php

/*
 * Template Name: About Template
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
                <h4 class="pt-6 font-semibold">Who we are?</h4>
                <h2 class="text-2xl uppercase">Dedicated dudes <span class="bg-orange-500 px-1 text-white transform inline-block -skew-y-2">not afraid</span> to get our hands dirty</h2>
                <p class="py-2">Bud Design and Landscaping Limited has grown into one of the leading Landscape Contractors in the area.
                </p>
                <!-- <a class="relative text-base text-white hover:underline" href="/contact">arrange a visit</a> today. -->
            </div>
        </div>
    </section>


    <section class="w-full bg-gray-300">
        <div class="max-w-5xl mx-auto py-10 md:py-20">

            <div class="flex flex-wrap md:flex-nowrap mb-5">
                <div class="w-full md:w-3/5 px-5">
                    <!-- // humble beginnings -->

                    <h3 class="text-gray-600 text-2xl uppercase tracking-wide">Our history<h3>
                            <p>Established in Maidenhead over 2 decades ago, we now provide our professional services as landscape contractors/designers all over the UK. Through hard work, honesty, teamwork, innovation and a focus on quality, we have steadily grown into a robust team of landscape gardeners, designers and maintenance teams, specialising in delivering the highest level of service.
                            </p>

                </div>

                <div class="w-full pt-3 px-5 md:w-2/5">

                    <picture>
                        <source srcset="/resources/img/pages/about/about-1.webp" type="image/webp">
                        <source srcset="/resources/img/pages/about/about-1.jpg" type="image/jpeg">
                        <img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/about/about-1.jpg" alt="garden cabins and offices">
                    </picture>
                </div>

            </div>

            <!-- // over time -->
            <div class="pb-10 px-5">
                <h3 class="text-gray-600 text-2xl uppercase tracking-wide">Over time<h3>
                        <p>In addition to lawn care, grass cutting, pruning & general garden maintenance work, our dedicated Maidenhead landscaping team are now able to provide virtually any form of hard or soft landscaping service you may require. Fencing, decking, hedge shaping, water features, brick laying, ponds, patios, garden clearance, tree work and much more.
                        </p>
            </div>

            <!-- // contractors time -->
            <div class="pb-10 px-5">
                <h3 class="text-gray-600 text-2xl uppercase tracking-wide">Approved Contractors<h3>
                        <p>We work alongside some fantastic firms with distinguished reputations. We are approved contractors for the likes of
                            <a href="https://lancerscott.co.uk/" class="primary-link" target="_blank">
                                Lancer Scott
                            </a>,
                            <a href="https://adamson.co.uk/" class="primary-link" target="_blank">
                                Adamson Construction
                            </a>,
                            <a href="https://www.hc-one.co.uk/" class="primary-link" target="_blank">
                                HC ONE - The Kind Care Company
                            </a>,
                            <a href="http://www.wcr-construction.co.uk/" class="primary-link" target="_blank">
                                wrc.org
                            </a> and
                            <a href="https://www.rugglesandjeffery.co.uk/" class="primary-link" target="_blank">
                                Ruggle &amp; Jeffery
                            </a>.
                            <a href="https://www.rugglesandjeffery.co.uk/" class="primary-link" target="_blank">
                                Ruggle &amp; Jeffery
                            </a>.
                        <p>We are also approved installers for <a href="https://millboard.co.uk/" class="primary-link" target="_blank">
                                Millboard
                            </a> luxury decking and cladding.</p>

                        </p>
                        <p>Bud Design & Landscaping Limited has designed and built the grounds and gardens of numerous retirement developments throughout the UK. Instructed by both private and commercial clients, our work has been recognised by those that are recently retired, elderly and those with special needs.</p>
            </div>

            <div class="flex flex-wrap md:flex-nowrap pb-5">
                <div class="hidden md:block px-5 w-full md:w-2/5">

                    <picture>
                        <source srcset="/resources/img/pages/about/about-2.webp" type="image/webp">
                        <source srcset="/resources/img/pages/about/about-2.jpg" type="image/jpeg">
                        <img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/about/about-2.jpg" alt="garden cabins and offices">
                    </picture>
                </div>
                <div class="w-full md:w-3/5 px-5">
                    <!-- // our staff -->

                    <h3 class="text-gray-600 text-2xl uppercase tracking-wide">Our staff<h3>
                            <p>
                                Our work is carried out only to the highest of standards and gardens are landscaped to perfection and maintained in pristine condition. We believe that quality is what sets us apart, from others in this field.
                            </p>
                            <p>
                                We pride ourselves in supporting our personnel by providing the very best training and the highest quality tools.
                                All staff are DBS checked, have attended health and safety awareness courses and have their CSCS cards. We supply risk assessments and method statements on work where needed.
                            </p>

                </div>

                <div class="md:hidden px-3 pt-4 w-full md:w-2/5">
                    <picture>
                        <source srcset="/resources/img/pages/about/about-2.webp" type="image/webp">
                        <source srcset="/resources/img/pages/about/about-2.jpg" type="image/jpeg">
                        <img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/about/about-2.jpg" alt="garden cabins and offices">
                    </picture>
                </div>
            </div>

            <!-- // work -->
            <div class="pb-5 px-5">
                <h3 class="text-gray-600 text-2xl uppercase tracking-wide">Work Ethics<h3>
                        <p>Our gardeners always take great pride in their work, whether fencing, laying drives & patios, or simply providing regular gardening duties such as grass cutting & general garden maintenance. We are all passionate about gardening; no job is too big or small, and all get the same high attention to detail. As we all know, it's important to be as eco-friendly as possible, so to do our bit for the environment we always use sustainable soil, bark mulch & recycled compost, and have a strict policy of recycling as much waste as we can.
                        </p>
                        <!-- // Values -->
                        <div class="pb-10 px-5 text-center py-8">
                            <p class="text-teal-500 text-lg capitalize">
                                <span class="bg-teal-600 px-3 py-1 my-1 text-white inline-block rounded-md">hard work</span>
                                <span class="bg-teal-600 px-3 py-1 my-1 text-white inline-block rounded-md">honesty</span>
                                <span class="bg-teal-600 px-3 py-1 my-1 text-white inline-block rounded-md">teamwork</span>
                                <span class="bg-teal-600 px-3 py-1 my-1 text-white inline-block rounded-md">innovation</span>
                                <span class="bg-teal-600 px-3 py-1 my-1 text-white inline-block rounded-md">quality</span>
                            </p>
                        </div>
                        <p>
                            Our skilled gardeners have been providing high quality landscaping services to domestic customers throughout Maidenhead and surrounding areas for many years. Due to on-going success and expansion, we can also undertake larger commercial garden maintenance contracts for businesses and corporate companies across the country.
                        </p>
            </div>

            <div class="flex flex-wrap md:flex-nowrap pb-5">

                <div class="w-full md:w-3/5 px-5 text-gray-600">
                    <p>
                        Each job is personally overseen by company director and owner Steve Corio, who is an expert in his field and has a background in Engineering. He started Bud Design & Landscaping Ltd after a chosen career change over 20 years ago. Building an impressive portfolio of work from residential and commercial sectors, he has developed the company into a countrywide landscaping business, enabling him and his team to create dream gardens for everyone. He believes if you entrust Budlandscapes with your beloved garden, then you have complete open communication with us and can contact the office or Steve Corio directly via email or telephone with any queries you may have at anytime. Bud Design & Landscaping pride themselves on punctuality; there is nothing worse than waiting in for a tradesman who doesn't turn up on time. When we say 8am, we mean 8am.
                    </p>
                    <h4 class="mt-2">All the best</h4>
                    <p class="text-sm font-semibold">Steve Corio - Company Director</p>

                </div>
                <div class="px-5 w-full md:w-2/5">
                    <picture>
                        <source srcset="/resources/img/pages/about/steve-corio.webp" type="image/webp">
                        <source srcset="/resources/img/pages/about/steve-corio.jpg" type="image/jpeg">
                        <img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/about/steve-corio.jpg" alt="steve cabins and offices">
                    </picture>
                </div>
            </div>

        </div>
    </section>

    <!-- THE FORM -->
    <section id="request-callback" class="w-full bg-gray-700">
        <div class="flex max-w-5xl mx-auto py-10 sm:py-20 space-x-5 ">

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