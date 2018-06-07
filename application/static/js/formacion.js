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
    
    var ramas=["temas-artimetica","temas-algebra","temas-geometria","temas-calculo"];

    listTemas(ramas);
    printContentTema(1);

    // Fedback conlos temas
    $('body').on('click', '.list-group-item', function() {
        printContentTema($(this).attr("data-tema"));
        $(this).siblings().removeClass("active")
        $(this).addClass("active");
    });

    // Pintar los temas extraidos de la BD
    function listTemas(ramas){
        var lenRamas = ramas.length;

        for(i=0; i<lenRamas; i++){
            $.getJSON(url+"/index.php/manage_data/temas_rama/"+(i+1), function(data){
                $.each(data[0].temas.split(","), function(y, e){
                    $("#"+ramas[(data[0].rama-1)]).append(
                        $("<li>").addClass("list-group-item").attr("data-tema",e).text("Tema "+(y+1))
                    )
                });
            });
        }
    }

    // Pinta el contenido del tema
    function printContentTema(id){
        $.getJSON(url+"/index.php/manage_data/tema_content/"+id, function(data){
            $("#content-tema").html(data[0].descripcion);
        });
    }
});