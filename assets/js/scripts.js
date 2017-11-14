'use strict';

/*Handle some scroll events*/
jQuery( window ).scroll( function() {
  var scrollTop = jQuery( window ).scrollTop();
  var absoluteTop = 0;

  if ( scrollTop <= absoluteTop ) {
    jQuery( '#masthead' ).removeClass( 'scroll' );
  } else {
    jQuery( '#masthead' ).addClass( 'scroll' );
  }

}).scroll();
