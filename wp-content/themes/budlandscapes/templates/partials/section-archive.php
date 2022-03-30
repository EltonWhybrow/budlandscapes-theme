<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



        <div class="standard-card p-0 m-0 relative flex flex-wrap">
            <h1>section-archive</h1>
            <?php if (has_post_thumbnail()) : ?>
                <div class="w-full md:w-1/2 "><a href="<?php the_permalink() ?>"><img class="object-cover object-center w-full h-full" src="<?php the_post_thumbnail_url('page-hero-mobile'); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?></a>
                </div>

                <div class="md:w-1/2 p-4 pt-1">

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
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 button-icon-right" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>


                </div>
        </div>





<?php endwhile;
else : endif; ?>