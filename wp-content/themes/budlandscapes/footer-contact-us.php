<div class="bg-igb-orange-500 pt-12 pb-6">
    <div class="lg:container lg:mx-auto">

        <div
            class="link-items flex flex-col sm:flex-row flex-wrap items-center sm:items-start justify-between pb-36 pt-4 text-white">

            <div class="w-full md:w-2/5 text-sm px-5">
                <h2 class="heading-2 font-bold text-white mb-3 pl-0 text-center md:text-right">CONTACT US</h2>
                <ul class="text-center md:text-right">
                    <li>Your Business</li>
                    <li>Address 1</li>
                    <li>Address 2</li>
                    <li>County</li>
                    <li>POST CODE</li>
                </ul>
                <ul class="text-center md:text-right mt-4">
                    <li><span class="bottom-1 inline relative text-xs">Telephone: </span>
                        <?php echo do_shortcode("[igb_main_number_invert]");
                        ?>
                    </li>
                    <li><span class="bottom-1 inline relative text-xs">Email: </span>
                        <?php echo do_shortcode("[igb_main_email_invert]"); ?>
                    </li>
                </ul>
            </div>

            <div class="w-full md:w-3/5 md:px-5 pl-20">
                <p> <?php echo do_shortcode('[wpforms id="3328" title="false"]'); ?></p>
            </div>

        </div>

    </div>
</div>

<!-- Site footer markup goes here -->
<footer class="bg-igb-dk-grey-500 pt-12 pb-6">
    <div class="lg:container lg:mx-auto">

        <div
            class="link-items flex flex-col sm:flex-row flex-wrap items-center sm:items-start justify-between p-2 text-white">
            <div class="sm:w-full p-0 sm:p-4">
                <img class="m-auto" src="https://dummyimage.com/260x43/666/777" alt="Business logo"
                    width="260" height="auto">
            </div>

            <div class="sm:w-1/4 p-0 sm:p-1 text-center">
                <h3 class="heading-3 text-sm text-white mb-3 pl-0">Email enquiries</h3>
                <ul>
                    <li>
                        <?php echo do_shortcode("[igb_main_email]"); ?>
                    </li>

                </ul>
            </div>

            <div class="sm:w-1/4 p-0 text-xs sm:p-1 text-center">
                <h3 class="heading-3 text-sm text-white mb-3 pl-0">Call ingenie Business</h3>
                <ul>
                    <li><span class="bottom-1 inline-block relative">Worldwide:</span>
                        <?php echo do_shortcode("[igb_main_number]");
                        ?>
                    </li>
                </ul>
            </div>

            <div class="sm:w-1/4 p-0 text-xs sm:p-1 text-center">
                <h3 class="heading-3 text-sm text-white mb-3 pl-0">Data, privacy and accreditations</h3>
                <ul>
                    <li><a class="primary-link-sm" href="/privacy-policy">Privacy policy</a></li>
                    <li><a class="primary-link-sm" href="/sitemap">Sitemap</a></li>
                </ul>
            </div>

            <div class="sm:w-1/4 p-0 text-xs sm:p-1 text-center">
                <h3 class="heading-3 text-sm text-white mb-3 pl-0">Accreditations</h3>
                <img class="my-1 m-auto" src="/resources/img/pages/logos/lr-org.jpg" alt="ISO 27001" width="70"
                    height="auto">
            </div>

        </div>

        <?php get_template_part('templates/partials/social/footer', 'icons'); ?>

        <?php get_template_part('templates/partials/copyright'); ?>
    </div>

    <!-- MODAL OVERLAY -->
    <div id="modal-overlay"
        class="cursor-pointer close-modal z-75 fixed hidden top-0 left-0 w-screen h-screen flex items-center justify-center bg-igb-rich-blue-700 bg-opacity-50 ">
    </div>

</footer>

<?php get_template_part('templates/partials/document-close');
