<!-- Burger menu -->
<nav class="navburger-main">
    <div class="text-right p-2 inline-block">
        <img src="/resources/img/pages/icons/ig-business-icon.png" alt="ingenie Business" width="50px" height="auto">
    </div>

    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'burger-menu',
            'container_class' => 'text-sm sm:flex-grow',
            'menu_class' => '',
            'add_li_class'  => 'flex-col text-igb-li-grey-100 block hover:bg-igb-dk-grey-900 hover:text-white'
        )
    ); ?>

    <!-- <ul>
        <li>
            <a href="#">Young driver insurance</a>
            <ul class="sub-menu">
                <li><a href="/young-driver-insurance">- Find out more</a></li>
                <li><a href="/young-driver-insurance/how-it-works">- How it works</a></li>
                <li><a href="/young-driver-insurance/fitting-the-box">- Fitting the box</a></li>
                <li><a href="/young-driver-insurance/mobile-app">- The app</a></li>
                <li><a href="/young-driver-insurance/whats-covered">- Whats covered</a></li>
                <li><a href="/young-driver-insurance/faqs">- FAQs</a></li>
                <li><a href="/young-driver-insurance/policy-information">- Policy information</a></li>
    <li><a href="/young-driver-insurance/learner-car-insurance">- Black box for Learners</a></li>
    </ul>
    </li>
    <li>
        <a href="#">Learner driver insurance</a>
        <ul class="sub-menu">
            <li><a href="/learner-driver-insurance">- Find out more</a></li>
            <li><a href="/learner-driver-insurance/how-it-works">- How it works</a></li>
            <li><a href="/learner-driver-insurance/mobile-app">- The app</a></li>
            <li><a href="/learner-driver-insurance/whats-covered">- What’s covered</a></li>
            <li><a href="/learner-driver-insurance/faqs">- FAQs</a></li>
            <li><a href="/learner-driver-insurance/policy-information">- Policy information</a></li>
            <li><a href="/learner-driver-insurance/extend-your-cover">- Extend your cover</a></li>
        </ul>
    </li>

    <li><a href="/myaccount">My account</a></li>
    <li><a href="/retrieve-a-quote-type" target="_blank">Retrieve a quote</a></li>

    <li>
        <a href="#">FAQs</a>
        <ul class="sub-menu">
            <li><a href="/young-driver-insurance/faqs">Young Driver</a></li>
            <li><a href="/learner-driver-insurance/faqs">Learner Driver</a></li>
        </ul>
    </li>

    <li><a href="/contact-us">Contact us</a></li>
    <li><a href="/make-a-claim">Make a claim</a></li>
    <li><a href="/about">About ingenie</a></li>
    <li><a href="/young-drivers-guide">Young driver’s guide</a></li>
    <li><a href="/parents-guide">Parent’s guide</a></li>
    <li><a href="/blog">Blog</a></li>

    </ul> -->

    <!-- <div class="ingenie-icon-sidebar pulse"></div> -->


    <!-- <div class="flex-1 px-3 py-0 mx-1 text-right">
        <?php //get_template_part('templates/partials/search/search-form', 'igb'); 
        ?>
    </div> -->

</nav>
