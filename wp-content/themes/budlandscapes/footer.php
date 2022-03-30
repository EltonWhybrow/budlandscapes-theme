<!-- Site footer markup goes here -->
<footer class="bg-gray-500 pt-12 pb-6">
    <div class="lg:container lg:mx-auto">

        <div class="link-items flex flex-col sm:flex-row flex-wrap items-center sm:items-start justify-between p-2 text-white">
            <div class="sm:w-full p-0 sm:p-4">
                <img class="m-auto" src="/resources/img/pages/logos/bud_logo_2022.svg" alt="Bud Landscapes" width="170px" height="auto">
            </div>

            <div class="sm:w-1/4 p-0 text-xs sm:p-1 text-center">

                <h3 class="heading-3 text-sm text-white mb-3 pl-0">Social media</h3>
                <div class="">
                    <?php get_template_part('templates/partials/social/footer', 'icons'); ?>
                </div>
            </div>

            <div class="sm:w-1/4 p-0 text-xs sm:p-1 text-center">
                <h3 class="heading-3 text-sm text-white mb-3 pl-0">Helper</h3>
                <ul>
                    <li><a class="primary-link-sm" href="/privacy-policy">Privacy policy</a></li>
                    <li><a class="primary-link-sm" href="/sitemap">Sitemap</a></li>
                </ul>
            </div>

            <div class="sm:w-1/4 p-0 sm:p-1 text-center">
                <h3 class="heading-3 text-sm text-white mb-3 pl-0">Email</h3>
                <ul>
                    <li>
                        <?php echo do_shortcode("[bl_main_email]"); ?>
                    </li>

                </ul>
            </div>

            <div class="sm:w-1/4 p-0 text-xs sm:p-1 text-center">
                <h3 class="heading-3 text-sm text-white mb-3 pl-0">Get in touch</h3>
                <ul>
                    <li><span class="bottom-1 inline-block relative">Landline:</span>
                        <?php echo do_shortcode("[bl_landline_number]");
                        ?>
                    </li>
                    <li><span class="bottom-1 inline-block relative">Mobile:</span>
                        <?php echo do_shortcode("[bl_mobile_number]");
                        ?>
                    </li>
                </ul>
            </div>





        </div>



        <!-- <div class="flex lg:container lg:mx-auto justify-center p-0">

            <div class="px-5">
               
            </div>
        </div> -->


        <?php get_template_part('templates/partials/copyright'); ?>
    </div>

    <!-- MODAL OVERLAY -->
    <div id="modal-overlay" class="cursor-pointer close-modal z-75 fixed hidden top-0 left-0 w-screen h-screen flex items-center justify-center bg-blue-700 bg-opacity-50 ">
    </div>

</footer>

<?php get_template_part('templates/partials/document-close');
