<!-- 
=============================
Press release card
============================= 
-->
<div class="grid gap-6 grid-cols-1">

    <?php
    $args = array(
        'post_type' => 'press-release',
        // 'posts_per_page' => 6,
        // "orderby"=>"date",
        // "order"=>"DESC",
        // 'tax_query' => array(
        //     array(
        //         'taxonomy' => 'yd-sections',
        //         'field' => 'slug',
        //         'terms' => 'coronavirus-covid-19',
        //     )
        // ),
    );
    $featured_query = new WP_Query($args);
    if ($featured_query->have_posts()) : while ($featured_query->have_posts()) : $featured_query->the_post(); ?>


    <div class="">
        <div class="standard-card p-0 m-0 relative flex flex-wrap">

            <?php if (has_post_thumbnail()) : ?>
            <div class="w-full md:w-1/2"><a href="<?php the_permalink() ?>"><img
                        class="object-cover object-center w-full h-full"
                        src="<?php the_post_thumbnail_url('page-hero-mobile'); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?></a>
            </div>

            <div class="md:w-1/2 p-4 pt-1">

                <?php if (get_field('logo')) { ?>
                <p class="p-2 sm:px-0 text-xs">
                    <img class="w-1/2 mx-auto md:float-right" src="<?php the_field('logo'); ?>"
                        alt="<?php the_title(); ?>">
                </p>
                <?php } ?>

                <div class="h-12">

                    <h4 class="heading-4 my-2 min-h-full p-0"><?php the_title(); ?></h4>
                </div>

                <p class="block leading-snug text-sm pr-3">
                    <?php
                                $excerpt = get_the_excerpt();

                                $excerpt = substr($excerpt, 0, 120);
                                $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                                echo "$result..";
                                ?>
                </p>

                </p>

                <a href="<?php the_permalink() ?>" class="inline-flex primary-link-sm py-2">
                    <span>Read more</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 button-icon-right" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>

            </div>
        </div>
    </div>

    <?php endwhile;
    else : endif; ?>
    <?php wp_reset_postdata(); ?>

</div>

<!-- <div class="pb-2 px-4 pt-0 text-right">
    <a class="primary-link-sm inline-flex" href="/press-release">
        View more
        <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg></a>
</div> -->
