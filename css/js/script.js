/*$(document).ready(function(){
  changeImage();
  changeImage2();
});*/

function changeImage() {
  setTimeout(changeImage, 5000);
  $(".bottom").animate({
    opacity: '0'
  }, 500);
};

function changeImage2() {
  setTimeout(changeImage2, 10000);
  $(".bottom").animate({
    opacity: '1'
  }, 500);
};

$(window).scroll(function() {
   if($(window).scrollTop() > 0) {
		$(".navbar").addClass('Transition');
	}
});

$(window).scroll(function() {
   if($(window).scrollTop() === 0) {
		$(".navbar").removeClass('Transition');
	}
});

$(window).scroll(function() {
   if($(window).scrollTop() > 0) {
    $(".services").addClass('Transition2');
  }
});

$(window).scroll(function() {
   if($(window).scrollTop() === 0) {
    $(".services").removeClass('Transition2');
  }
});

$(document).ready(function() {
   setTimeout(function(){
      $('.imageText').addClass('imageTextBG')
   }, 750);
});

$(document).ready(function() {
   setTimeout(function(){
      $('.navbar').addClass('navbarBorder')
   }, 750);
});

$(document).ready(function() {
   setTimeout(function(){
      $('.mobileNavbar').addClass('navbarBorder')
   }, 750);
});

$(document).ready(function() {
   setTimeout(function(){
      $('.services').addClass('servicesBorder')
   }, 750);
});

$(document).ready(function() {
   setTimeout(function(){
      $('.footer').addClass('footerBorder')
   }, 750);
});

$(document).ready(function() {
  $('.imageArrow').click(function() {
    $('html, body').animate({
      scrollTop: $(".services").offset().top-30
    }, 1000);
  });
});

$(document).ready(function() {
   $(".imageBody").animate({
      top: '25px',
      opacity: '1'
   }, 2000);
   setTimeout(function(){
      $(".servicesTitle").animate({
      opacity: '1'
    }, 2000);
   }, 750);
   setTimeout(function(){
      $(".indexLogo").animate({
      opacity: '1'
    }, 2000);
   }, 750);
   setTimeout(function(){
      $(".indexTabs").animate({
      opacity: '1'
    }, 2000);
   }, 750);
   setTimeout(function(){
      $(".footerText").animate({
      opacity: '1'
    }, 2000);
   }, 750);
   setTimeout(function(){
      $(".mobileLogo").animate({
      opacity: '1'
    }, 2000);
   }, 750);
   setTimeout(function(){
      $(".mobileTabs").animate({
      opacity: '1'
    }, 2000);
   }, 750);
});

$(window).scroll(function() {
   if($(window).scrollTop() > window.innerHeight*0.2) {
   	$(".design").animate({
   		opacity: 1
   	}, 500);
	}
});

$(window).scroll(function() {
   if($(window).scrollTop() > window.innerHeight*0.2) {
   	$(".project").animate({
   		opacity: 1
   	}, 1000);
	}
});

$(window).scroll(function() {
   if($(window).scrollTop() > window.innerHeight*0.2) {
   	$(".quality").animate({
   		opacity: 1
   	}, 1500);
	}
});

$(window).scroll(function() {
   if($(window).scrollTop() > window.innerHeight*0.2) {
   	$(".cost").animate({
   		opacity: 1
   	}, 2000);
	}
});
