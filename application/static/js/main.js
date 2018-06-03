$(document).ready(function(){
    var WORK_DIR = "/mycode";
    var protocol = location.protocol;
    var hostname = window.location.hostname;;
    var url = "";
    
    var test = window.location.hostname;

    if(hostname = "localhost"){
        url = protocol+"//"+hostname+WORK_DIR+"/bit-maths"
    }else{
        url = protocol+"//"+hostname+"/bit-maths"
    }

    $("#home_publica").ready(function(){
        $.getJSON(url+"/index.php/manage_data/rama_content", function(data){
            if(typeof data[0].titulo == "undefined"){
                $("#home_publica > #temas-home-cont").append($("<p>").text(data[0].error).addClass("error_sms"));
            }else{
                ramasPublicHome(data);
            }
        });
    });

    function ramasPublicHome(content){
        $.each(content, function(i, e){
            $("#home_publica > #temas-home-cont").append(
                $("<div>").addClass("row shadow-temas").append(
                    $("<div>").addClass("col-12 col-sm-5").append(
                        $("<img>").addClass("img-fluid")
                        .attr("src",url+"/application/static/img/"+e.imagen).attr("alt","Aritmética")
                    ),
                    $("<div>").addClass("col-12 col-sm-7").append(
                        $("<h2>").text(e.titulo),
                        $("<p>").addClass("text-justify tema").text(e.descripcion)
                    )
                )
            );
        });
    }
});