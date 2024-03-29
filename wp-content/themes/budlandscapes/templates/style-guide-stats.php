<?php
/*
 * Template Name: Style Guide Stats Template
 * Template Post Type: page
 */

get_header();
?>

<!-- START: Highlight the code examples -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.0.1/styles/atom-one-dark.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.0.1/highlight.min.js"></script>
<script>
    hljs.highlightAll();
</script>
<!-- END: Highlight the code examples -->


<div class="bg-igb-li-grey-500 text-center p-8 my-4">
    <h1 class="pt-4 text-center">Styleguide - Stats</h1>
    <h3 class="heading-3 max-w-3xl mx-auto">ingenie statistics (variables) used throughout site. </h3>
    <h5>We update one place and it updates everywhere</h5>

    <?php echo do_shortcode("[get-message color='alert' message='IMPORTANT! Use these in all places where statistics are quoted across site to avoid mis-information']"); ?>

    <div class="max-w-2xl m-auto py-10">
        <a class="inline-block filter primary-btn my-1" href="#learner">Learner Driver</a>
        <a class="inline-block filter primary-btn my-1" href="#young-driver">Young Driver</a>
        <a class="inline-block filter primary-btn my-1" href="#obd">OBD/Trakm8</a>
        <a class="inline-block filter primary-btn my-1" href="#ingenie-contacts">ingenie Contacts</a>
        <a class="inline-block filter primary-btn my-1" href="#social-media">Social Media</a>
        <a class="inline-block filter primary-btn my-1" href="#blogs-url">Blogs</a>

        <a class="inline-flex filter secondary-btn my-1" href="/styleguide">
            <span>Back</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-right" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
        </a>

    </div>

</div>

