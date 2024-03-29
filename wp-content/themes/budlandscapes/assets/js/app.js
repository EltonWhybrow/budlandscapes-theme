// you can import modules from the theme lib or even from
// NPM packages if they support it…
import ExampleComponent1 from "./components/ExampleComponent1";
import MobileHamburgerMenu from "./components/MobileHamburgerMenu";
// import DeviceCheck from "./components/DeviceCheck";
import Faqs from "./components/Faqs";
import MainMenu from "./components/MainMenu";
import Accordian from "./components/Accordian";
import Cta from "./components/CtaBanner";
import ViewCode from "./components/ViewCode";
import Modal from "./components/Modal";
import BackToTop from "./components/BackToTop";
import FlexSlider from "./components/jquery.flexslider-min";
import FlexSliderSetUp from "./components/FlexSliderInit";
// import HighlightSearch from "./components/jquery.mark.min.js";

// you can also require modules if they support it…
const ExampleModule2 = require('./components/example-2');

// Some convenient tools to get you started…
import ReplaceObfuscatedEmailAddresses from "./components/ReplaceObfuscatedEmailAddresses";
import AnimateOnPageLinks from "./components/AnimateOnPageLinks";


// Initialise our components on jQuery.ready…
jQuery(function ($) {
  // ExampleComponent1.init();
  // ExampleModule2.init();
  // ReplaceObfuscatedEmailAddresses.init();
  AnimateOnPageLinks.init();
  // HighlightSearch.init();
  FlexSlider.init();
  FlexSliderSetUp.init();
  MobileHamburgerMenu.init();
  // DeviceCheck.init();
  Faqs.init();
  MainMenu.init();
  Accordian.init();
  Cta.init();
  ViewCode.init();
  Modal.init();
  BackToTop.init();
});