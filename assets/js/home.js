/**
 * Scroll to the section of the given id.
 *
 * @param {string} to
 * @param {string} behavior
 * @param {string} block
 */
function scrollTo(to, behavior, block) {
  const scroll = document.getElementById('scroll-' + to);
  scroll.onclick = _ => document.getElementById(to).scrollIntoView({ behavior: behavior, block: block });
}

scrollTo("presentation", "smooth", "start");
scrollTo("timeline", "smooth", "start");
scrollTo("skills", "smooth", "start");
scrollTo("realisations", "smooth", "start");
scrollTo("title", "smooth", "start");

$(window).scroll(function () {
  //set scroll position in session storage
  sessionStorage.scrollPos = $(window).scrollTop();
});
var init = function () {
   //return scroll position in session storage
   $(window).scrollTop(sessionStorage.scrollPos || 0)
};
window.onload = init;