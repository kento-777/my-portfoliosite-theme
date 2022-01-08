jQuery(function ($) {
  $("body").fadeIn(1000);
  $(".hamburger-menu").click(function () {
    $(".active-page, .header-logo--a, .hamburger-logo").toggleClass(
      "burgerActive"
    );
    $(".bar-top, .bar-bottom").toggleClass("barColorActive");
    $(".bar-top").toggleClass("barTopActive");
    $(".bar-bottom").toggleClass("barBottomActive");
    $(".page-menu").toggleClass("menuActive");
    $(".twitter--top").toggleClass("twitterActive");
    $(".instagram--top").toggleClass("instaActive");
    $(".mail--top").toggleClass("mailActive");
  });

//top画面のscroll
  var wrap = document.getElementById("top-main"),
    elements = document.querySelectorAll("#top-main section"),
    elRect = [],
    elTop = [],
    count = 0,
    wheelFlag = false;

  function getElTop() {
    for (var i = 0; i < elements.length; i++) {
      elRect.push(elements[i].getBoundingClientRect());
    }
    for (var i = 0; i < elRect.length; i++) {
      elTop.push(elRect[i].top + window.scrollY);
    }
  }
  getElTop();

  window.addEventListener("resize", function () {
    elRect = [];
    elTop = [];
    getElTop();
    window.scrollTo(0, elTop[count]);
  });

  wrap.addEventListener("wheel", function (e) {
    e.preventDefault();
    if (!wheelFlag) {
      wheelFlag = true;
      if (e.deltaY > 0) {
        if (count >= elements.length - 1) {
          count = elements.length - 1;
        } else {
          count++;
        }
      } else if (e.deltaY < 0) {
        if (count <= 0) {
          count = 0;
        } else {
          count--;
        }
      }
      setTimeout(function () {
        wheelFlag = false;
      }, 800);
      setTimeout(function () {
        window.scrollTo({
          top: elTop[count],
          behavior: "smooth",
        });
      }, 20);
    }
  });
});
