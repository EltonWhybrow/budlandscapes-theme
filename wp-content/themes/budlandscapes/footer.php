<!-- Site footer markup goes here -->
<footer class="bg-gray-900 pt-16 pb-4">
    <div class="lg:container lg:mx-auto">

        <div class="link-items flex flex-col sm:flex-row flex-wrap items-center sm:items-start justify-between p-2 text-white space-y-14 md:space-y-0">
            <div class="sm:w-full p-0 sm:p-24">
                <img class="m-auto" src="/resources/img/pages/logos/bud_logo_2022.svg" alt="Bud Landscapes" width="170px" height="auto">
            </div>

            <div class="sm:w-1/4 p-0 text-xs sm:p-1 text-center">
                <h3 class="text-base font-semibold text-white mb-3 pl-0">Get in touch</h3>
                <ul>
                    <li><a class='primary-link' href='tel:<?php echo do_shortcode("[bl_landline_number]"); ?>'><?php echo do_shortcode("[bl_landline_number]"); ?></a>
                    </li>
                    <li><a class='primary-link' href='tel:<?php echo do_shortcode("[bl_mobile_number]"); ?>'><?php echo do_shortcode("[bl_mobile_number]"); ?></a>
                    </li>
                    <li>
                        <a class='primary-link' href='mailto:<?php echo do_shortcode("[bl_main_email]"); ?>'><?php echo do_shortcode("[bl_main_email]"); ?></a>
                    </li>
                </ul>
            </div>

            <div class="sm:w-1/4 p-0 text-xs sm:p-1 text-center">
                <h3 class="text-base font-semibold text-white mb-3 pl-0">Company</h3>
                <ul>
                    <li><a class="primary-link" href="/testimonials">Testimonials</a></li>
                    <li><a class="primary-link" href="/site-map">Sitemap</a></li e </ul>
            </div>

            <div class="sm:w-1/4 p-0 text-xs sm:p-1 text-center">

                <h3 class="text-base font-semibold text-white mb-3 pl-0">Accredited</h3>
                <div class="flex">
                    <div class="flex-1 md:flex-none">
                        <img class="h-20 md:h-16 w-auto mx-auto" src="/resources/img/pages/logos/safe-contractor-logo.svg" alt="approved safe contractor">
                    </div>
                    <div class="flex-1">
                        <img class="h-auto w-3/4 md:w-5/6 mx-auto" src="/resources/img/pages/logos/assoc-pro-landscapers-logo.svg" alt="association of professional landscapers">
                    </div>
                </div>

            </div>

            <div class="sm:w-1/4 p-0 text-xs sm:p-1 text-center">

                <h3 class="text-base font-semibold text-white mb-3 pl-0">Social media</h3>
                <div class="">
                    <?php get_template_part('templates/partials/social/footer', 'icons'); ?>
                </div>
            </div>


        </div>

    </div>

    <?php get_template_part('templates/partials/copyright'); ?>
    </div>

    <!-- MODAL OVERLAY -->
    <div id="modal-overlay" class="cursor-pointer close-modal z-75 fixed hidden top-0 left-0 w-screen h-screen flex items-center justify-center bg-blue-700 bg-opacity-50 ">
    </div>

</footer>

<?php get_template_part('templates/partials/document-close');
