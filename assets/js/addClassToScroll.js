'use strict';

const absoluteTopDefault = 0;

/**
 * Adds (and removes) class to selector if not at top of page
 *
 * @param  {string} selector - JQuery selector to attach class to
 * @param  {string} scrollclass - Class name to attach/detach
 * @param  {number} scrollTop - Current window scrollTop
 * @param  {number} absoluteTop - Top of page
 * @return {Void} - No return
 */
module.exports = function addClassToScroll(
  selector, scrollclass, scrollTop, absoluteTop = absoluteTopDefault ) {
  if ( scrollTop <= absoluteTop ) {
    jQuery( selector ).removeClass( scrollclass );
    return false;
  } else {
    jQuery( selector ).addClass( scrollclass );
    return true;
  }
};
