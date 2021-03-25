// $(".slider").slick({
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   autoplay: true,
//   autoplaySpeed: 4500,
//   nextArrow: $(".next1"),
//   prevArrow: $(".prev1"),
// });

$(".progress").slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  nextArrow: $(".next2"),
  prevArrow: $(".prev2"),
});

$(".topBtn").click(function () {
  $("html, body").animate({ scrollTop: 0 }, 400);
  return false;
});

$(window).scroll(function () {
  let scroll = $(this).scrollTop();

  if (scroll < 200) {
    $(".topBtn").hide();
  } else {
    $(".topBtn").show();
  }
});

// main-slider
$(".js-navigate").on("click", function () {
  $(".js-navigate").removeClass("disabled");
  var current = $(".recipe.active");
  var findNext = $(current).next(".recipe");
  var findPrev = $(current).prev(".recipe");
  var button = $(this);

  $(current).removeClass("active");
  setTimeout(function () {
    if ($(button).hasClass("js-right")) {
      $(findNext).addClass("active");
      checkForDisable();
    } else if ($(button).hasClass("js-left")) {
      $(findPrev).addClass("active");
      checkForDisable();
    }
  }, 300);
});

function checkForDisable() {
  var current = $(".recipe.active");
  if ($(current).is(".recipe:last")) {
    $(".js-right").addClass("disabled");
  } else if ($(current).is(".recipe:first")) {
    $(".js-left").addClass("disabled");
  }
}

// $(".recipe.active").slick({
//   autoplay: true,
//   autoplaySpeed: 4500,
// });
