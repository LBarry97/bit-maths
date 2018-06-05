
$(document).ready(function(){
    $("#navbar_admin .navbar-nav li").removeClass("active");
    $("#navbar_admin .navbar-nav").append(
        $("<li>").addClass("nav-item btn btn-dark active").append(
            $("<a>").text("Aritmética").addClass("nav-link")
        ),
        $("<li>").addClass("nav-item btn btn-dark").append(
            $("<a>").text("Álgebra").addClass("nav-link")
        ),
        $("<li>").addClass("nav-item btn btn-dark").append(
            $("<a>").text("Geometría").addClass("nav-link")
        ),
        $("<li>").addClass("nav-item btn btn-dark").append(
            $("<a>").text("Cálculo").addClass("nav-link")
        )
    );

    $("#navbar_admin .navbar-nav li").click(function(){
        $(this).siblings().removeClass("active");
        $(this).addClass("active");
    });
});