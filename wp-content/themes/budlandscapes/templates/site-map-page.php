<?php
/*
 * Template Name: Site Map Template
 * Template Post Type: post, page, whatever
 */

get_header(); ?>

<div class="sitemap">

    <div class="bg-teal-500 py-10">
        <div class="container max-w-4xl mx-auto flex">
            <h1 class="w-2/5 px-5 heading-1 mt-0 font-black uppercase">Site map</h1>
            <div class="w-3/5 px-5 text-white">

                <p class="text-xs">Quick reference to all pages contained within our site.
                <p>
            </div>
        </div>
    </div>

    <div class="container max-w-4xl py-14 text-sm mx-auto">

        <div class="flex flex-wrap">

            <div class="sitemap-about-us w-1/2 sm:w-1/3 px-2">

                <h2 class="heading-2">About us</h2>

                <ul class="standard-list ml-1">

                    <?php
                    $wpcpt = new WP_Query(
                        array(
                            'post_type' => 'page', // Change this to the slug of your Custom Post Type (cpt)
                            'posts_per_page' => -1, // -1 shows all cpt posts
                            'post_status' => 'publish', // only shows published cpt pages
                            'orderby' => 'title', // orders by cpt post title
                            'order' => 'ASC', // orders cpt posts title alphabetically
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'about-us',
                                )
                            ),
                        )
                    );
                    ?>

                    <?php while ($wpcpt->have_posts()) : $wpcpt->the_post(); ?>


                        <li>
                            <a href="<?php echo get_permalink($post->ID); ?>" rel="dofollow" title="<?php the_title(); ?>" class="primary-link text-xs">
                                <?php the_title(); ?>
                            </a>
                        </li>

                    <?php endwhile;
                    wp_reset_query(); ?>

                </ul>

            </div>
            <div class="sitemap-core-capabilities w-1/2 sm:w-1/3 px-2">

                <h2 class="heading-2">Core Capabilities</h2>

                <ul class="standard-list ml-1">

                    <?php
                    $wpcpt = new WP_Query(
                        array(
                            'post_type' => 'page', // Change this to the slug of your Custom Post Type (cpt)
                            'posts_per_page' => -1, // -1 shows all cpt posts
                            'post_status' => 'publish', // only shows published cpt pages
                            'orderby' => 'title', // orders by cpt post title
                            'order' => 'ASC', // orders cpt posts title alphabetically
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'core-capabilities',
                                )
                            ),
                        )
                    );
                    ?>

                    <?php while ($wpcpt->have_posts()) : $wpcpt->the_post(); ?>

                        <li>
                            <a href="<?php echo get_permalink($post->ID); ?>" rel="dofollow" title="<?php the_title(); ?>" class="primary-link text-xs">
                                <?php the_title(); ?>
                            </a>
                        </li>

                    <?php endwhile;
                    wp_reset_query(); ?>

                </ul>

            </div>

            <div class="sitemap-expertise w-1/2 sm:w-1/3 px-2">

                <h2 class="heading-2">Expertise</h2>

                <ul class="standard-list ml-1">

                    <?php
                    $wpcpt = new WP_Query(
                        array(
                            'post_type' => 'page', // Change this to the slug of your Custom Post Type (cpt)
                            'posts_per_page' => -1, // -1 shows all cpt posts
                            'post_status' => 'publish', // only shows published cpt pages
                            'orderby' => 'title', // orders by cpt post title
                            'order' => 'ASC', // orders cpt posts title alphabetically
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'expertise',
                                )
                            ),
                        )
                    );
                    ?>

                    <?php while ($wpcpt->have_posts()) : $wpcpt->the_post(); ?>

                        <li>
                            <a href="<?php echo get_permalink($post->ID); ?>" rel="dofollow" title="<?php the_title(); ?>" class="primary-link text-xs">
                                <?php the_title(); ?>
                            </a>
                        </li>

                    <?php endwhile;
                    wp_reset_query(); ?>

                </ul>

            </div>

            <div class="sitemap-get-in-touch w-1/2 sm:w-1/3 px-2">

                <h2 class="heading-2">Get in touch</h2>

                <ul class="standard-list ml-1">

                    <?php
                    $wppages = new WP_Query(
                        array(
                            'post_type' => 'page', // slug of pages
                            'posts_per_page' => -1, // -1 shows all pages
                            'post_status' => 'publish', // only shows published pages
                            'orderby' => 'title', // orders by page title
                            'order' => 'ASC', // orders page title alphabetically
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'get-in-touch',
                                )
                            ),
                        )
                    );
                    ?>

                    <?php while ($wppages->have_posts()) : $wppages->the_post(); ?>

                        <li>
                            <a href="<?php echo get_permalink($post->ID); ?>" rel="dofollow" title="<?php the_title(); ?>" class="primary-link text-xs">
                                <?php the_title(); ?>
                            </a>
                        </li>

                    <?php endwhile;
                    wp_reset_query(); ?>

                </ul>

            </div>

            <div class="sitemap-news w-1/2 sm:w-1/3 px-2">

                <h2 class="heading-2">News</h2>

                <ul class="standard-list ml-1">

                    <?php
                    $wpcpt = new WP_Query(
                        array(
                            'post_type' => 'page', // slug of pages
                            'posts_per_page' => -1, // -1 shows all pages
                            'post_status' => 'publish', // only shows published pages
                            'orderby' => 'title', // orders by page title
                            'order' => 'ASC', // orders page title alphabetically
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'news',
                                )
                            ),
                        )
                    );
                    ?>

                    <?php while ($wpcpt->have_posts()) : $wpcpt->the_post(); ?>

                        <li>
                            <a href="<?php echo get_permalink($post->ID); ?>" rel="dofollow" title="<?php the_title(); ?>" class="primary-link text-xs">
                                <?php the_title(); ?>
                            </a>
                        </li>

                    <?php endwhile;
                    wp_reset_query(); ?>

                </ul>

            </div>

            <div class="sitemap-utilities w-1/2 sm:w-1/3 px-2">

                <h2 class="heading-2">Utilities</h2>

                <ul class="standard-list ml-1">

                    <?php
                    $wpcpt = new WP_Query(
                        array(
                            'post_type' => 'page', // slug of pages
                            'posts_per_page' => -1, // -1 shows all pages
                            'post_status' => 'publish', // only shows published pages
                            'orderby' => 'title', // orders by page title
                            'order' => 'ASC', // orders page title alphabetically
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'utilities',
                                )
                            ),
                        )
                    );
                    ?>

                    <?php while ($wpcpt->have_posts()) : $wpcpt->the_post(); ?>

                        <li>
                            <a href="<?php echo get_permalink($post->ID); ?>" rel="dofollow" title="<?php the_title(); ?>" class="primary-link text-xs">
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