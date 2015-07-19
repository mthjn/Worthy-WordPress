/*
Theme Name: worthy
Description: Based on free HTML template Worthy of http://www.htmlcoder.me
Author: mthjn
Author URI: http://github.com/mthjn
*/

/**
This file: on front page dynamically onload and onresize
           aligns equal the heights of headings and paragraphs
*
*
@see footer, condition to load if home
@link https://github.com/mthjn/All-Frontend-Shit
*
*
*/


function topResize( passedclass ) {

  var alldivs = document.getElementsByClassName( passedclass);
  var viewportwidth = window.innerWidth;
  var x;
  var i;
  var array_heights = new Array;

  for (i = 0; i < alldivs.length; i++) {
         divh = alldivs[i].offsetHeight;
         array_heights.push(divh);
     }

     var largest = Math.max.apply(Math, array_heights);
     var smallest = Math.min.apply(Math, array_heights);
     var h = largest + "px";
     var hs = smallest + "px";

  for (x = 0; x < alldivs.length; x++) {
    if ( alldivs[x].offsetHeight < largest  ) {
      alldivs[x].style.height = h;
      if ( viewportwidth < 1100 ) {
        var date = new Date();
        date.setTime(date.getTime()+(5*60*1000));
        document.cookie = "r=1; expires="+date.toGMTString();
      }
    }//largest
  }//for

}//  f

// on resize only
// if was resized and now is large screen, restore auto height, then run equalizing function again
function topResizeOnresize() {

  var alldivs = document.getElementsByClassName('a1');
  var viewportwidth = window.innerWidth;
  var x;

  if (document.cookie.indexOf("r=1") > 0) {
    if ( viewportwidth > 1200 ) {
          for (x = 0; x < alldivs.length; x++) {
              alldivs[x].style.height = "auto";
          }
          // repeat init resize:
          topResize();
      }
  }



}// f a1resize onresize
