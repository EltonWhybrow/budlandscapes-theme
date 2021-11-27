<!-- 
=============================
Key people card
============================= 
-->
<!-- <div class="flex flex-wrap justify-center gap-x-1"> -->
<div class="grid gap-12 grid-cols-1 md:grid-cols-2">


    <?php
    $args = array(
        'post_type' => 'people',
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
        <div class="standard-card p-0 relative m-0 shadow-none border-0">

            <?php if (has_post_thumbnail()) : ?>
            <!-- <a href="<?php the_permalink() ?>"> -->
            <img class="object-cover object-center w-full h-auto" src="<?php the_post_thumbnail_url('blog-large'); ?>"
                alt="<?php the_title(); ?>">
            <?php endif; ?>
            <!-- </a> -->

            <div class="p-0 pt-1">


                <div class="inline-flex text-igb-li-grey-600 text-xs mt-2">
                    <div class="my-3 p-0">
                        <svg id="icon-key-people" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 btn-icon-left"
                            viewBox="0 0 40 40">
                            <rect id="Rectangle_1174" data-name="Rectangle 1174" width="40" height="40" fill="#fff" />
                            <g id="Group_964" data-name="Group 964" transform="translate(-1562.412 -436.269)">
                                <path id="Path_1456" data-name="Path 1456"
                                    d="M1601.082,454.964l-2.362.013a16.493,16.493,0,0,0-15.429-15.265l-.013-2.363a1.085,1.085,0,0,0-2.171.011l.012,2.362a16.493,16.493,0,0,0-15.265,15.429l-2.363.013a1.085,1.085,0,0,0,.006,2.171h.006l2.362-.013a16.493,16.493,0,0,0,15.429,15.265l.013,2.363a1.085,1.085,0,0,0,1.085,1.079h.006a1.085,1.085,0,0,0,1.08-1.091l-.013-2.362a16.493,16.493,0,0,0,15.265-15.429l2.363-.013a1.085,1.085,0,0,0-.012-2.171ZM1583.454,470.4l-.013-2.4a1.085,1.085,0,0,0-1.085-1.08h-.006a1.086,1.086,0,0,0-1.08,1.091l.013,2.4a14.316,14.316,0,0,1-13.238-13.1l1.823-.01a1.085,1.085,0,0,0-.006-2.171h-.006l-1.823.01a14.316,14.316,0,0,1,13.1-13.238l.012,2.293a1.085,1.085,0,0,0,1.085,1.08h.006a1.085,1.085,0,0,0,1.08-1.091l-.012-2.293a14.316,14.316,0,0,1,13.238,13.1l-1.932.01a1.085,1.085,0,0,0,.006,2.171h.006l1.932-.01A14.316,14.316,0,0,1,1583.454,470.4Z"
                                    transform="translate(0 0)" fill="currentColor" />
                                <path id="Path_1457" data-name="Path 1457"
                                    d="M1652.587,507.994a4.356,4.356,0,1,0-4.356-4.356A4.361,4.361,0,0,0,1652.587,507.994Zm0-6.542a2.185,2.185,0,1,1-2.186,2.185A2.188,2.188,0,0,1,1652.587,501.453Z"
                                    transform="translate(-70.295 -51.614)" fill="currentColor" />
                                <path id="Path_1458" data-name="Path 1458"
                                    d="M1642.63,549.128h-7.305a3.57,3.57,0,0,0-3.709,3.4v3.459a1.085,1.085,0,1,0,2.171,0V552.53a1.413,1.413,0,0,1,1.539-1.231h7.305a1.413,1.413,0,0,1,1.538,1.231v3.459a1.085,1.085,0,0,0,2.171,0V552.53A3.57,3.57,0,0,0,1642.63,549.128Z"
                                    transform="translate(-56.685 -92.443)" fill="currentColor" />
                            </g>
                        </svg>
                    </div>
                    <h3 class="heading-3 text-igb-orange-500 my-2 p-0"><?php the_title(); ?></h3>
                </div>





                <div class="p-3 text-sm">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>

    <?php endwhile;
    else : endif; ?>
    <?php wp_reset_postdata(); ?>

</div>
