<!-- 
=============================
Customer quotes slider
============================= 
-->
<section id="slider-heros" class="mx-0">
    <div class="flexslider relative bg-transparent border-0 h-screen">
        <ul class="slides">

            <?php
            $feat_args = array(
                'post_type' => 'heros',
                'posts_per_page' => $number,
                //     'tax_query' => array(
                //     array (
                //         // 'taxonomy' => 'quotes',
                //         // 'field' => 'slug',
                //         // 'terms' => 'parents-guide',
                //     )
                // ),
            );
            $featured_query = new WP_Query($feat_args);
            if ($featured_query->have_posts()) : while ($featured_query->have_posts()) : $featured_query->the_post(); ?>
            <li class="slide" style="
            background-image: url(<?php the_post_thumbnail_url('hero-banner'); ?>); 
            background-size: cover; 
            background-position: center">

                <div class="flex container mx-auto">
                    <!-- <div class="w-full md:w-2/5 mx-auto md:mt-10">
                        <?php //if (get_field('inline_image')) { ?>
                        <img class="md:float-right md:mr-4 mx-auto" src="<?php the_field('inline_image'); ?>"
                            alt="<?php //the_title() ?>" width="180px" height="auto" style="width: 180px; height: auto;">
                        <?php // } ?>
                    </div> -->

                    <div
                        class="w-full h-screen mx-auto text-white px-5 text-center relative">
                        <?php the_field('hero_heading'); ?>
                        <div class="text-sm px-6 md:px-0"><?php the_content() ?></div>
                    </div>
                </div>


            </li>

            <?php endwhile;
            endif; ?>
            <?php wp_reset_postdata(); ?>

        </ul>
    </div>
</section>
