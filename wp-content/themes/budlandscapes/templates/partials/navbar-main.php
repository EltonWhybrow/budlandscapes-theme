<nav class="navbar-main hidden lg:flex justify-evenly">
<?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main-home-menu',
                                    'container_class' => 'text-sm p-0 px-10 flex',
                                    'menu_class' => 'relative',
                                    'add_li_class'  => 'm-0 block sm:inline-block sm:mt-0 rounded-b'
                                )
                            ); ?>
                            </nav>
