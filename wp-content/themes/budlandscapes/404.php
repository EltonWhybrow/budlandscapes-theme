<?php get_header(); ?>

<!-- Mobile Header -->

<div class="sm:block md:hidden relative">
    <img class="h-full w-full object-cover" src="/resources/img/pages/404/404-mobile.jpg" alt="Sorry, page not found">
    <!-- <h2 class="text-xl bg-teal-500 py-1 text-white px-5">Sorry, page not found</h2> -->
</div>


<!-- Main Header -->

<div class="py-0 hidden md:block">
    <img class="h-full w-full object-cover" src=/resources/img/pages/404/404.jpg" alt="Sorry, page not found">
    <!-- <h2 class="text-sm text-center bg-teal-500 p-2 text-white">Sorry, page not found</h2> -->
</div>

<!-- wysiwyg main content -->
<div class="wysiwyg-content bg-white">

    <section class="w-full bg-gray-700">
        <div class="flex max-w-5xl mx-auto pt-5 md:pt-10 pb-12 space-x-5">

            <div class="px-5 text-base">
                <h4 class="pt-6 font-semibold">You found the weeds!</h4>
                <h2 class="text-2xl uppercase">SORRY! <span class="bg-orange-500 px-1 text-white transform inline-block -skew-y-2">PAGE NOT FOUND</span></h2>
                <p class="py-2"> This is somewhat embarrassing, isn’t it? Go back to homepage or try again.
                </p>
                <a class="relative inline-flex tertiary-btn pr-6 space-x-2" href="/contact">
                    Homepage
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-3 right-1 inline-block w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <a class="relative primary-link p-2 text-sm hover:underline" href="/about">
                    Leave us feedback
                </a>
            </div>
        </div>
    </section>

</div>


<?php get_footer(); ?>