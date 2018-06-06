$(document).ready(function(){
   console.log("Start");
   $("#nav-home > .nav-item").click(function(){
        $(this).siblings().filter(".nav-link").removeClass("active");
        $(this).filter(".nav-link").addClass("active");
    });
});