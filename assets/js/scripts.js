'use strict';

var addClassToScroll = require( './addClassToScroll' );

/*Handle some scroll events*/
jQuery( window ).scroll( function() {
  var scrollTop = jQuery( window ).scrollTop();
  var selector = '#masthead';
  var scrollclass = 'scroll';

  addClassToScroll( selector, scrollclass, scrollTop );
}).scroll();
