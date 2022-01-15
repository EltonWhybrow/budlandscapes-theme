<?php get_header(); ?>

<div class="bg-bl-orange-500">

    <div class="lg:container lg:mx-auto py-2 max-w-4xl">

        <div class="flex md:pb-3 pt-2 text-white">

            <div class="sm:w-2/5 text-sm px-5 hidden md:block">
                <h2 class="heading-2 font-bold text-white mb-3 pl-0 text-right">BLOG</h2>
            </div>

            <div class="sm:w-3/5 px-5 text-sm">

                <p class="py-4">
                    <a href="/contact-us" class="inline-flex primary-btn border-white">
                        <span>NEXT: Contact Us</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 button-icon-right" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </p>

            </div>
        </div>
    </div>
</div>


<section class="container mx-auto md:py-10 pb-3 max-w-4xl">

    <div class="md:pb-12 pt-4 text-sm px-5">

        <h2 class="heading-2 font-bold text-bl-orange-500 my-3 pl-0">Latest posts</h2>

        <?php get_template_part('templates/partials/igb-posts'); ?>

    </div>
</section>

<?php get_footer();
