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
<header class="top-0 z-50 flex justify-between bg-bl-dk-grey-500 bg-opacity-70 absolute" style="width:100%;">
    <!-- <header class="flex justify-between bg-bl-dk-grey-500"> -->

    <div class="flex-none px-7 py-7 text-left">

        <span class="lg:hidden inline-block">
            <!-- Burger menu -->
            <?php get_template_part('templates/partials/navburger-main'); ?>
            <button type="button" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </span>
    </div>

    <a href="/" class="inline-block px-4 py-3">
            <img src="/resources/img/pages/logos/bud_logo_2022.svg" alt="Bud Landscapes" width="180px" height="auto">
        </a>

    <!-- <div class="flex-none px-4 py-2 mt-3 align-middle">
       
    </div> -->

    <div class="flex-1 px-3 py-0 mx-1 text-right hidden md:block">

        <?php get_template_part('templates/partials/navbar', 'main'); ?>

    </div>

</header>
