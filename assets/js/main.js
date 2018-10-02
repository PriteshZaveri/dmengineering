jQuery(document).ready(function($) {
  // Smooth scroll for the menu and links with .scrollto classes
  $(".smoothscroll").on("click", function(e) {
    e.preventDefault();
    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      if (target.length) {
        $("html, body").animate(
          {
            scrollTop: target.offset().top - 48
          },
          1500,
          "easeInOutExpo"
        );
      }
    }
  });

  $(".navbar-collapse a").on("click", function() {
    $(".navbar-collapse.collapse").removeClass("in");
  });

  $(document).ready(function() {
    $(".owl-carousel").owlCarousel();
  });
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    dots: true,
    navText: [
      "<i class='fa fa-chevron-left'></i>",
      "<i class='fa fa-chevron-right'></i>"
    ],
    responsive: {
      0: {
        items: 1
      }
    }
  });
});
