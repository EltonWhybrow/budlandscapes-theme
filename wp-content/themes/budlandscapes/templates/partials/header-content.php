 <div class="xl:container xl:mx-auto flex justify-evenly">
     <div class="flex-none p-5 text-left lg:hidden absolute left-0">

         <span class="inline-block">
             <?php get_template_part('templates/partials/navburger-main'); ?>
             <button type="button" id="menuToggle">
                 <span></span>
                 <span></span>
                 <span></span>
             </button>
         </span>
     </div>

     <a href="/" class="inline-block pl-5 md:pl-7 py-3 md:pb-4 md:pt-2 w-48">
         <img src="/resources/img/pages/logos/bud_logo_2022.svg" class="main-logo" alt="Bud Landscapes">
     </a>

     <div class="flex-none pr-5 pl-0 py-0 mx-1 text-right hidden md:block">
         <?php get_template_part('templates/partials/navbar', 'main'); ?>
     </div>

     <div class="flex-none pt-16 pb-2 pr-3 text-right text-sm md:text-base">
         <p>
             <a class='relative primary-btn text-lg pr-10' href='tel:<?php echo do_shortcode("[bl_mobile_number]"); ?>'>
                 <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-1 right-1 inline-block w-6 h-6 m-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                 </svg>
                 <?php echo do_shortcode("[bl_mobile_number]"); ?></a>
         </p>
         <!-- <p>
             <a class='primary-link text-sm' href='mailto:<?php echo do_shortcode("[bl_main_email]"); ?>'><?php echo do_shortcode("[bl_main_email]"); ?>
             </a>
         </p> -->

         <!-- <h4 class="text-white">
             Call for a <span class="bg-orange-500 p-1 text-white uppercase transform inline-block -skew-y-1">HASSLE FREE</span> quote
         </h4> -->

         <h5 class="text-gray-400 pt-3 leading-5">
             Call for a <span class="uppercase">HASSLE-FREE</span> quote <br />or <a class='primary-link text-sm' href='#request-callback'>request a callback
             </a>
         </h5>



     </div>
 </div>