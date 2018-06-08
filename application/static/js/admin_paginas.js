
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

    $('body').on('click', '.close', function() {
        $(this).parent().parent().remove();
    });

    $("#nuevo-tema").click(function(){
        nuevoTema();
    });

    function nuevoTema(){
        var numTemasExist = $("#accordion").children().length;
        var newTema = numTemasExist + 1; 
        
        $("#accordion").append(
            $("<div>").addClass("card").append(
                $("<div>").addClass("card-header").append(
                    $("<a>").addClass("card-link").attr("data-toggle", "collapse").
                    attr("href","#tema"+newTema).text("Tema "+newTema),
                    $("<i>").addClass("close").attr("data-tema",newTema).attr("aria-label","Close").
                    append($("<span>").attr("aria-hidden","true").html("&times;"))
                ),
                $("<div>").addClass("collapse").attr("id","tema"+newTema).attr("data-parent", "#accordion").
                append(
                    $("<div>").addClass("card-body").append(
                        $("<label>").text("Contenido:"),
                        $("<br>"),
                        $("<div>").append(
                            $("<button>").addClass("pl-4 pr-4 btn btn-secondary helper").attr("type","button").attr("data-help","<h1></h1>").text("H1"),
                            $("<button>").addClass("pl-4 pr-4 btn btn-secondary helper").attr("type","button").attr("data-help","<h2></h2>").text("H2"),
                            $("<button>").addClass("pl-4 pr-4 btn btn-secondary helper").attr("type","button").attr("data-help","<h3></h3>").text("H3"),
                            $("<button>").addClass("pl-4 pr-4 btn btn-secondary helper").attr("type","button").attr("data-help","<h4></h4>").text("H4"),
                            $("<button>").addClass("pl-4 pr-4 btn btn-secondary helper").attr("type","button").attr("data-help","<hr>").text("HR"),
                            $("<button>").addClass("pl-4 pr-4 btn btn-secondary helper").attr("type","button").attr("data-help","<p></p>").text("P"),
                            $("<button>").addClass("pl-4 pr-4 btn btn-secondary helper").attr("type","button").attr("data-help","<br>").text("BR"),
                            $("<button>").addClass("pl-4 pr-4 btn btn-secondary helper").attr("type","button").attr("data-help","<div></div>").text("DIV"),
                            $("<button>").addClass("pl-4 pr-4 btn btn-secondary helper").attr("type","button").attr("data-help","<ul></ul>").text("UL"),
                            $("<button>").addClass("pl-4 pr-4 btn btn-secondary helper").attr("type","button").attr("data-help","<ol></ol>").text("OL"),
                            $("<button>").addClass("pl-4 pr-4 btn btn-secondary helper").attr("type","button").attr("data-help","<li></li>").text("LI"),
                            $("<button>").addClass("pl-3 pr-3 btn btn-secondary helper").attr("type","button").attr("data-help","<img src='' alt=''>").text("IMG"),
                            $("<button>").addClass("pl-3 btn btn-secondary helper").attr("type","button").attr("data-help","<a href=''></a>").text("BUTTON LINK"),
                            $("<button>").addClass("pl-3 pr-4 btn btn-secondary helper").attr("type","button").attr("data-help","<strong></strong>").text("STRONG")
                        ).addClass("btn-group"),
                        $("<textarea>").addClass("form-control").attr("rows","10").attr("name","tema"+newTema),
                    )
                )
            )
        );
    }

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
                                    $("<button>").addClass("pl-4 pr-4 btn btn-secondary helper").attr("type","button").attr("data-help","<h1></h1>").text("H1"),
                                    $("<button>").addClass("pl-4 pr-4 btn btn-secondary helper").attr("type","button").attr("data-help","<h2></h2>").text("H2"),
                                    $("<button>").addClass("pl-4 pr-4 btn btn-secondary helper").attr("type","button").attr("data-help","<h3></h3>").text("H3"),
                                    $("<button>").addClass("pl-4 pr-4 btn btn-secondary helper").attr("type","button").attr("data-help","<h4></h4>").text("H4"),
                                    $("<button>").addClass("pl-4 pr-4 btn btn-secondary helper").attr("type","button").attr("data-help","<hr>").text("HR"),
                                    $("<button>").addClass("pl-4 pr-4 btn btn-secondary helper").attr("type","button").attr("data-help","<p></p>").text("P"),
                                    $("<button>").addClass("pl-4 pr-4 btn btn-secondary helper").attr("type","button").attr("data-help","<br>").text("BR"),
                                    $("<button>").addClass("pl-4 pr-4 btn btn-secondary helper").attr("type","button").attr("data-help","<div></div>").text("DIV"),
                                    $("<button>").addClass("pl-4 pr-4 btn btn-secondary helper").attr("type","button").attr("data-help","<ul></ul>").text("UL"),
                                    $("<button>").addClass("pl-4 pr-4 btn btn-secondary helper").attr("type","button").attr("data-help","<ol></ol>").text("OL"),
                                    $("<button>").addClass("pl-4 pr-4 btn btn-secondary helper").attr("type","button").attr("data-help","<li></li>").text("LI"),
                                    $("<button>").addClass("pl-3 pr-3 btn btn-secondary helper").attr("type","button").attr("data-help","<img src='' alt=''>").text("IMG"),
                                    $("<button>").addClass("pl-3 btn btn-secondary helper").attr("type","button").attr("data-help","<a href=''></a>").text("BUTTON LINK"),
                                    $("<button>").addClass("pl-3 pr-4 btn btn-secondary helper").attr("type","button").attr("data-help","<strong></strong>").text("STRONG")
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

    $('body').on('click', '.helper', function() {
        var txtarea = $(this).parent().siblings()[2];
        console.log(txtarea);
        insertAtCaret(txtarea, $(this).attr("data-help"));
    });

    // Funcionamieto del helper (codigo de internet)
    function insertAtCaret(txtarea, text) {
        if (!txtarea) {
            return;
        }

        var scrollPos = txtarea.scrollTop;
        var strPos = 0;
        var br = ((txtarea.selectionStart || txtarea.selectionStart == '0') ?
            "ff" : (document.selection ? "ie" : false));
        if (br == "ie") {
            txtarea.focus();
            var range = document.selection.createRange();
            range.moveStart('character', -txtarea.value.length);
            strPos = range.text.length;
        } else if (br == "ff") {
            strPos = txtarea.selectionStart;
        }

        var front = (txtarea.value).substring(0, strPos);
        var back = (txtarea.value).substring(strPos, txtarea.value.length);
        txtarea.value = front + text + back;
        strPos = strPos + text.length;
        if (br == "ie") {
            txtarea.focus();
            var ieRange = document.selection.createRange();
            ieRange.moveStart('character', -txtarea.value.length);
            ieRange.moveStart('character', strPos);
            ieRange.moveEnd('character', 0);
            ieRange.select();
        } else if (br == "ff") {
            txtarea.selectionStart = strPos;
            txtarea.selectionEnd = strPos;
            txtarea.focus();
        }

        txtarea.scrollTop = scrollPos;
    }
});