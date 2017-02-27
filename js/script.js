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
