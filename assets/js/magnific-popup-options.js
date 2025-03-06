jQuery(document).ready(function ($) {
  // Your code here
    // MagnificPopup
    var magnifPopup = function() {
      $('.popup-youtube').magnificPopup({
          type: 'iframe',
          mainClass: 'mfp-fade',
          removalDelay: 160,
          preloader: false,
          fixedContentPos: false,
      });
    };
    
    // Call the functions 
    magnifPopup();
});