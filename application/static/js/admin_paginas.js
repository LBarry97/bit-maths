
$(document).ready(function(){
    var WORK_DIR = "/mycode";
    var protocol = location.protocol;
    var hostname = window.location.hostname;
    var url = "";
    
    if(hostname == "localhost"){
        url = protocol+"//"+hostname+WORK_DIR+"/bit-maths"
    }else{
        url = protocol+"//"+hostname+"/bit-maths"
    }

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

        switch($(this).children().text()){
            case 'Aritmética':
                getContentRama(1);
                break;
            case 'Álgebra':
                getContentRama(2);
                break;
            case 'Geometría':
                getContentRama(3);
                break;
            case 'Cálculo':
                getContentRama(4);
                break;
        }
    });

    getContentRama(1);

    function getContentRama(indice) {
        $.getJSON(url+"/index.php/manage_data/rama/"+indice, function(data){
            if(typeof data[0].titulo == "undefined"){
                $(".container").prepend($("<p>").text(data[0].error).addClass("error_sms"));
            }else{
                ramasPrint(data);
            }
        });

        $.getJSON(url+"/index.php/manage_data/temas_rama/"+indice, function(data){
            makeTemas(data);
        });
    }


    function ramasPrint(content){
        $("#contentRama").text(content[0].descripcion);
    }

    function makeTemas(content){
        console.log(content.length)
    }
});