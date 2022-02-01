<?php get_template_part('templates/partials/document-open'); ?>

<div>
    <?php get_template_part('templates/partials/notifications/cta-banner'); ?>
</div>


<!-- 
    <?php // echo do_shortcode("[get-cta-message color='info' message='<span class=\"font-bold\">Fintech Summit 2-3 November 2021</span><br /> Join ingenie Business at this year’s summit' link='#']"); 
    ?> -->
<!-- 
[get-message color='info' message='This message adds a  <a href=\"/styleguide-stats\" class=\"primary-link-sm\">inline link</a> to the message argument for more control over link. Escape the double quotes with a backslash! Use HTMlL entities if using single ’ quote in message.'] -->

<!-- shadow-md filter -->
<header class="top-0 z-50 justify-between bg-bl-dk-grey-500 bg-opacity-80 absolute" style="width:100%;">
    <!-- <header class="flex justify-between bg-bl-dk-grey-500"> -->
    <div class="xl:container xl:mx-auto flex justify-between">
        <div class="flex-none p-7 text-left lg:hidden">

            <span class="inline-block">
                <!-- Burger menu -->
                <?php get_template_part('templates/partials/navburger-main'); ?>
                <button type="button" id="menuToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </span>
        </div>

        <a href="/" class="inline-block p-7 pr-2">
            <img src="/resources/img/pages/logos/bud_logo_2022.svg" alt="Bud Landscapes" width="180px" height="auto">
        </a>

        <!-- <div class="flex-none px-4 py-2 mt-3 align-middle">
       
    </div> -->

        <div class="flex-1 px-2 py-0 mx-1 text-right hidden md:block">

            <?php get_template_part('templates/partials/navbar', 'main'); ?>

        </div>
        <div class="flex-none p-7 pl-2 text-right">

            <h3 class="text-white">NEED HELP? Get in touch</h3>
            <ul>
                <li>
                    <span class="text-sm text-white">T |</span> <?php echo do_shortcode("[bl_landline_number]"); ?>
                </li>
                <li>
                    <span class="text-sm text-white">M |</span> <?php echo do_shortcode("[bl_mobile_number]"); ?>
                </li>
                <li>
                    <span class="text-sm text-white">E |</span> <?php echo do_shortcode("[bl_main_email]"); ?>
                </li>
            </ul>

        </div>
    </div>
</header>