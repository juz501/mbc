'use strict';
var addClassToScroll = require( '../assets/js/addClassToScroll' );
global.jQuery = require( 'jquery' );

test( 'testScrollNotAtTop', () => {
  var scrollTop = 100;
  var absoluteTop = 0;
  expect( addClassToScroll( '#masthead', 'scroll', scrollTop, absoluteTop ) ).toBeTruthy(); // eslint-disable-line max-len
});

test( 'testScrollAtTop', () => {
  var scrollTop = 0;
  var absoluteTop = 0;
  expect( addClassToScroll( '#masthead', 'scroll', scrollTop, absoluteTop ) ).toBeFalsy(); // eslint-disable-line max-len
});
