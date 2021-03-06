(function () {
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
  scrollTo("contact", "smooth", "start");

  /**
   * Calculate the age in relation to the birthday in param.
   *
   * @param {string} birthdayParam
   * @returns The age
   */
  function calculateAge(birthdayParam) {
    let today = new Date();
    const birthday = new Date(birthdayParam);
    let difference = today.getFullYear() - birthday.getFullYear();

    // eslint-disable-next-line
    if (today.getMonth() - birthday.getMonth() < 0 || today.getDate() - birthday.getDate() < 0 && today.getMonth() === birthday.getMonth()) {
      return difference - 1;
    } else {
      return difference;
    }
  }

  document.getElementById('age').innerText = calculateAge('1997-06-17');

  $(window).on("scroll", function () {
    //set scroll position in session storage
    sessionStorage.scrollPos = $(window).scrollTop();
  });
  var init = function () {
    //return scroll position in session storage
    $(window).scrollTop(sessionStorage.scrollPos || 0)
  };
  window.onload = init;


})();