<?php
$wpcta = new WP_Query(
    array(
        'post_type' => 'post', // Change this to the slug of your Custom Post Type (cpt)
        'posts_per_page' => 1, // -1 shows all cpt posts
        'post_status' => 'publish', // only shows published cpt pages
        'orderby' => 'publish_date', // orders by cpt post title
        'order' => 'DESC', // orders cpt posts title alphabetically
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => 'event-cta',
            )
        ),
    )
);
?>

<?php while ($wpcta->have_posts()) : $wpcta->the_post(); ?>


    <!-- CTA Notification -->
    <div class="m-0" id="cta-banner" style="
    display:none; 
    background-color: #<?php the_field('event_bkg_color'); ?>;background-image: url(<?php the_field('event_bkg_image'); ?>);background-size: cover;background-position: 85% center">
        <div class="flex flex-wrap px-3 md:pb-2">
            <div class="w-6/12 pt-2 pb-1 md:w-5/12">
                <?php if (get_field('event_image')) { ?>
                    <div class="py-0 pl-3">
                        <img class="float-right px-1 w-4/8" src="<?php the_field('event_image'); ?>" alt="<?php the_title(); ?>" width="250px" height="50px">
                    </div>
                <?php } ?>
            </div>


            <div class="hidden w-3/12 pt-2 text-right md:flex">
                <p class="inline-block px-3 text-xs text-white">
                    <span class="font-bold"><?php the_title(); ?></span><br />
                    <?php the_content(); ?>
                </p>
            </div>


            <div class="w-5/12 pt-3 pl-5 md:pl-2 md:w-3/12">
                <?php if (get_field('event_url')) { ?>
                    <p>
                        <a href="<?php the_field('event_url'); ?>" class="inline-flex float-right primary-btn md:float-none" target="_blank" rel="noopener">Join the
                            event</a>
                    </p>
                <?php } ?>
            </div>

            <div class="w-1/12 px-1 py-1">

                <a href="#" class="cta-btn" title="close">
                    <svg xmlns="http://www.w3.org/2000/svg" class="float-right w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
            </div>

            <div class="px-1 py-2 w-12/12 md:hidden">
                <p class="inline-block px-3 text-xs text-white ">
                    <span class="font-bold "><?php the_title(); ?></span><br />
                    <?php the_content(); ?>
                </p>
            </div>



        </div>

        <!-- <div class="px-3 py-1 pt-1 md:hidden w-12/12"">
        <p class="inline-block px-3 text-xs text-white ">
           
        </div> -->
    </div>


<?php endwhile;
wp_reset_query(); ?>