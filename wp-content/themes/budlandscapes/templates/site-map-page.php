<?php
/*
 * Template Name: Site Map Template
 * Template Post Type: post, page, whatever
 */

get_header(); ?>

<div class="sitemap">
    <section class="w-full bg-gray-700">
        <div class="flex max-w-5xl mx-auto pt-5 md:pt-10 pb-12 space-x-5">

            <div class="px-5 text-base">
                <h4 class="pt-6 font-semibold">Who we are?</h4>
                <h2 class="text-2xl uppercase">Site <span class="bg-orange-500 px-1 text-white transform inline-block -skew-y-2">Map</span></h2>
                <p class="py-2">Quick reference to all pages contained within our site.
                </p>
                <!-- <a class="relative inline-flex tertiary-btn pr-6 space-x-2" href="/contact">
                    Homepage
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-3 right-1 inline-block w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <a class="relative primary-link p-2 text-sm hover:underline" href="/about">
                    Leave us feedback
                </a> -->
            </div>
        </div>
    </section>

    <div class="container max-w-4xl py-14 text-xl mx-auto">

        <div class="flex flex-wrap">


            <div class="sitemp-pages w-1/2 px-2">

                <h3 class="">Pages</h3>

                <ul class="standard-list">

                    <?php
                    $wpcpt = new WP_Query(
                        array(
                            'post_type' => 'page', // Change this to the slug of your Custom Post Type (cpt)
                            'posts_per_page' => -1, // -1 shows all cpt posts
                            'post_status' => 'publish', // only shows published cpt pages
                            'orderby' => 'title', // orders by cpt post title
                            'order' => 'ASC', // orders cpt posts title alphabetically
                            // 'tax_query' => array(
                            //     array(
                            //         'taxonomy' => 'category',
                            //         'field' => 'slug',
                            //         'terms' => 'about-us',
                            //     )
                            // ),
                        )
                    );
                    ?>

                    <?php while ($wpcpt->have_posts()) : $wpcpt->the_post(); ?>


                        <li>
                            <a href="<?php echo get_permalink($post->ID); ?>" rel="dofollow" title="<?php the_title(); ?>" class="primary-link text-base">
                                <?php the_title(); ?>
                            </a>
                        </li>

                    <?php endwhile;
                    wp_reset_query(); ?>

                </ul>

            </div>
            <div class="sitemap-projects w-1/2 px-2">

                <h3 class="">Case Studies</h3>

                <ul class="standard-list">

                    <?php
                    $wpcpt = new WP_Query(
                        array(
                            'post_type' => 'projects', // Change this to the slug of your Custom Post Type (cpt)
                            'posts_per_page' => -1, // -1 shows all cpt posts
                            'post_status' => 'publish', // only shows published cpt pages
                            'orderby' => 'title', // orders by cpt post title
                            'order' => 'ASC', // orders cpt posts title alphabetically
                            // 'tax_query' => array(
                            //     array(
                            //         'taxonomy' => 'category',
                            //         'field' => 'slug',
                            //         'terms' => 'core-capabilities',
                            //     )
                            // ),
                        )
                    );
                    ?>

                    <?php while ($wpcpt->have_posts()) : $wpcpt->the_post(); ?>

                        <li>
                            <a href="<?php echo get_permalink($post->ID); ?>" rel="dofollow" title="<?php the_title(); ?>" class="primary-link text-base">
                                <?php the_title(); ?>
                            </a>
                        </li>

                    <?php endwhile;
                    wp_reset_query(); ?>

                </ul>

            </div>
        </div>
    </div>

</div><!-- sitemap -->


<?php get_footer(); ?>