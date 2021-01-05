(function(){

  var parallax = document.querySelectorAll(".image"),
      speed = 0.5;

  window.onscroll = function(){
    [].slice.call(parallax).forEach(function(el,i){

      var windowYOffset = window.pageYOffset,
          elBackgrounPos = "50% " + (windowYOffset * speed) + "px";

      el.style.backgroundPosition = elBackgrounPos;

    });
  };

})();

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
   $(".imageBody").animate({
      top: '25px',
      opacity: '1'
   }, 2000);
   setTimeout(function(){
      $(".servicesTitle").animate({
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