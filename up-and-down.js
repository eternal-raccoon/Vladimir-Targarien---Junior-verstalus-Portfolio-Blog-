(function() {
  'use strict';

  var upDownBtn = document.querySelector('.up-and-down');
  var check;

  function trackScroll() {
    var scrolled = window.pageYOffset;
    var coords = document.documentElement.clientHeight;

    if (scrolled > coords) {
      upDownBtn.classList.add('up-and-down-show');
      upDownBtn.innerHTML = '&uarr;';
      upDownBtn.setAttribute('title', 'Наверх');
      check = false;
    }
    if (scrolled === 0) {
      upDownBtn.innerHTML = '&darr;';
      upDownBtn.setAttribute('title', 'Вниз');
      check = true;
    }
  }

  function backToTop() {
    upDownBtn.classList.add('up-and-down-disabled');
    if (!check) {
      (function goTop() {

        if (window.pageYOffset !== 0) {
          window.scrollBy(0, -174);
          setTimeout(goTop, 0);
        } else {
          upDownBtn.classList.remove('up-and-down-disabled');
        }

      })();
      return;

    } else if (check) {
      (function goBottom() {
        var match = Math.ceil(window.pageYOffset + document.documentElement.clientHeight);

        if (match != document.documentElement.scrollHeight) {
          window.scrollBy(0, 174);
          setTimeout(goBottom, 0);
        } else {
          upDownBtn.classList.remove('up-and-down-disabled');
        }

      })();
      return;
    }

  }

  window.addEventListener('scroll', trackScroll);
  upDownBtn.addEventListener('click', backToTop);
})();