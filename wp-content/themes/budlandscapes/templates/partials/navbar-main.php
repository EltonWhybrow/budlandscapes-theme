<nav class="navbar-main hidden lg:flex justify-evenly">
    <div class="flex text-sm">
        <ul id="menu-main-menu" class="text-center text-igb-li-grey-500 space-x-2">
            <li class="menu-item m-0 block sm:inline-block sm:mt-0">
                <div class="text-xs">
                    <a href="/our-mission" aria-current="page">About us</a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 inline mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="sub-menu py-3">
                    <div class="flex max-w-4xl mx-auto">
                        <div class="flex-1">
                            <h3 class="heading-3 pl-10 mt-6 mb-1">About us</h3>

                            <?php // $walker = new Menu_With_Description; 
                            ?>

                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main-about-us-menu',
                                    'container_class' => 'text-sm p-0 px-10 flex',
                                    'menu_class' => '',
                                    'add_li_class'  => 'm-0 block sm:inline-block sm:mt-0 pr-6'
                                    // 'walker' => $walker
                                )
                            ); ?>
                        </div>
                    </div>
                </div>

            </li>
            <li class="menu-item m-0 block sm:inline-block sm:mt-0">
                <div class="text-xs">
                    <a href="/platform/">Capabilities </a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 inline mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="sub-menu py-3">
                    <div class="flex max-w-4xl mx-auto">
                        <div class="flex-1">
                            <h3 class="heading-3 pl-10 mt-6 mb-1">Capabilities</h3>
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main-core-capabilities-menu',
                                    'container_class' => 'text-sm p-0 px-10 flex',
                                    'menu_class' => '',
                                    'add_li_class'  => 'm-0 block sm:inline-block sm:mt-0 pr-6'
                                )
                            ); ?>
                        </div>

                        <!-- <div class="flex-none relative">
                          //  <?php
                                // \budlandscapes2022Theme\View::render('IgAdvertiseView', [
                                //   'location' => 'learner-desktop-menu',
                                // 'twClasses' => '',
                                //]); 
                                ?>
                        </div> -->
                    </div>
                </div>

            </li>
            <li class="menu-item m-0 block sm:inline-block sm:mt-0">
                <div class="text-xs">
                    <a href="/in-house-device-algorithms/">Expertise</a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 inline mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>

                <div class="sub-menu py-3">
                    <div class="flex max-w-4xl mx-auto">
                        <div class="flex-1">
                            <h3 class="heading-3 pl-10 mt-6 mb-1">Expertise</h3>
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main-expertise-menu',
                                    'container_class' => 'text-sm p-0 px-10 flex',
                                    'menu_class' => 'relative',
                                    'add_li_class'  => 'm-0 block sm:inline-block sm:mt-0 pr-6'
                                )
                            ); ?>
                        </div>

                    </div>
                </div>

            </li>
            <li class="menu-item m-0 block sm:inline-block sm:mt-0">
                <div class="text-xs">
                    <a href="/case-studies/">News</a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 inline mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>

                <div class="sub-menu py-3">
                    <div class="flex max-w-4xl mx-auto">
                        <div class="flex-1">
                            <h3 class="heading-3 pl-10 mt-6 mb-1">News</h3>
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main-news-menu',
                                    'container_class' => 'text-sm p-0 px-10 flex',
                                    'menu_class' => '',
                                    'add_li_class'  => 'm-0 block sm:inline-block sm:mt-0 pr-6'
                                )
                            ); ?>
                        </div>

                    </div>
                </div>

            </li>
            <li class="menu-item m-0 block sm:inline-block sm:mt-0">
                <div class="text-xs">
                    <a href="/contact-us/">Get in touch</a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 inline mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>

                <div class="sub-menu py-3">
                    <div class="flex max-w-4xl mx-auto">
                        <div class="flex-1">
                            <h3 class="heading-3 pl-10 mt-6 mb-1">Get in touch</h3>
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main-get-in-touch-menu',
                                    'container_class' => 'text-sm p-0 px-10 flex',
                                    'menu_class' => '',
                                    'add_li_class'  => 'm-0 block sm:inline-block sm:mt-0 pr-6'
                                )
                            ); ?>
                        </div>

                    </div>
                </div>

            </li>
        </ul>
        <!-- <span class="px-2 pt-4 pb-2 hidden lg:inline-block menu-item m-0 sm:mt-0">
            <div class="flex-initial">
                <?php //get_template_part('templates/partials/search/search-form', 'igb'); 
                ?>
            </div>
        </span> -->

    </div>


</nav>
