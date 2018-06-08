
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

        // Reset temas
        $("#accordion").text("");

        $.getJSON(url+"/index.php/manage_data/temas_rama/"+indice, function(data){
            $("#accordion").append($("<input>").attr("type","hidden").attr("name","id_rama").
            attr("value",indice));
            makeTemas(data[0].temas.split(","));
        });
    }


    function ramasPrint(content){
        $("#contentRama").text(content[0].descripcion);
    }

    function makeTemas(content){
        $.each(content, function(i, e){
            $.getJSON(url+"/index.php/manage_data/tema_content/"+e, function(data){
                $("#accordion").append(
                    $("<div>").addClass("card").append(
                        $("<div>").addClass("card-header").append(
                            $("<a>").addClass("card-link").attr("data-toggle", "collapse").
                            attr("href","#tema"+(i+1)).text("Tema "+(i+1))
                        ),
                        $("<div>").addClass("collapse").attr("id","tema"+(i+1)).attr("data-parent", "#accordion").
                        append(
                            $("<div>").addClass("card-body").append(
                                $("<label>").text("Contenido:"),
                                $("<br>"),
                                $("<div>").append(
                                    $("<button>").addClass("pl-4 pr-4 btn btn-secondary").attr("type","button").text("H1"),
                                    $("<button>").addClass("pl-4 pr-4 btn btn-secondary").attr("type","button").text("H2"),
                                    $("<button>").addClass("pl-4 pr-4 btn btn-secondary").attr("type","button").text("H3"),
                                    $("<button>").addClass("pl-4 pr-4 btn btn-secondary").attr("type","button").text("H4"),
                                    $("<button>").addClass("pl-4 pr-4 btn btn-secondary").attr("type","button").text("HR"),
                                    $("<button>").addClass("pl-4 pr-4 btn btn-secondary").attr("type","button").text("P"),
                                    $("<button>").addClass("pl-4 pr-4 btn btn-secondary").attr("type","button").text("BR"),
                                    $("<button>").addClass("pl-4 pr-4 btn btn-secondary").attr("type","button").text("DIV"),
                                    $("<button>").addClass("pl-4 pr-4 btn btn-secondary").attr("type","button").text("UL"),
                                    $("<button>").addClass("pl-4 pr-4 btn btn-secondary").attr("type","button").text("OL"),
                                    $("<button>").addClass("pl-4 pr-4 btn btn-secondary").attr("type","button").text("LI"),
                                    $("<button>").addClass("pl-3 pr-3 btn btn-secondary").attr("type","button").text("IMG"),
                                    $("<button>").addClass("pl-3 btn btn-secondary").attr("type","button").text("BUTTON LINK"),
                                    $("<button>").addClass("pl-3 pr-4 btn btn-secondary").attr("type","button").text("STRONG")
                                ).addClass("btn-group"),
                                $("<textarea>").addClass("form-control").attr("rows","10").attr("name","tema"+(i+1)).
                                text(data[0].descripcion),
                            )
                        )
                    )
                );
            });
        });
    }
});