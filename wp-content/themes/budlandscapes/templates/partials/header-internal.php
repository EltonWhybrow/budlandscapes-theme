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

     <a href="/" class="inline-block pl-5 md:pl-7 py-3 md:p-3">
         <img src="/resources/img/pages/logos/bud_logo_2022.svg" class="main-logo" alt="Bud Landscapes">
     </a>

     <div class="flex-none px-2 py-0 mx-1 text-right hidden md:block">

         <?php get_template_part('templates/partials/navbar', 'main'); ?>

     </div>
     <div class="flex-none p-7 pr-3 text-right text-sm md:text-base">

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