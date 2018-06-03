
$(document).ready(function(){
    console.log("Start!");
    $("#navbar_admin .navbar-nav").append(
        $("<li>").addClass("nav-item btn btn-danger").append(
            $("<a>").text("Algebra").addClass("nav-link")
        )
    );

    $("#navbar_admin .navbar-nav > .hidden").css("display","none");
});