<div class="container mx-auto">

    <!--  -->
    <!-- learner snippets header -->
    <!--  -->
    <h2 id="learner" class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-igb-orange-500 pl-2">
            Learner Driver
        </span>
    </h2>

    <div class="content-center pt-5 hidden md:flex">
        <div class="w-1/2">
            <span class="h-full w-full items-center justify-center flex text-base p-2 font-semibold">
                Snippets
            </span>
        </div>
        <div class="w-1/2">
            <span class="h-full w-full items-center justify-center flex text-base p-2 font-semibold">
                Output
            </span>
        </div>
    </div>

    <div class="flex content-center pt-5 md:hidden">
        <div class="w-1/2 mx-auto">
            <div class="h-full w-full items-center justify-center flex text-base p-2 font-semibold">
                <span class="bg-gray-800 text-gray-400 p-1">Snippets</span> <span class="font-normal p-1">and
                    Output</span>
            </div>
        </div>

    </div>


    <!-- learner_get_a_quote_url -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-left justify-left flex text-xs">
                <code class="language-php w-full">
    [learner_get_a_quote_url]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[learner_get_a_quote_url]"); ?>
            </span>
        </div>
    </div>

    <!-- learner_retrieve_a_quote_url -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [learner_retrieve_a_quote_url]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[learner_retrieve_a_quote_url]"); ?>
            </span>
        </div>
    </div>

    <!-- learner_quotes_start_from_txt -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [learner_quotes_start_from_txt]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[learner_quotes_start_from_txt]"); ?>
            </span>
        </div>
    </div>

    <!-- learner_low_excess_txt -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [learner_low_excess_txt]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[learner_low_excess_txt]"); ?>
            </span>
        </div>
    </div>

    <!-- learner_sp_dates_discount_txt -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [learner_sp_dates_discount_txt]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[learner_sp_dates_discount_txt]"); ?>
            </span>
        </div>
    </div>

    <!--  -->
    <!-- young driver snippets header -->
    <!--  -->
    <h2 id="young-driver" class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-igb-orange-500 pl-2">
            Young Driver
        </span>
    </h2>

    <div class="content-center pt-5 hidden md:flex">
        <div class="w-1/2">
            <span class="h-full w-full items-center justify-center flex text-base p-2 font-semibold">
                Snippets
            </span>
        </div>
        <div class="w-1/2">
            <span class="h-full w-full items-center justify-center flex text-base p-2 font-semibold">
                Output
            </span>
        </div>
    </div>

    <div class="flex content-center pt-5 md:hidden">
        <div class="w-1/2 mx-auto">
            <div class="h-full w-full items-center justify-center flex text-base p-2 font-semibold">
                <span class="bg-gray-800 text-gray-400 p-1">Snippets</span> <span class="font-normal p-1">and
                    Output</span>
            </div>
        </div>

    </div>

    <!-- yd_get_a_quote_url -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [yd_get_a_quote_url]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[yd_get_a_quote_url]"); ?>
            </span>
        </div>
    </div>

    <!-- yd_retrieve_a_quote_url -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [yd_retrieve_a_quote_url]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[yd_retrieve_a_quote_url]"); ?>
            </span>
        </div>
    </div>

    <!-- yd_up_front_txt -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [yd_up_front_txt]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[yd_up_front_txt]"); ?>
            </span>
        </div>
    </div>

    <!-- yd_drive_safe_discount_txt -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [yd_drive_safe_discount_txt]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[yd_drive_safe_discount_txt]"); ?>
            </span>
        </div>
    </div>


    <!-- yd_renewal_discount_txt -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [yd_renewal_discount_txt]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[yd_renewal_discount_txt]"); ?>
            </span>
        </div>
    </div>

    <!-- yd_renewal_percentage_txt -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [yd_renewal_percentage_txt]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[yd_renewal_percentage_txt]"); ?>
            </span>
        </div>
    </div>

    <!-- yd_frac_cus_discount_txt -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [yd_frac_cus_discount_txt]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[yd_frac_cus_discount_txt]"); ?>
            </span>
        </div>
    </div>

    <!-- yd_sp_dates_up_front_txt -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [yd_sp_dates_up_front_txt]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[yd_sp_dates_up_front_txt]"); ?>
            </span>
        </div>
    </div>

    <!-- yd_sp_dates_renewals_txt -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [yd_sp_dates_renewals_txt]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[yd_sp_dates_renewals_txt]"); ?>
            </span>
        </div>
    </div>

    <!-- yd_sp_factors_renewals_txt -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [yd_sp_factors_renewals_txt]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[yd_sp_factors_renewals_txt]"); ?>
            </span>
        </div>
    </div>

    <!-- yd_sp_premium_increases_txt -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [yd_sp_premium_increases_txt]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[yd_sp_premium_increases_txt]"); ?>
            </span>
        </div>
    </div>

    <!-- yd_sp_top_up_miles_txt -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [yd_sp_top_up_miles_txt]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[yd_sp_top_up_miles_txt]"); ?>
            </span>
        </div>
    </div>

    <!--  -->
    <!-- OBD snippets header -->
    <!--  -->
    <h2 id="obd" class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-igb-orange-500 pl-2">
            OBD Specific
        </span>
    </h2>

    <div class="content-center pt-5 hidden md:flex">
        <div class="w-1/2">
            <span class="h-full w-full items-center justify-center flex text-base p-2 font-semibold">
                Snippets
            </span>
        </div>
        <div class="w-1/2">
            <span class="h-full w-full items-center justify-center flex text-base p-2 font-semibold">
                Output
            </span>
        </div>
    </div>

    <div class="flex content-center pt-5 md:hidden">
        <div class="w-1/2 mx-auto">
            <div class="h-full w-full items-center justify-center flex text-base p-2 font-semibold">
                <span class="bg-gray-800 text-gray-400 p-1">Snippets</span> <span class="font-normal p-1">and
                    Output</span>
            </div>
        </div>

    </div>

    <!-- obd_help_number -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [obd_help_number]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[obd_help_number]"); ?>
            </span>
        </div>
    </div>

    <!-- obd_trakm8_email -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [obd_trakm8_email]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[obd_trakm8_email]"); ?>
            </span>
        </div>
    </div>

    <!--  -->
    <!-- ingenie Contacts header -->
    <!--  -->
    <h2 id="ingenie-contacts" class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-igb-orange-500 pl-2">
            ingenie Contacts
        </span>
    </h2>

    <div class="content-center pt-5 hidden md:flex">
        <div class="w-1/2">
            <span class="h-full w-full items-center justify-center flex text-base p-2 font-semibold">
                Snippets
            </span>
        </div>
        <div class="w-1/2">
            <span class="h-full w-full items-center justify-center flex text-base p-2 font-semibold">
                Output
            </span>
        </div>
    </div>

    <div class="flex content-center pt-5 md:hidden">
        <div class="w-1/2 mx-auto">
            <div class="h-full w-full items-center justify-center flex text-base p-2 font-semibold">
                <span class="bg-gray-800 text-gray-400 p-1">Snippets</span> <span class="font-normal p-1">and
                    Output</span>
            </div>
        </div>

    </div>

    <?php echo do_shortcode("[get-message color='warning' message='Our contact page has all our numbers on and this one is not there so I would not use this untill clarified']"); ?>

    <!-- ig_main_yd_number -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [ig_main_yd_number]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[ig_main_yd_number]"); ?>
            </span>
        </div>
    </div>

    <!-- ig_windscreen_yd_number -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [ig_windscreen_yd_number]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[ig_windscreen_yd_number]"); ?>
            </span>
        </div>
    </div>

    <!--  -->
    <!-- Social Media header -->
    <!--  -->
    <h2 id="social-media" class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-igb-orange-500 pl-2">
            Social Media
        </span>
    </h2>

    <div class="content-center pt-5 hidden md:flex">
        <div class="w-1/2">
            <span class="h-full w-full items-center justify-center flex text-base p-2 font-semibold">
                Snippets
            </span>
        </div>
        <div class="w-1/2">
            <span class="h-full w-full items-center justify-center flex text-base p-2 font-semibold">
                Output
            </span>
        </div>
    </div>

    <div class="flex content-center pt-5 md:hidden">
        <div class="w-1/2 mx-auto">
            <div class="h-full w-full items-center justify-center flex text-base p-2 font-semibold">
                <span class="bg-gray-800 text-gray-400 p-1">Snippets</span> <span class="font-normal p-1">and
                    Output</span>
            </div>
        </div>

    </div>

    <!-- ig_facebook_account -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [ig_facebook_account]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[ig_facebook_account]"); ?>
            </span>
        </div>
    </div>

    <!-- ig_twitter_account -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [ig_twitter_account]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[ig_twitter_account]"); ?>
            </span>
        </div>
    </div>

    <!-- ig_instagram_account -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [ig_instagram_account]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[ig_instagram_account]"); ?>
            </span>
        </div>
    </div>

    <!--  -->
    <!-- Blogs header -->
    <!--  -->
    <h2 id="blogs-url" class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-igb-orange-500 pl-2">
            Blog URLS
        </span>
    </h2>

    <div class="content-center pt-5 hidden md:flex">
        <div class="w-1/2">
            <span class="h-full w-full items-center justify-center flex text-base p-2 font-semibold">
                Snippets
            </span>
        </div>
        <div class="w-1/2">
            <span class="h-full w-full items-center justify-center flex text-base p-2 font-semibold">
                Output
            </span>
        </div>
    </div>

    <div class="flex content-center pt-5 md:hidden">
        <div class="w-1/2 mx-auto">
            <div class="h-full w-full items-center justify-center flex text-base p-2 font-semibold">
                <span class="bg-gray-800 text-gray-400 p-1">Snippets</span> <span class="font-normal p-1">and
                    Output</span>
            </div>
        </div>

    </div>

    <!-- [ig_blog_url] -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [ig_blog_url]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[ig_blog_url]"); ?>
            </span>
        </div>
    </div>

    <!-- [ig_parents_guide_url] -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [ig_parents_guide_url]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[ig_parents_guide_url]"); ?>
            </span>
        </div>
    </div>

    <!-- [ig_young_drivers_guide_url] -->
    <div class="flex flex-wrap content-center pb-6 md:pb-2">
        <div class="flex-auto md:w-1/2">
            <pre class="h-full w-full items-center justify-center flex text-xs">
                <code class="language-php w-full">
    [ig_young_drivers_guide_url]
                </code>
            </pre>
        </div>
        <div class="flex-auto md:w-1/2">
            <span class="break-all h-full w-full items-center justify-center flex text-xs bg-gray-100 p-2 text-igb-rich-blue-500 border-b-2 md:border-b-0 md:border-r-8 border-gray-600">
                <?php echo do_shortcode("[ig_young_drivers_guide_url]"); ?>
            </span>
        </div>
    </div>


</div>



<?php get_footer(); ?>