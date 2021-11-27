<?php
/*
 * Template Name: Style Guide Misc Template
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

<!-- <div class="fixed right-0 top-0 show-source z-100 cursor-pointer">
    <div
        class="absolute text-xs text-white font-semibold pre z-100 transform rotate-45 h-40 pt-4 text-center leading-none cursor-pointer">
        <span class="text-2xl">[</span>
        <span id="toggle">Show Code</span>
        <span class="text-2xl">]</span>
    </div>
    <div class="w-32 overflow-hidden inline-block">
        <div class="h-52 bg-igb-rich-blue-600 -rotate-45 transform origin-top-left"></div>
    </div>
</div> -->

<div class="bg-igb-li-grey-500 text-center p-8 my-4">
    <h1 class="pt-4 text-center">Styleguide - Layouts</h1>
    <h3 class="heading-3 max-w-3xl mx-auto">Reference UI layouts/blocks with some code snippets</h3>
    <h5>Also, helps with
        purging of the Tailwind CSS framework to reduce file sizes in production builds.</h5>

    <div class="max-w-3xl m-auto py-10">
        <a class="inline-block filter primary-btn my-1" href="#misc">Misc</a>

        <a class="inline-flex filter secondary-btn my-1" href="/styleguide">
            <span>Back</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-right" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
        </a>

    </div>

</div>



<!-- 
-------------------------
Misc

SECTION - Misc
-------------------------	
-->
<div id="misc" class="mx-auto">


    <h2 class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-igb-orange-500 pl-2">
            Misc
        </span>
    </h2>

    <h4 class="heading-4 text-center">Example of pros cons lists</h4>
    <!-- Pros/cons -->
    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:flex-1">
            <div class="text-center">
                <h3 class="heading-3 my-3">Covered</h3>
                <ul class="standard-list list-none">
                    <li class="border-b border-gray-300 mb-1">
                        <p class="inline">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6 pr-1 pb-1 text-success-900"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>Driving any time you like - no night-time curfew here!
                        </p>
                    </li>
                    <li class="border-b border-gray-300 mb-1">
                        <p class="inline">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6 pr-1 pb-1 text-success-900"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>Stolen car recovery if it's been reported as missing
                        </p>
                    </li>
                    <li class="border-b border-gray-300 mb-1">
                        <p class="inline">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6 pr-1 pb-1 text-success-900"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>Your audio system up to £300 as long as it's a permanent fixture
                        </p>
                    </li>
                    <li class="border-b  border-gray-300 mb-1">
                        <p class="inline">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6 pr-1 pb-1 text-success-900"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>A car to get you around if yours is being fixed by one of our repairers*
                        </p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="flex-auto md:flex-1">
            <div class="text-center">
                <h3 class="heading-3 my-3">NOT Covered</h3>
                <ul class="standard-list list-none">
                    <li class="border-b border-gray-300 mb-1">
                        <p class="inline">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6 pr-1 pb-1 text-alert-500"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>Modifications like alloy wheels or tinted windows
                        </p>
                    </li>
                    <li class="border-b border-gray-300 mb-1">
                        <p class="inline">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6 pr-1 pb-1 text-alert-500"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>Taking your car on a track
                        </p>
                    </li>
                    <li class="border-b border-gray-300 mb-1">
                        <p class="inline">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6 pr-1 pb-1 text-alert-500"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>Using your car for deliveries or racing
                        </p>
                    </li>
                    <li class="border-b  border-gray-300 mb-1">
                        <p class="inline">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6 pr-1 pb-1 text-alert-500"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>Driving other cars if you're under 25
                        </p>
                    </li>
                </ul>
            </div>
        </div>



    </div>


    <!-- //////////////////////////// SEPARATOR ///////////////////////// -->


    <h1 class="heading-2 text-center">IGB NEW sTuff (WIP)</h1>


    <!-- //////////////////////////// SEPARATOR ///////////////////////// -->

    <!-- Homepage -->

    <!-- Section 1 -->
    <div class="bg-igb-dk-grey-500">

        <div class="lg:container lg:mx-auto py-10 ">

            <div class="flex flex-wrap pb-12 pt-4 text-white divide-x">

                <div class="md:flex-1 border-dotted border-igb-dk-grey-300">
                    <div class="text-sm px-5 text-center">
                        <div class="py-0 md:flex-1">
                            <img class="p-5 m-auto" src="https://dummyimage.com/180x180/878787/d1d1d1"
                                alt="placeholder">
                        </div>
                        <h4 class="heading-4 text-xs">BEHAVIOURAL COACHING</h4>
                        <h2 class="heading-2 font-bold text-white mb-3 pl-0 leading-6 pt-0 pb-1">THE FULL PICTURE ON
                            BEHAVIOURAL CHANGE</h2>
                    </div>

                    <div class="px-5 text-sm text-center">
                        <p class="py-2">
                            Early identification and intervention of poor driving behaviour is key to maintaining a
                            competitive loss ratio. Using behavioural psychology and data science techniques refined
                            over a decade, we have created a template for success.
                        </p>

                        <p class="py-4">
                            <a href="#" class="inline-flex tertiary-btn font-bold uppercase">
                                <span>Read more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 button-icon-right"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </p>
                    </div>
                </div>

                <div class="md:flex-1 border-dotted border-igb-dk-grey-300">
                    <div class="text-sm px-5 text-center">
                        <div class="py-0 md:flex-1">
                            <img class="p-5 m-auto" src="https://dummyimage.com/180x180/878787/d1d1d1"
                                alt="placeholder">
                        </div>
                        <h4 class="heading-4 text-xs">DEVICE &amp; DATA COLLECTION</h4>
                        <h2 class="heading-2 font-bold text-white mb-3 pl-0 leading-6 pt-0 pb-1">THE DATA VIEW FROM HERE
                            IS BREATHTAKING</h2>
                    </div>

                    <div class="px-5 text-sm text-center">
                        <p class="py-2">
                            Our uniqueness stems from a combination of running a 100% telematics personal lines
                            insurance broker, global reach as part of the Howdens insurance group with localised
                            expertise’s and a comprehensive understanding of the 80 countries we operate in.
                        </p>

                        <p class="py-4">
                            <a href="#" class="inline-flex tertiary-btn font-bold uppercase">
                                <span>Read more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 button-icon-right"
                                    viewBox="0 0 20 20" fill="currentColor">
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
    </div>


    <!-- Section 2 -->
    <div class="lg:container lg:mx-auto py-10 ">

        <div class="pb-12 pt-4 divide-y">

            <div class="md:w-full border-dotted border-igb-dk-grey-300 pb-16">
                <div class="text-sm px-5 text-center">
                    <div class="py-0 md:flex-1">
                        <img class="p-5 m-auto" src="https://dummyimage.com/180x180/878787/d1d1d1" alt="placeholder">
                    </div>
                    <h2 class="heading-2 font-bold mb-3 pl-0 leading-6 pt-0 pb-1 text-igb-dk-grey-500">GLOBAL REACH
                        LOCAL PARTNERSHIPS</h2>
                </div>

                <div class="px-5 text-sm text-center text-igb-dk-grey-500">
                    <p class="py-2">
                        ingenie Business is now part Howdens Insurance Services Limited, a business that spans 80
                        countries and employs circa 7,000 people worldwide! Acquired by A-Plan Group in November 2020,
                        ingenie business is now part Howdens...
                    </p>

                    <p class="py-4">
                        <a href="#" class="inline-flex primary-btn font-bold uppercase">
                            <span>Read more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 button-icon-right"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </p>
                </div>
            </div>

            <div class="md:w-full border-dotted border-igb-dk-grey-300 pt-16">
                <div class="text-sm px-5 text-center">
                    <div class="py-0 md:flex-1">
                        <img class="p-5 m-auto" src="https://dummyimage.com/180x180/878787/d1d1d1" alt="placeholder">
                    </div>

                    <h2 class="heading-2 font-bold mb-3 pl-0 leading-6 pt-0 pb-1 text-igb-dk-grey-500">BRAIN: AI PROVES
                        ITSELF AGAINST LOSS AND DRIVING BEHAVIOUR</h2>
                </div>

                <div class="px-5 text-sm text-center text-igb-dk-grey-500">
                    <p class="py-2">
                        Born from ingenie’s market leading approach to innovation and the use of psychological theory
                        and behaviour change techniques. BRAIN is an automated, needs based - outcome driven, AI powered
                        program, designed to maximise...
                    </p>

                    <p class="py-4">
                        <a href="#" class="inline-flex primary-btn font-bold uppercase">
                            <span>Read more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" viewBox="0 0 20 20"
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


    <!-- Section 3 -->
    <div class="bg-igb-rich-blue-500">

        <div class="lg:mx-auto">

            <div class="flex flex-wrap text-white">

                <div class="md:flex-1 p-8">
                    <div class="text-sm px-5 text-center">
                        <div class="py-0 md:flex-1">
                            <img class="p-5 m-auto" src="https://dummyimage.com/180x180/878787/d1d1d1"
                                alt="placeholder">
                        </div>
                        <h4 class="heading-4 text-xs">BEHAVIOURAL COACHING</h4>
                        <h2 class="heading-2 font-bold text-white mb-3 pl-0 leading-6 pt-0 pb-1">THE INSIGHT AND THE
                            TECHNOLOGY THAT KEEPS YOU MOBILE</h2>
                    </div>

                    <div class="px-5 text-sm text-center">
                        <p class="py-2">
                            Founded in data science and real world deployments, the ingenie Business telematics AaaS for
                            Android and IOS works as a stand alone product or can be combined with a low cost BLE Beacon
                            for enhanced analytics and robustness…
                        </p>

                        <p class="py-4">
                            <a href="#" class="inline-flex tertiary-btn font-bold uppercase">
                                <span>Read more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </p>
                    </div>
                </div>

                <div class="md:flex-1">
                    <img class="h-full w-full object-cover" src="https://dummyimage.com/400x400/878787/d1d1d1"
                        alt="placeholder">

                </div>


            </div>
        </div>
    </div>

    <!-- END Homepage -->

    <!-- //////////////////////////// SEPARATOR ///////////////////////// -->

    <!-- Heritage -->
    <div class="bg-igb-orange-500">

        <div class="lg:container lg:mx-auto md:py-10 py-3">

            <div class="flex md:pb-12 pt-2 text-white">

                <div class="sm:w-2/5 text-sm px-5 hidden md:block">
                    <h2 class="heading-2 font-bold text-white mb-3 pl-0 text-right">Heritage</h2>
                </div>

                <div class="sm:w-3/5 px-5 text-sm">
                    <p class="py-2">
                        Ingenie Business is a telematics service provider that designs, develops, and implements
                        telematics technologies for a range of clients including insurers, brokers, financial
                        institutions, and OEM’s both in the UK and overseas.
                    </p>
                    <p class="py-2">
                        Established in 2011, ingenie business leverages its deep domain insurance expertise from running
                        one of the first 100% telematics personal lines insurance brokers in the UK with over a decade
                        of high frequency data. This unique mix has created market leading data science capability that
                        informs its behavioral analytics, coaching and intervention programs.
                    </p>

                    <p class="py-4">
                        <a href="/global-footprint" class="inline-flex primary-btn border-white">
                            <span>NEXT: Global footprint</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 btn-icon-right" viewBox="0 0 20 20"
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

    <div class="container mx-auto md:py-10 pb-3 max-w-4xl">

        <div class="md:pb-12 pt-4 text-sm py-5">

            <div class="flex flex-wrap my-5">
                <img src="/wp-content/uploads/2021/09/ingenie-business.jpg" alt="ingenie-business" width="496"
                    height="110" class="md:w-1/3" />
                <img src="/wp-content/uploads/2021/09/aplan-group.jpg" alt="aplan-group" width="496" height="110"
                    class="md:w-1/3" />
                <img src="/wp-content/uploads/2021/09/howden-insurance.jpg" alt="howden-insurance" width="496"
                    height="110" class="md:w-1/3" />

            </div>

            <p class="py-2 font-bold px-2 md:px-0">
                Acquired by A-Plan Group in November 2020, ingenie Business is now part Howdens Insurance Services
                Limited, a £5 Billion insurance business that spans 80 countries and employs circa 7,000 people
                worldwide. Within Group is Dual, the worlds largest international MGA and Lloyds of London’s largest
                international coverholder.
            </p>

            <div class="my-5 px-2 md:px-0">
                <img src="/wp-content/uploads/2021/09/img-thorncroft@2x-1024x477.png" alt="thorncroft-manor"
                    width="1024" height="477" class="h-full w-full object-cover" />

                <div class="inline-flex text-igb-li-grey-600 text-xs my-4">
                    <svg id="icon-key-people" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-left"
                        viewBox="0 0 40 40">
                        <rect id="Rectangle_1174" data-name="Rectangle 1174" width="40" height="40" fill="#fff" />
                        <g id="Group_964" data-name="Group 964" transform="translate(-1562.412 -436.269)">
                            <path id="Path_1456" data-name="Path 1456"
                                d="M1601.082,454.964l-2.362.013a16.493,16.493,0,0,0-15.429-15.265l-.013-2.363a1.085,1.085,0,0,0-2.171.011l.012,2.362a16.493,16.493,0,0,0-15.265,15.429l-2.363.013a1.085,1.085,0,0,0,.006,2.171h.006l2.362-.013a16.493,16.493,0,0,0,15.429,15.265l.013,2.363a1.085,1.085,0,0,0,1.085,1.079h.006a1.085,1.085,0,0,0,1.08-1.091l-.013-2.362a16.493,16.493,0,0,0,15.265-15.429l2.363-.013a1.085,1.085,0,0,0-.012-2.171ZM1583.454,470.4l-.013-2.4a1.085,1.085,0,0,0-1.085-1.08h-.006a1.086,1.086,0,0,0-1.08,1.091l.013,2.4a14.316,14.316,0,0,1-13.238-13.1l1.823-.01a1.085,1.085,0,0,0-.006-2.171h-.006l-1.823.01a14.316,14.316,0,0,1,13.1-13.238l.012,2.293a1.085,1.085,0,0,0,1.085,1.08h.006a1.085,1.085,0,0,0,1.08-1.091l-.012-2.293a14.316,14.316,0,0,1,13.238,13.1l-1.932.01a1.085,1.085,0,0,0,.006,2.171h.006l1.932-.01A14.316,14.316,0,0,1,1583.454,470.4Z"
                                transform="translate(0 0)" fill="currentColor" />
                            <path id="Path_1457" data-name="Path 1457"
                                d="M1652.587,507.994a4.356,4.356,0,1,0-4.356-4.356A4.361,4.361,0,0,0,1652.587,507.994Zm0-6.542a2.185,2.185,0,1,1-2.186,2.185A2.188,2.188,0,0,1,1652.587,501.453Z"
                                transform="translate(-70.295 -51.614)" fill="currentColor" />
                            <path id="Path_1458" data-name="Path 1458"
                                d="M1642.63,549.128h-7.305a3.57,3.57,0,0,0-3.709,3.4v3.459a1.085,1.085,0,1,0,2.171,0V552.53a1.413,1.413,0,0,1,1.539-1.231h7.305a1.413,1.413,0,0,1,1.538,1.231v3.459a1.085,1.085,0,0,0,2.171,0V552.53A3.57,3.57,0,0,0,1642.63,549.128Z"
                                transform="translate(-56.685 -92.443)" fill="currentColor" />
                        </g>
                    </svg>
                    <span class="">Thorncroft Manor, headquarters of ingenie Business</span>
                </div>
            </div>

            <p class="py-2 px-2 md:px-0">
                Being part of the group provides access to new capital for investment, the ability to leverage group
                assets, footprint, products, technology and skills, and enables ingenie Business to deliver localised
                support globally.
            </p>
            <p class="py-2 px-2 md:px-0">
                ingenie Business changes behaviours and helps it clients understand drivers better, it translates
                telematics data into real adoption and engagement to influence how drivers think, feel and act, this
                enables our clients to create smart policies that improve customer retention, reduce risk, and
                ultimately make roads safer.
            </p>

            <div class="my-5 px-2 md:px-0">
                <img src="/wp-content/uploads/2021/09/img-one-creechurch-place@2x-1024x473.png"
                    alt="one-creechurch-place" width="1024" height="473" class="h-full w-full object-cover" />

                <div class="inline-flex text-igb-li-grey-600 text-xs my-4">
                    <svg id="icon-key-people" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-left"
                        viewBox="0 0 40 40">
                        <rect id="Rectangle_1174" data-name="Rectangle 1174" width="40" height="40" fill="#fff" />
                        <g id="Group_964" data-name="Group 964" transform="translate(-1562.412 -436.269)">
                            <path id="Path_1456" data-name="Path 1456"
                                d="M1601.082,454.964l-2.362.013a16.493,16.493,0,0,0-15.429-15.265l-.013-2.363a1.085,1.085,0,0,0-2.171.011l.012,2.362a16.493,16.493,0,0,0-15.265,15.429l-2.363.013a1.085,1.085,0,0,0,.006,2.171h.006l2.362-.013a16.493,16.493,0,0,0,15.429,15.265l.013,2.363a1.085,1.085,0,0,0,1.085,1.079h.006a1.085,1.085,0,0,0,1.08-1.091l-.013-2.362a16.493,16.493,0,0,0,15.265-15.429l2.363-.013a1.085,1.085,0,0,0-.012-2.171ZM1583.454,470.4l-.013-2.4a1.085,1.085,0,0,0-1.085-1.08h-.006a1.086,1.086,0,0,0-1.08,1.091l.013,2.4a14.316,14.316,0,0,1-13.238-13.1l1.823-.01a1.085,1.085,0,0,0-.006-2.171h-.006l-1.823.01a14.316,14.316,0,0,1,13.1-13.238l.012,2.293a1.085,1.085,0,0,0,1.085,1.08h.006a1.085,1.085,0,0,0,1.08-1.091l-.012-2.293a14.316,14.316,0,0,1,13.238,13.1l-1.932.01a1.085,1.085,0,0,0,.006,2.171h.006l1.932-.01A14.316,14.316,0,0,1,1583.454,470.4Z"
                                transform="translate(0 0)" fill="currentColor" />
                            <path id="Path_1457" data-name="Path 1457"
                                d="M1652.587,507.994a4.356,4.356,0,1,0-4.356-4.356A4.361,4.361,0,0,0,1652.587,507.994Zm0-6.542a2.185,2.185,0,1,1-2.186,2.185A2.188,2.188,0,0,1,1652.587,501.453Z"
                                transform="translate(-70.295 -51.614)" fill="currentColor" />
                            <path id="Path_1458" data-name="Path 1458"
                                d="M1642.63,549.128h-7.305a3.57,3.57,0,0,0-3.709,3.4v3.459a1.085,1.085,0,1,0,2.171,0V552.53a1.413,1.413,0,0,1,1.539-1.231h7.305a1.413,1.413,0,0,1,1.538,1.231v3.459a1.085,1.085,0,0,0,2.171,0V552.53A3.57,3.57,0,0,0,1642.63,549.128Z"
                                transform="translate(-56.685 -92.443)" fill="currentColor" />
                        </g>
                    </svg>
                    <span class="">Howden Insurance Offices, One Creechurch Place, EC3 London, UK</span>
                </div>
            </div>

        </div>
    </div>
    <!-- END Heritage -->


    <!-- //////////////////////////// SEPARATOR ///////////////////////// -->

    <!-- Global footprint -->
    <div class="bg-igb-orange-500">
        <div class="lg:container lg:mx-auto md:py-10 py-3">
            <div class="flex md:pb-12 pt-4 text-white">

                <div class="sm:w-2/5 text-sm px-5 hidden md:block">
                    <h2 class="heading-2 font-bold text-white mb-3 pl-0 text-right">Global footprint</h2>
                </div>

                <div class="sm:w-3/5 px-5 text-sm">
                    <p class="py-2">
                        ingenie Business is now part Howdens Insurance Services Limited, a business that spans
                        80 countries and employs circa 7,000 people worldwide!
                    </p>
                    <p class="py-2">
                        Acquired by A-Plan Group in November 2020, ingenie Business is now part Howdens
                        Insurance Services Limited a £5 Billion insurance business that spans 80 countries and
                        employs circa 7,000 people worldwide.
                    </p>

                    <p class="py-4">
                        <a href="/key-people" class="inline-flex primary-btn border-white">
                            <span>NEXT: Key people</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 button-icon-right"
                                viewBox="0 0 20 20" fill="currentColor">
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
    <div class="container mx-auto md:py-10 pb-3 max-w-4xl">


        <div class="pb-12 pt-4 text-sm">

            <div class="flex flex-wrap my-3">
                <div class="w-full md:w-1/4 p-1">
                    <img src="/wp-content/uploads/2021/09/logo-dual.png" alt="logo-dual" width="260" height="205"
                        class="h-full w-full object-cover" />
                </div>
                <p class="md:w-3/4 py-2 px-2">
                    Within group is DUAL, the worlds largest international MGA and Lloyds of London’s largest
                    international coverholder. Being part of the group provides access to new capital for
                    investment, the ability to leverage group assets, footprint, products, technology and
                    skills, and enables ingenie business to deliver localised support globally.
                </p>
            </div>

            <h3 class="heading-3 text-igb-dk-grey-500 px-2 md:px-0">Elasticity and scale</h3>

            <p class="py-2 px-2 md:px-0 font-bold">
                Ingenie Business has worked across the globe for over a decade, supporting a wide base of
                customers such as; insurers, brokers and OEMs. In order to support these customers, Ingenie
                Business designed and built its own elastically scalable cloud-based platform, to give them the
                ability to launch in country specific instances that accommodate localised data privacy
                legislation.
            </p>

            <div class="grid gap-12 grid-cols-1 md:grid-cols-2 pt-5">
                <div class="py-0">
                    <img class="w-full object-cover" src="https://dummyimage.com/500x500/878787/d1d1d1"
                        alt="placeholder">
                    <div class="inline-flex text-igb-li-grey-600 text-xs my-4">
                        <svg id="icon-key-people" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-left"
                            viewBox="0 0 40 40">
                            <rect id="Rectangle_1174" data-name="Rectangle 1174" width="40" height="40" fill="#fff" />
                            <g id="Group_964" data-name="Group 964" transform="translate(-1562.412 -436.269)">
                                <path id="Path_1456" data-name="Path 1456"
                                    d="M1601.082,454.964l-2.362.013a16.493,16.493,0,0,0-15.429-15.265l-.013-2.363a1.085,1.085,0,0,0-2.171.011l.012,2.362a16.493,16.493,0,0,0-15.265,15.429l-2.363.013a1.085,1.085,0,0,0,.006,2.171h.006l2.362-.013a16.493,16.493,0,0,0,15.429,15.265l.013,2.363a1.085,1.085,0,0,0,1.085,1.079h.006a1.085,1.085,0,0,0,1.08-1.091l-.013-2.362a16.493,16.493,0,0,0,15.265-15.429l2.363-.013a1.085,1.085,0,0,0-.012-2.171ZM1583.454,470.4l-.013-2.4a1.085,1.085,0,0,0-1.085-1.08h-.006a1.086,1.086,0,0,0-1.08,1.091l.013,2.4a14.316,14.316,0,0,1-13.238-13.1l1.823-.01a1.085,1.085,0,0,0-.006-2.171h-.006l-1.823.01a14.316,14.316,0,0,1,13.1-13.238l.012,2.293a1.085,1.085,0,0,0,1.085,1.08h.006a1.085,1.085,0,0,0,1.08-1.091l-.012-2.293a14.316,14.316,0,0,1,13.238,13.1l-1.932.01a1.085,1.085,0,0,0,.006,2.171h.006l1.932-.01A14.316,14.316,0,0,1,1583.454,470.4Z"
                                    transform="translate(0 0)" fill="currentColor" />
                                <path id="Path_1457" data-name="Path 1457"
                                    d="M1652.587,507.994a4.356,4.356,0,1,0-4.356-4.356A4.361,4.361,0,0,0,1652.587,507.994Zm0-6.542a2.185,2.185,0,1,1-2.186,2.185A2.188,2.188,0,0,1,1652.587,501.453Z"
                                    transform="translate(-70.295 -51.614)" fill="currentColor" />
                                <path id="Path_1458" data-name="Path 1458"
                                    d="M1642.63,549.128h-7.305a3.57,3.57,0,0,0-3.709,3.4v3.459a1.085,1.085,0,1,0,2.171,0V552.53a1.413,1.413,0,0,1,1.539-1.231h7.305a1.413,1.413,0,0,1,1.538,1.231v3.459a1.085,1.085,0,0,0,2.171,0V552.53A3.57,3.57,0,0,0,1642.63,549.128Z"
                                    transform="translate(-56.685 -92.443)" fill="currentColor" />
                            </g>
                        </svg>
                        <div class="">Caption</div>
                    </div>
                </div>
                <div class="py-0">
                    <img class="w-full object-cover" src="https://dummyimage.com/500x500/878787/d1d1d1"
                        alt="placeholder">
                    <div class="inline-flex text-igb-li-grey-600 text-xs my-4">
                        <svg id="icon-key-people" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-left"
                            viewBox="0 0 40 40">
                            <rect id="Rectangle_1174" data-name="Rectangle 1174" width="40" height="40" fill="#fff" />
                            <g id="Group_964" data-name="Group 964" transform="translate(-1562.412 -436.269)">
                                <path id="Path_1456" data-name="Path 1456"
                                    d="M1601.082,454.964l-2.362.013a16.493,16.493,0,0,0-15.429-15.265l-.013-2.363a1.085,1.085,0,0,0-2.171.011l.012,2.362a16.493,16.493,0,0,0-15.265,15.429l-2.363.013a1.085,1.085,0,0,0,.006,2.171h.006l2.362-.013a16.493,16.493,0,0,0,15.429,15.265l.013,2.363a1.085,1.085,0,0,0,1.085,1.079h.006a1.085,1.085,0,0,0,1.08-1.091l-.013-2.362a16.493,16.493,0,0,0,15.265-15.429l2.363-.013a1.085,1.085,0,0,0-.012-2.171ZM1583.454,470.4l-.013-2.4a1.085,1.085,0,0,0-1.085-1.08h-.006a1.086,1.086,0,0,0-1.08,1.091l.013,2.4a14.316,14.316,0,0,1-13.238-13.1l1.823-.01a1.085,1.085,0,0,0-.006-2.171h-.006l-1.823.01a14.316,14.316,0,0,1,13.1-13.238l.012,2.293a1.085,1.085,0,0,0,1.085,1.08h.006a1.085,1.085,0,0,0,1.08-1.091l-.012-2.293a14.316,14.316,0,0,1,13.238,13.1l-1.932.01a1.085,1.085,0,0,0,.006,2.171h.006l1.932-.01A14.316,14.316,0,0,1,1583.454,470.4Z"
                                    transform="translate(0 0)" fill="currentColor" />
                                <path id="Path_1457" data-name="Path 1457"
                                    d="M1652.587,507.994a4.356,4.356,0,1,0-4.356-4.356A4.361,4.361,0,0,0,1652.587,507.994Zm0-6.542a2.185,2.185,0,1,1-2.186,2.185A2.188,2.188,0,0,1,1652.587,501.453Z"
                                    transform="translate(-70.295 -51.614)" fill="currentColor" />
                                <path id="Path_1458" data-name="Path 1458"
                                    d="M1642.63,549.128h-7.305a3.57,3.57,0,0,0-3.709,3.4v3.459a1.085,1.085,0,1,0,2.171,0V552.53a1.413,1.413,0,0,1,1.539-1.231h7.305a1.413,1.413,0,0,1,1.538,1.231v3.459a1.085,1.085,0,0,0,2.171,0V552.53A3.57,3.57,0,0,0,1642.63,549.128Z"
                                    transform="translate(-56.685 -92.443)" fill="currentColor" />
                            </g>
                        </svg>
                        <div class="">Caption</div>
                    </div>
                </div>

            </div>

            <h3 class="heading-3 text-igb-dk-grey-500 px-2 md:px-0">Greater resources</h3>



            <p class="py-2 px-2 md:px-0">
                As well as technology and telematics solutions, ingenie Business also has access to investment
                and capacity from across Howden Group and in country expertise and resource in over 80
                countries!
            </p>
            <p class="py-2 px-2 md:px-0">
                Our local, on-the-ground experts around the world form a network of shared skills and knowledge.
                Laws, cultures, businesses, and markets vary, but the connection between our people means that,
                wherever our clients want to do business, we can bring the expertise they need.
            </p>
        </div>
    </div>
    <!-- END global footprint -->


    <!-- //////////////////////////// SEPARATOR ///////////////////////// -->

    <!-- Corporate and social responsibility -->
    <div class="bg-igb-orange-500">

        <div class="lg:container lg:mx-auto md:py-10 py-3">

            <div class="flex md:pb-12 pt-4 text-white">

                <div class="sm:w-2/5 text-sm px-5 hidden md:block">
                    <h2 class="heading-2 font-bold text-white mb-3 pl-0 text-right">Corporate &amp; Social
                        responsibility</h2>
                </div>

                <div class="sm:w-3/5 px-5 text-sm">
                    <p class="py-2">
                        When a business puts its people first they feel happier, more fulfilled, and more empowered.
                        That’s not just good for them – it’s good for our clients, too.
                    </p>
                    <p class="py-2">
                        That’s why for us, People First is not a set of policies or guidelines: it is at the heart of
                        everything we do.
                    </p>

                    <p class="py-4"></p>
                </div>

            </div>
        </div>
    </div>


    <div class="container mx-auto md:py-10 pb-3 max-w-4xl">

        <div class="md:pb-12 pt-4 text-sm px-5">

            <div class="w-full">
                <h2 class="heading-2 font-bold text-igb-orange-500 my-3 pl-0">Accomplishing the 3 pillars of CSR</h2>
            </div>

            <p class="py-2 font-bold">
                As a Group, we are committed to making a positive impact on the world around us. We do this through
                fundraising and volunteering, our commitment to protect the environment, and giving back through our
                charitable Foundation.
            </p>

            <p class="py-2">
                <a href="https://www.howdengroupholdings.com/our-approach/corporate-social-responsibility"
                    class="primary-link inline-flex ">

                    <svg id="icon-weblink" xmlns="http://www.w3.org/2000/svg" class="btn-icon-left h-4 w-4"
                        viewBox="0 0 34 34">
                        <g id="Ellipse_242" data-name="Ellipse 242" fill="#fff" stroke="currentColor"
                            stroke-width="2.5">
                            <circle cx="17" cy="17" r="17" stroke="none" />
                            <circle cx="17" cy="17" r="15.75" fill="none" />
                        </g>
                        <path id="Union_27" data-name="Union 27"
                            d="M1.688,19c-3.47-3.187-.515-6.934-.515-6.934L5.85,7.364s2.205-2.02,4.565-1.221,2.06.851,2.06.851a1.747,1.747,0,0,1,0,2.1,1.821,1.821,0,0,1-2.06.34,1.8,1.8,0,0,0-2.252,0c-1.021.947-4.434,4.517-4.434,4.517s-1.48,1.657,0,2.855a2.123,2.123,0,0,0,2.791,0l1.948-2.033a5.937,5.937,0,0,0,3.629.788c.08.01-3.376,3.442-3.376,3.442A6.1,6.1,0,0,1,5.053,20.42,4.88,4.88,0,0,1,1.688,19Zm8.49-4.822c-2.346-.84-2.045-.886-2.045-.886a1.747,1.747,0,0,1,.037-2.1,1.821,1.821,0,0,1,2.066-.3,1.8,1.8,0,0,0,2.252.039C13.525,10,17,6.491,17,6.491s1.508-1.631.05-2.855a2.123,2.123,0,0,0-2.79-.049l-1.983,2a5.936,5.936,0,0,0-3.614-.851C8.583,4.724,12.1,1.353,12.1,1.353s3.618-3.124,7.032.123.394,6.942.394,6.942L14.764,13.04a5.776,5.776,0,0,1-3.377,1.349A3.565,3.565,0,0,1,10.178,14.182Z"
                            transform="translate(6.622 6.79)" fill="currentColor" />
                    </svg>
                    Howden Corporate Social Responsibility report

                </a>
            </p>

            <p class="py-2">
                As a group we are keen to invest in the future - in young talent, new entrepreneurs, and the communities
                in which we live and work. That is why the three core pillars of our global CSR policy are Education,
                Entrepreneurship and the Environment.
            </p>
            <p class="py-2">
                All of our CSR work supports these three areas, and we encourage our employees to get involved in a way
                that suits them. Whatever they choose to do, the important thing is that they give back in some way and
                make a positive impact.
            </p>

            <div class="my-5">
                <img src="/wp-content/uploads/2021/09/img-corporate-social-responsibility-1024x537.png"
                    alt="corporate-social-responsibility" width="1024" height="537"
                    class="h-full w-full object-cover" />
            </div>

            <div class="grid gap-12 grid-cols-1 md:grid-cols-2 pt-5 my-10">
                <div class="py-0">
                    <div class="text-igb-li-grey-600 text-xs">
                        <h3 class="heading-3 text-igb-dk-grey-500 px-2 md:px-0 mt-0">Progress towards sustainability
                        </h3>
                        <p class="py-2">
                            Howden Group is on a journey to become a truly sustainable business. To this end, we became
                            a Signatory to the
                            <a href="#" class="inline-flex primary-link-sm text-xs">
                                UN Global Compact
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-right" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a> – the largest network of sustainability-minded organisations worldwide. Along with more
                            than 10,000 other businesses globally, we are promising to take responsibility for our
                            impact and to work in a way that supports and benefits society. This includes measuring our
                            business against the
                            <a href="#" class="inline-flex primary-link-sm text-xs">
                                UN’s Ten Guiding Principles
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-right" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a> and reporting annually on our progress. View our first Communication on Progress as
                            part of our commitment to the 10 principles of the UN Global Compact.
                        <p class="py-2">
                    </div>
                </div>

                <div class="py-0">
                    <img src="/wp-content/uploads/2021/09/img-united-nations.png" alt="united-nations" width="570"
                        height="549" class="w-full object-cover" />
                    <div class="inline-flex text-igb-li-grey-600 text-xs my-4">
                        <svg id="icon-key-people" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-left"
                            viewBox="0 0 40 40">
                            <rect id="Rectangle_1174" data-name="Rectangle 1174" width="40" height="40" fill="#fff" />
                            <g id="Group_964" data-name="Group 964" transform="translate(-1562.412 -436.269)">
                                <path id="Path_1456" data-name="Path 1456"
                                    d="M1601.082,454.964l-2.362.013a16.493,16.493,0,0,0-15.429-15.265l-.013-2.363a1.085,1.085,0,0,0-2.171.011l.012,2.362a16.493,16.493,0,0,0-15.265,15.429l-2.363.013a1.085,1.085,0,0,0,.006,2.171h.006l2.362-.013a16.493,16.493,0,0,0,15.429,15.265l.013,2.363a1.085,1.085,0,0,0,1.085,1.079h.006a1.085,1.085,0,0,0,1.08-1.091l-.013-2.362a16.493,16.493,0,0,0,15.265-15.429l2.363-.013a1.085,1.085,0,0,0-.012-2.171ZM1583.454,470.4l-.013-2.4a1.085,1.085,0,0,0-1.085-1.08h-.006a1.086,1.086,0,0,0-1.08,1.091l.013,2.4a14.316,14.316,0,0,1-13.238-13.1l1.823-.01a1.085,1.085,0,0,0-.006-2.171h-.006l-1.823.01a14.316,14.316,0,0,1,13.1-13.238l.012,2.293a1.085,1.085,0,0,0,1.085,1.08h.006a1.085,1.085,0,0,0,1.08-1.091l-.012-2.293a14.316,14.316,0,0,1,13.238,13.1l-1.932.01a1.085,1.085,0,0,0,.006,2.171h.006l1.932-.01A14.316,14.316,0,0,1,1583.454,470.4Z"
                                    transform="translate(0 0)" fill="currentColor" />
                                <path id="Path_1457" data-name="Path 1457"
                                    d="M1652.587,507.994a4.356,4.356,0,1,0-4.356-4.356A4.361,4.361,0,0,0,1652.587,507.994Zm0-6.542a2.185,2.185,0,1,1-2.186,2.185A2.188,2.188,0,0,1,1652.587,501.453Z"
                                    transform="translate(-70.295 -51.614)" fill="currentColor" />
                                <path id="Path_1458" data-name="Path 1458"
                                    d="M1642.63,549.128h-7.305a3.57,3.57,0,0,0-3.709,3.4v3.459a1.085,1.085,0,1,0,2.171,0V552.53a1.413,1.413,0,0,1,1.539-1.231h7.305a1.413,1.413,0,0,1,1.538,1.231v3.459a1.085,1.085,0,0,0,2.171,0V552.53A3.57,3.57,0,0,0,1642.63,549.128Z"
                                    transform="translate(-56.685 -92.443)" fill="currentColor" />
                            </g>
                        </svg>
                        <div class="">UN building, NYC</div>
                    </div>
                </div>

            </div>

            <div class="my-5">
                <img src="/wp-content/uploads/2021/09/img-csr-charity-partners-1024x541.png" alt="charity-partners"
                    width="1024" height="541" class="h-full w-full object-cover" />
            </div>

            <p class="py-2">
                We are also members of ClimateWise – a network of insurance organisations using industry expertise to
                respond to the climate crisis. The network is facilitated by the University of Cambridge’s
                <a href="#" class="inline-flex primary-link-sm text-xs">
                    Institute for Sustainability Leadership (CISL)
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-right" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>, which develops leadership and solutions for a sustainable economy. As part of our membership,
                we’ve agreed to annually report the ways we’re responding to and tackling climate change within our
                day-to-day business.
            </p>

        </div>
    </div>
    <!-- END Corporate and social responsibility -->


    <!-- //////////////////////////// SEPARATOR ///////////////////////// -->


    <!-- Case study ingenie -->
    <div class="bg-igb-orange-500">

        <div class="lg:container lg:mx-auto md:py-10 py-3">

            <div class="flex flex-wrap md:pb-5 pt-4 text-white">

                <div class="sm:w-2/5 text-sm px-5 mt-1">
                    <h3 class="heading-2 font-bold text-white mb-3 pl-0 text-right text-sm">Case Study</h3>
                    <h2 class="heading-2 font-bold text-white mb-3 pl-0 text-right">The telematics brand founded in
                        fact, not fiction</h2>
                </div>

                <div class="sm:w-3/5 px-5 text-sm">
                    <p class="py-2">
                        ingenie Business advanced from its retail telematics brand - ingenie, brought to the UK market
                        almost a decade ago and specialising in affordable car insurance for 17 to 25-year-olds.
                    </p>

                    <p class="py-4">

                        <a href="/case-studies" class="inline-flex primary-btn-sm text-sm uppercase">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-left" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Back</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto md:py-10 pb-3 max-w-4xl">
        <div class="md:pb-12 pt-4 text-sm px-5">

            <p class="py-2">
                ingenie was the driving force behind ingenie Business, acting as a fundamental test environment for us
                to trial, develop and refine our technologies and products.
            </p>

            <p class="py-2">
                Access to our own telematics brand within the insurance market has given us the expertise to process
                real time unfiltered data, manage live customer policies and deliver industry leading loss ratios to
                insurers.
            </p>

            <div class="flex flex-wrap my-5">
                <div class="md:w-1/3 p-2">
                    <img src="/wp-content/uploads/2019/09/driving-data-icon.jpg" alt="driving-data-icon" width="140"
                        height="140" class="w-2/5 mx-auto" />
                    <h4 class="heading-4 text-igb-orange-500 font-bold text-center">Over 1.5 billion miles of driving
                        data</h4>
                </div>

                <div class="md:w-1/3 p-2">
                    <img src="/wp-content/uploads/2019/09/journey-analysed-icon.jpg" alt="journey-analysed-icon"
                        width="140" height="140" class="w-2/5 mx-auto" />
                    <h4 class="heading-4 text-igb-orange-500 font-bold text-center">Over 300 million journeys analysed
                    </h4>
                </div>

                <div class="md:w-1/3 p-2">
                    <img src="/wp-content/uploads/2019/09/driver-engagement-icon.jpg" alt="driver-engagement-icon"
                        width="140" height="140" class="w-2/5 mx-auto" />
                    <h4 class="heading-4 text-igb-orange-500 font-bold text-center">10 years driver engagement
                        experience</h4>
                </div>

            </div>


            <p class="py-4 text-center">

                <a href="/contact-us" class="inline-flex primary-btn-sm text-sm uppercase">
                    <span>Get in touch</span>
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

    <!-- Section 2 -->
    <section class="mx-auto pb-28" style="
                                  background-image: url(/wp-content/uploads/2019/09/smarter-drivers-1024x459.png); 
                                  background-size: cover; 
                                  background-position: center">

        <div class="container mx-auto max-w-4xl">
            <div class="mx-auto pt-10">
                <h2 class="heading-2 font-bold text-white text-center">Creating better, smarter drivers</h2>
            </div>

            <div class="mx-auto mt-1 mb-28 text-white px-2 text-center text-sm">
                <p class="py-2 leading-4">
                    ingenie was set-up to overcome the huge problem of young people crashing far more than any other age
                    groups. As the first insurance broker to set up a Driver Behaviour Unit, ingenie were able to adapt
                    psychological models for positive behaviour change, creating better, smarter drivers.</p>
                <p class="py-2 leading-4">
                    By using data-driven feedback cycles based on how an individual actually drives, it gives good
                    drivers more control over their insurance price, unlike traditional insurance that rates on
                    collected risk. ingenie use discount incentives throughout the year via their app, to motivate
                    drivers into staying safe on the roads. Outside of their app they support their customers via email,
                    text, phone and social media, to help them achieve the best feedback and maximum discount.</p>
                <h4 class="heading-4 py-2 font-bold pb-10">
                    Safer driving, means less crashing.
                </h4>
            </div>
        </div>
    </section>

    <!-- Section 3 -->
    <div class="container mx-auto md:py-10 pb-3 max-w-4xl">
        <div class="pt-4 text-sm px-5">

            <h3 class="heading-3 text-igb-orange-500">Higher Engagement With Predictable Results</h3>

            <p class="py-2">
                ingenie is built on powerful technology but it’s how they use this to engage with drivers that counts.
                Combining accurate data and predictive algorithms with human interaction, resulting in an effective
                model proven to change attitudes.
            </p>

            <div class="flex flex-wrap my-5">
                <div class="w-full md:w-1/3 p-2">
                    <div
                        class="border-4 border-igb-orange-500 rounded-full h-48 p-5 w-48 m-auto transition duration-400 ease-in-out text-igb-orange-500 hover:text-white hover:bg-igb-orange-500">
                        <h4 class="heading-4 font-bold text-center"><span class="text-2xl">95%</span> OF INGENIE
                            CUSTOMERS CHECK THEIR DRIVING FEEDBACK</h4>
                    </div>
                </div>

                <div class="w-full md:w-1/3 p-2">
                    <div
                        class="border-4 border-igb-orange-500 rounded-full h-48 p-5 w-48 m-auto transition duration-400 ease-in-out text-igb-orange-500 hover:text-white hover:bg-igb-orange-500">
                        <h4 class="heading-4 font-bold text-center"><span class="text-2xl">94%</span> OF INGENIE
                            CUSTOMERS WANT TO IMPROVE FOLLOWING A CALL</h4>
                    </div>
                </div>

                <div class="w-full md:w-1/3 p-2">
                    <div
                        class="border-4 border-igb-orange-500 rounded-full h-48 p-5 w-48 m-auto transition duration-400 ease-in-out text-igb-orange-500 hover:text-white hover:bg-igb-orange-500">
                        <h4 class="heading-4 font-bold text-center"><span class="text-2xl">90%</span> OF INGENIE
                            CUSTOMERS HAVE IMPROVED AFTER 20 DAYS</h4>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Section 4 -->
    <div class="container mx-auto md:py-10 pb-3 max-w-4xl">
        <div class="md:py-5 pt-4 text-sm px-5 md:border border-igb-rich-blue-200 flex flex-wrap justify-end relative">
            <div class="mx-auto md:absolute -left-10 top-10">
                <img src="/wp-content/uploads/2019/09/selim.jpg" alt="selim" width="250" height="250"
                    class="h-36 w-36 object-cover" />
            </div>
            <div class="md:w-4/5">
                <p class="py-2">
                    "The goal has always been much bigger for ingenie: it’s not just about insurance cover and
                    commercial benefits - it’s about saving lives.
                </p>

                <p class="py-2">
                    With over 500,000 new drivers aged 17-24 on the road each year*, telematics insurance is more
                    important than ever in encouraging safe driving. ingenie’s driver behaviour intervention team, our
                    system of scoring and feedback, and advances in innovative smartphone technology have proven to
                    produce safer, better drivers and reduce crash rates. Sharing this knowledge from our extensive data
                    collection means we can offer solutions to others in the insurance market that will ultimately help
                    save lives on the UK roads and worldwide."
                </p>

                <h4 class="py-2">
                    <span class="font-bold">Selim Cavanagh</span>, Chief Executive Officer, ingenie.
                </h4>

                <div class="text-igb-li-grey-600 text-xs my-4 text-right">
                    *www.gov.uk/government/statistical-data-sets/driving-test-statistics-drt
                </div>
            </div>
        </div>
    </div>

    <!-- Section 5 -->
    <div class="container mx-auto md:py-10 pb-3 max-w-4xl">
        <div class="md:pb-12 pt-4 text-sm px-5">

            <h3 class="heading-3 text-igb-orange-500">ingenie in numbers</h3>

            <div class="flex flex-wrap my-5">

                <div class="w-full md:w-1/4 p-2">
                    <div class="border-0 bg-igb-rich-blue-50 rounded-full h-48 p-5 w-48 m-auto flex items-center">
                        <h4 class="heading-4 text-igb-orange-500 font-bold text-center text-sm">AN INDIVIDUAL DRIVER
                            MORE THAN <span class="text-2xl ">HALVES</span><br /> THEIR RISK OF CRASHING OVER THEIR
                            FIRST YEAR</h4>
                    </div>
                </div>

                <div class="w-full md:w-1/4 p-2">
                    <div class="border-0 bg-igb-rich-blue-50 rounded-full h-48 p-5 w-48 m-auto flex items-center">
                        <h4 class="heading-4 text-igb-orange-500 font-bold text-center text-sm"><span
                                class="text-2xl ">70%</span> OF DRIVERS GET A DISCOUNT FOR GOOD DRIVING</h4>
                    </div>
                </div>

                <div class="w-full md:w-1/4 p-2">
                    <div class="border-0 bg-igb-rich-blue-50 rounded-full h-48 p-5 w-48 m-auto flex items-center">
                        <h4 class="heading-4 text-igb-orange-500 font-bold text-center text-sm">INGENIE DRIVERS HAVE
                            EARNED MORE THAN <span class="text-2xl ">£10 MILLION</span> IN DISCOUNT</h4>
                    </div>
                </div>

                <div class="w-full md:w-1/4 p-2">
                    <div class="border-0 bg-igb-rich-blue-50 rounded-full h-48 p-5 w-48 m-auto flex items-center">
                        <h4 class="heading-4 text-igb-orange-500 font-bold text-center text-sm"><span
                                class="text-2xl ">80,000</span> PEOPLE VISIT INGENIE’S YOUNG DRIVER’S GUIDE FOR DRIVING
                            ADVICE</h4>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- END Case study ingenie -->

    <!-- Case study endsligh -->
    <div class="bg-igb-orange-500">
        <div class="lg:container lg:mx-auto md:py-10 py-3">

            <div class="flex flex-wrap md:pb-5 pt-4 text-white">

                <div class="sm:w-2/5 text-sm px-5 mt-1">
                    <h3 class="heading-2 font-bold text-white mb-3 pl-0 text-right text-sm">Case Study</h3>
                    <h2 class="heading-2 font-bold text-white mb-3 pl-0 text-right">INTRODUCING 'ENDSLEIGH LOOP'</h2>
                </div>

                <div class="sm:w-3/5 px-5 text-sm">
                    <p class="py-2">
                        ingenie Business have launched a new partnership with education sector specialist for the
                        provision of an end-to-end telematics, behavioural coaching, data analytics, and claims
                        management solution for their university and young driver market.
                    </p>

                    <p class="py-4">

                        <a href="/case-studies" class="inline-flex primary-btn-sm text-sm uppercase">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-left" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Back</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto md:py-10 pb-3 max-w-4xl">
        <div class="md:pb-12 pt-4 text-sm px-5">

            <h3 class="heading-3 text-igb-orange-500">Endsleigh partner with telematics solutions provider, ingenie
                Business to launch 'Endsleigh Loop'</h3>


            <p class="py-2">
                Endsleigh have signed a contract with ingenie Business for the provision of an end-to-end telematics,
                behavioural coaching, data analytics, policy administration, and claims management solution builtupon
                ingenie’s decade of experience as a market leader in insurance and technology.
            </p>

            <div class="my-5">
                <img src="/wp-content/uploads/2021/09/img-endsleigh-loop-1024x537.png" alt="endsleigh loop app"
                    width="1024" height="537" class="h-full w-full object-cover" />
            </div>

            <p class="py-2">
                ingenie Business’s ability to rapidly and cost effectively deliver a white labelled solution
                encompassing several bespoke elements via ingenie’s in-house data science and engineering capability,
                will enable Endsleigh Insurance Services to launch their “Endsleigh Loop” product in July 2020.
            </p>
            <p class="py-2">
                The product will be targeted at Endsleigh’s core market of young drivers and University students.
                ingenie Business’s in depth data analytics based on its decade of insurance knowledge and telematics
                data processing which utilises the latest machine learning and neural network data science, will enable
                Endsleigh to better understand risk, influence driver behaviour, reduce claims, and price more
                effectively, whilst providing an enhanced customer proposition that rewards positive driving behaviours.
            </p>

            <h3 class="heading-3 text-igb-dk-grey-500 px-2 md:px-0">
                Endsleigh chooses a new road
            </h3>

            <p class="py-2">
                Addressing the rapidly changing nature of the insurance landscape, the current environmental climate,
                and macro social shifts, the product will benefit from the latest self-fit telematics devices and the
                use of mileage-based pricing. Endsleigh identified ingenie Business as their preferred partner due to
                their focus on driver engagement, behavioural change and driver safety. ingenie Business has partnered
                with a number of Blue Chip companies such as Dutch roadside assistance organisation ANWB, major motor
                manufacturer Vauxhall, and their own retail telematics insurance brand, ingenie Retail. During 2019,
                ingenie Business grew in excess of 220% with continued growth being achieved in 2020.
            </p>
            <p class="py-2">
                A spokesperson for Endsleigh Insurance Services said: 'We are very excited to launch an innovative and
                flexible Telematics solution, Endsleigh Loop, for our young drivers. Endsleigh Loop is a new, engaging
                and easy-to-use Telematics solution that, thanks to the collaboration of Endsleigh and ingenie Business,
                young drivers will want to use and that will ultimately improve their driving behaviours'.
            </p>

            <p class="py-4 text-center">

                <a href="/contact-us" class="inline-flex primary-btn-sm text-sm uppercase">
                    <span>Get in touch</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 button-icon-right" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </p>


            <h3 class="heading-3 text-igb-dk-grey-500 px-2 md:px-0">
                A further look into what the ingenie, Endsleigh partnership provides:
            </h3>

            <ul class="standard-list list-none">
                <li class="flex">
                    <span class="w-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 button-icon-left text-igb-orange-500"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg></span>
                    <span class="w-11/12">Provision of ingenie’s cloud based microservices Multi Platform</span>
                </li>
                <li class="flex">
                    <span class="w-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 button-icon-left text-igb-orange-500"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg></span>
                    <span class="w-11/12">Delivery of a customised iOS/Android feedback app with engagement, coaching,
                        gamification, and rewards capability</span>
                </li>
                <li class="inline-flex">
                    <span class="w-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 button-icon-left text-igb-orange-500"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg></span>
                    <span class="w-11/12">Creation of bespoke algorithms based on ingenie’s decade of in-depth data
                        analytics of customer driving </span>

                </li>
                <li class="inline-flex">
                    <span class="w-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 button-icon-left text-igb-orange-500"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg></span>
                    <span class="w-11/12">All telematics hardware and installation services </span>
                </li>
                <li class="inline-flex">
                    <span class="w-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 button-icon-left text-igb-orange-500"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg></span>
                    <span class="w-11/12">Third Party Administration services via ingenie’s partner Europa Group Limited
                        Claims Management via ingenie’s partner: WINNs Solicitors</span>
                </li>

            </ul>

            <p class="py-6"><span class="font-bold">Jonathan Law, Managing Director of ingenie Business</span> said ‘We
                are delighted to have partnered with Endsleigh, it is testament to our continued investment in insurance
                technology, our focus on driver safety, and further solidifies our position as a driving force in the
                growing connected insurance ecosphere.’ ingenie’s respected position in the telematics industry comes
                from a number of high-profile wins. They have a highly predictive analytics capability which has been
                built on 10 years’ worth of data, collected from customer acquisition, onboarding, in life management,
                claims, retention, and renewals. The most important focus of the business is to keep young drivers safe
                on the roads - playing to Endsleigh’s strengths with University students where they specialise. With a
                similarity in their cultures and attitudes around insuring young drivers and ingenie’s offer of
                extensive services for the new product, the partnership is an ideal fit with exciting further
                developments to come.
            </p>

            <div class="text-igb-li-grey-600 text-xs my-4">
                Notes to editors 1 Screenshots of Endsleigh Loop app, available on iOS and Android
            </div>

            <div class="flex flex-wrap">


                <div class="md:w-1/2">
                    <p class="py-1">For more information on ingenie Business please contact: </p>
                    <p class="font-bold py-1">Jonathan Law </p>
                    <p> <a href="mailto:Jon.Law@ingenie.com" target="_blank" rel="noopener"
                            class="block primary-link inline-flex text-xs">

                            <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-left h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>

                            Jon.Law@ingenie.com
                        </a></p>
                    <p> <a href="//www.ingeniebusiness.com" target="_blank" rel="noopener"
                            class="primary-link inline-flex text-xs">
                            <svg id="icon-weblink" xmlns="http://www.w3.org/2000/svg" class="btn-icon-left h-4 w-4"
                                viewBox="0 0 34 34">
                                <g id="Ellipse_242" data-name="Ellipse 242" fill="#fff" stroke="currentColor"
                                    stroke-width="2.5">
                                    <circle cx="17" cy="17" r="17" stroke="none" />
                                    <circle cx="17" cy="17" r="15.75" fill="none" />
                                </g>
                                <path id="Union_27" data-name="Union 27"
                                    d="M1.688,19c-3.47-3.187-.515-6.934-.515-6.934L5.85,7.364s2.205-2.02,4.565-1.221,2.06.851,2.06.851a1.747,1.747,0,0,1,0,2.1,1.821,1.821,0,0,1-2.06.34,1.8,1.8,0,0,0-2.252,0c-1.021.947-4.434,4.517-4.434,4.517s-1.48,1.657,0,2.855a2.123,2.123,0,0,0,2.791,0l1.948-2.033a5.937,5.937,0,0,0,3.629.788c.08.01-3.376,3.442-3.376,3.442A6.1,6.1,0,0,1,5.053,20.42,4.88,4.88,0,0,1,1.688,19Zm8.49-4.822c-2.346-.84-2.045-.886-2.045-.886a1.747,1.747,0,0,1,.037-2.1,1.821,1.821,0,0,1,2.066-.3,1.8,1.8,0,0,0,2.252.039C13.525,10,17,6.491,17,6.491s1.508-1.631.05-2.855a2.123,2.123,0,0,0-2.79-.049l-1.983,2a5.936,5.936,0,0,0-3.614-.851C8.583,4.724,12.1,1.353,12.1,1.353s3.618-3.124,7.032.123.394,6.942.394,6.942L14.764,13.04a5.776,5.776,0,0,1-3.377,1.349A3.565,3.565,0,0,1,10.178,14.182Z"
                                    transform="translate(6.622 6.79)" fill="currentColor" />
                            </svg>
                            www.ingeniebusiness.com
                        </a></p>
                </div>

                <div class="md:w-1/2">
                    <p class="py-1">For more information on Endsleigh please contact:</p>
                    <p class="font-bold py-1">Adam Molloy </p>
                    <p> <a href="mailto:Adam.Molloy@endsleigh.co.uk" target="_blank" rel="noopener"
                            class="block primary-link inline-flex text-xs">

                            <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-left h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>

                            Adam.Molloy@endsleigh.co.uk
                        </a></p>
                    <p> <a href="//www.endsleigh.co.uk" target="_blank" rel="noopener"
                            class="primary-link inline-flex text-xs">
                            <svg id="icon-weblink" xmlns="http://www.w3.org/2000/svg" class="btn-icon-left h-4 w-4"
                                viewBox="0 0 34 34">
                                <g id="Ellipse_242" data-name="Ellipse 242" fill="#fff" stroke="currentColor"
                                    stroke-width="2.5">
                                    <circle cx="17" cy="17" r="17" stroke="none" />
                                    <circle cx="17" cy="17" r="15.75" fill="none" />
                                </g>
                                <path id="Union_27" data-name="Union 27"
                                    d="M1.688,19c-3.47-3.187-.515-6.934-.515-6.934L5.85,7.364s2.205-2.02,4.565-1.221,2.06.851,2.06.851a1.747,1.747,0,0,1,0,2.1,1.821,1.821,0,0,1-2.06.34,1.8,1.8,0,0,0-2.252,0c-1.021.947-4.434,4.517-4.434,4.517s-1.48,1.657,0,2.855a2.123,2.123,0,0,0,2.791,0l1.948-2.033a5.937,5.937,0,0,0,3.629.788c.08.01-3.376,3.442-3.376,3.442A6.1,6.1,0,0,1,5.053,20.42,4.88,4.88,0,0,1,1.688,19Zm8.49-4.822c-2.346-.84-2.045-.886-2.045-.886a1.747,1.747,0,0,1,.037-2.1,1.821,1.821,0,0,1,2.066-.3,1.8,1.8,0,0,0,2.252.039C13.525,10,17,6.491,17,6.491s1.508-1.631.05-2.855a2.123,2.123,0,0,0-2.79-.049l-1.983,2a5.936,5.936,0,0,0-3.614-.851C8.583,4.724,12.1,1.353,12.1,1.353s3.618-3.124,7.032.123.394,6.942.394,6.942L14.764,13.04a5.776,5.776,0,0,1-3.377,1.349A3.565,3.565,0,0,1,10.178,14.182Z"
                                    transform="translate(6.622 6.79)" fill="currentColor" />
                            </svg>
                            www.endsleigh.co.uk
                        </a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Case study endsligh -->

</div>





<?php get_footer(); ?>
