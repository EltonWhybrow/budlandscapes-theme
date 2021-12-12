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
<header class="sticky top-0 z-50 flex justify-between bg-igb-dk-grey-500">
    <!-- <header class="flex justify-between bg-igb-dk-grey-500"> -->


    <div class="flex-none px-5 py-1 pt-2 m-1 text-left mb-0">

        <span class="lg:hidden inline-block">
            <!-- Burger menu -->
            <?php get_template_part('templates/partials/navburger-main'); ?>
            <button type="button" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </span>

        <a href="/" class="inline-block">
            <!-- <span class="text-xl font-bold">ingenie</span> -->
            <img src="https://dummyimage.com/220x39/666/777" alt="Business" width="220" height="auto">
        </a>

    </div>

    <!-- <div class="flex-none px-4 py-2 mt-3 align-middle">
       
    </div> -->

    <div class="flex-1 px-3 py-0 mx-1 text-right">

        <?php get_template_part('templates/partials/navbar', 'main'); ?>

    </div>

</header>
