/*global jQuery*/
jQuery(document).ready(function() {
   var navHeight = jQuery('.navbar').outerHeight();
  jQuery('main').css('margin-top', navHeight + 'px');
  jQuery('#tribe-events-pg-template').css('margin-top', navHeight + 'px');
  jQuery(window).scroll(function() {
    if (jQuery(document).scrollTop() > 50) {
      var navHeight = jQuery('.navbar').outerHeight();
      jQuery('.navLogo').hide('blind', '', "fast");
      new function() {
        jQuery('main').css('margin-top', navHeight + 50 + 'px');
        jQuery('#tribe-events-pg-template').css('margin-top', navHeight + 100 + 'px');
      }

    }
    else {
      jQuery('.navLogo').show('blind', '', "fast", new function() {
        var navHeight = jQuery('.navbar').outerHeight();
        
        jQuery('main').css('margin-top', navHeight + 50 + 'px');
        jQuery('#tribe-events-pg-template').css('margin-top', navHeight + 100 + 'px');
      });
    }
  });
 
});

