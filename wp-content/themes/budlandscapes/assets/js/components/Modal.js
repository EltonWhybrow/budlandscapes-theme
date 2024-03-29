const $ = window.jQuery;
const $window = window.$window || $(window);

const Modal = {

  init() {
    // simple modal
    $(".modal-trigger").click(function () {
      $(".modal").removeClass('scale-100');
      $("#modal-overlay").addClass('hidden');
      var $this = $(this);
      var $dataId = $this.attr("data-id");
      $('#' + $dataId).addClass('scale-100');
      $("#modal-overlay").removeClass('hidden');
    });


    $(".close-modal").bind("click", function () {
      $(".modal").removeClass('scale-100');
      $("#modal-overlay").addClass('hidden');
    });


  }
};

export default Modal;