$(document).ready(function() {
  $('.arrow').hover(function() {
    $(this).effect( 'bounce', { times: 3 }, 'slow');
  });
});


//Adds a smooth scroll when the user clicks on a navbar link
$(document).ready(function(){
 $('a[href^="#"]').on('click',function (e) {
   e.preventDefault();

   var target = this.hash;
   var $target = $(target);

   //Scroll and show hash
  // $('html, body').animate({
  //   'scrollTop': $target.offset().top
  // }, 1000, 'swing', function () {
  //   window.location.hash = target;

$('html, body').animate({
   'scrollTop': $target.offset().top
 }, 1000, 'swing');
 });
 });

// Function adds a dropshadow to the navbar when the user scrols down the page
 $(function(){
     var navbar = $('.navbar');
     $(window).scroll(function(){
         if($(window).scrollTop() <= 40){
        		navbar.css('box-shadow', 'none');
         } else {
           navbar.css('box-shadow', '0px 1px 12px rgba(0, 0, 0, 0.1)');
         }
     });
 })



 $('.navbar-collapse ul li a').click(function(){
         $('.navbar-toggle:visible').click();
 });

 AOS.init({
   duration: 1200,
 })

 $('.arrow').hover(function() {
   $(this).effect( 'bounce', { times: 3 }, 'slow');
 });


 /*function onScroll(event){
     var scrollPos = $(document).scrollTop();
     $('#navbar a').each(function () {
         var currLink = $(this);
         var refElement = $(currLink.attr("href"));
         if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
             $('#menu-center ul li a').removeClass("active");
             currLink.addClass("active");
         }
         else{
             currLink.removeClass("active");
         }
     });
 }*/

 $(window).scroll(function(){
   if ($(this).scrollTop() > 10) {
      $('.homenav').addClass('active');
      $('.aboutnav').removeClass('active');
      $('.projectsnav').removeClass('active');
      $('.applynav').removeClass('active');
      $('.contactnav').removeClass('active');
    }

     if ($(this).scrollTop() > 750) {
        $('.aboutnav').addClass('active');
        $('.homenav').removeClass('active');
      }
      if ($(this).scrollTop() > 950) {
         $('.projectsnav').addClass('active');
         $('.aboutnav').removeClass('active');
}
if ($(this).scrollTop() > 1550) {
     $('.applynav').addClass('active');
      $('.projectsnav').removeClass('active');
}

if ($(this).scrollTop() > 2300) {
     $('.contactnav').addClass('active');
      $('.applynav').removeClass('active');
}
 });

 var onScrollHandler = function() {
  var newImageUrl = "logo.png";
  var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
  if (scrollTop > 100) {
     newImageUrl = "logo-mobile.png"
  }
  yourImageElement.src = newImageUrl;
};
object.addEventListener ("scroll", onScrollHandler);
