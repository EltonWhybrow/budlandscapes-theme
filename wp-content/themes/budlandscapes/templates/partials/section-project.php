<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Mobile Header -->
        <div class="bg-bl-orange-500 sm:block md:hidden">
            <div class="w-full p-3 ">
                <h2 class="heading-2 text-3xl font-bold text-white"><?php the_title(); ?>XXXX</h2>
            </div>

            <?php if (get_field('page_mobile_image')) { ?>
                <div class="py-0">
                    <img class="h-full w-full object-cover" src="<?php the_field('page_mobile_image'); ?>" alt="<?php the_title(); ?>">
                </div>
            <?php } ?>
        </div>

        <!-- Main Header -->
        <?php if (has_post_thumbnail()) : ?>
            <div class="py-0 hidden md:block">
                <img class="h-full w-full object-cover" src="<?php the_post_thumbnail_url('page-hero-banner'); ?>" alt="<?php the_title(); ?>">
            </div>
        <?php endif; ?>


        <!-- wysiwyg content -->
        <section class="wysiwyg-content">
            <?php the_content(); ?>
        </section>





<?php endwhile;
else : endif; ?>