$(document).ready(function () {
  $(".testingFade").hide().fadeIn(1000);
  $(".scrollspy").scrollSpy();
  $(".button-collapse").sideNav();

  document.addEventListener("DOMContentLoaded", function () {
    var elems = document.querySelectorAll(".carousel");
    var instances = M.Carousel.init(elems, options);
  });

  $(".carousel").carousel();

  //   $(".slider").slider({
  //     height: 270,
  //     indicators: true,
  //     interval: 6000,
  //   });

  // Or with jQuery
});
