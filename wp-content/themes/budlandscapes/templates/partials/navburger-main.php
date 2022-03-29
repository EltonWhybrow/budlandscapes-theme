<!-- Burger menu -->
<nav class="navburger-main">
    <div class="text-right p-2 inline-block">
        <img src="/resources/img/pages/logos/bud_logo_2022.svg" alt="Bud Landscapes" width="60px" height="auto">
    </div>

    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'burger-menu',
            'container_class' => 'text-sm sm:flex-grow',
            'menu_class' => '',
            'add_li_class'  => 'flex-col text-bl-li-grey-100 block hover:bg-bl-dk-grey-900 hover:text-white'
        )
    ); ?>

</nav>