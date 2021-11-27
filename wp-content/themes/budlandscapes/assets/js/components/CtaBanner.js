const $ = window.jQuery;
const $window = window.$window || $(window);

const Cta = {

  init() {
    // ingenie simple CTA banner

    // Set cookie
    function setCookie(cname, cvalue, exdays) {
      const d = new Date();
      d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
      let expires = "expires=" + d.toUTCString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    // Get cookie
    function getCookie(cname) {
      let name = cname + "=";
      let decodedCookie = decodeURIComponent(document.cookie);
      let ca = decodedCookie.split(';');
      for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }


    // reset>??????
    // $(function () {
    //   getCookie('cta');
    //   console.log("ready!");
    //   $("#cta-banner").show();
    // });

    $(function () {
      let bannerState = getCookie("cta_banner");
      console.log('>>> BannerSTATE', bannerState);
      if (bannerState == '1') {
        $("#cta-banner").hide();
      } else {
        $("#cta-banner").show();
      }
      // // HIDE FOR NOW
      // $("#cta-banner").hide();
    });



    $(".cta-btn").bind("click", function (e) {
      e.preventDefault();
      var $ctaBanner = $("#cta-banner");
      console.log('clicked', $ctaBanner);
      // 7 day rest from banner
      setCookie('cta_banner', '1', 7);

      $ctaBanner.slideUp(300);
    });

  }

};

export default Cta;