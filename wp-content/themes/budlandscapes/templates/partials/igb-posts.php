<?php
$wpcpt = new WP_Query(
    array(

        // 'posts_per_page' => -1, // -1 shows all cpt posts
        'post_status' => 'publish', // only shows published cpt pages
        'orderby' => 'title', // orders by cpt post title
        'order' => 'ASC', // orders cpt posts title alphabetically
        'category__not_in' => 57,

    )
);
?>

<?php if ($wpcpt->have_posts()) : while ($wpcpt->have_posts()) : $wpcpt->the_post(); ?>

<div class="standard-card p-0 m-0 relative flex flex-wrap mb-10">

    <?php if (has_post_thumbnail()) : ?>
    <div class="w-full md:w-2/5"><a href="<?php the_permalink() ?>"><img class="object-cover object-center w-full h-48"
                src="<?php the_post_thumbnail_url('page-hero-mobile'); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?></a>
    </div>

    <div class="md:w-3/5 p-4 pt-1">

        <div class="h-12">

            <h4 class="heading-4 my-2 min-h-full p-0"><?php the_title(); ?></h4>
        </div>

        <p class="block leading-snug text-sm pr-3">
            <?php
                        $excerpt = get_the_excerpt();

                        $excerpt = substr($excerpt, 0, 180);
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


<?php endwhile; ?>
<?php else : ?>
<h4 class="heading-4">Sorry, currently no posts found</h4>
<!-- Display "Posts not found" message here -->
<?php endif; ?>
