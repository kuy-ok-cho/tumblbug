$('.slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 4500,
  nextArrow:$('.next1'),
  prevArrow:$('.prev1'),
});


$('.progress').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  nextArrow:$('.next2'),
  prevArrow:$('.prev2'),
});


$( '.topBtn' ).click( function() {
	$( 'html, body' ).animate( { scrollTop : 0 }, 400 );
	return false;
} );

$(window).scroll(function(){
  let scroll = $(this).scrollTop();
  
  if(scroll < 200){
    $(".topBtn").hide();
  } else {
    $(".topBtn").show();
  }
});