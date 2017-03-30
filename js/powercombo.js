// JavaScript source code
$(document).ready(function () {
    $('.flexslider').flexslider({
        animation: "slide"
    });

    var modal, asseine;
    modal = $('[data-remodal-id="ligamosParaVoce"]').remodal();
    assine = $('[data-remodal-id="modal"]').remodal();

    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $(".fone .addEventoTelefone").attr("onClick", "ga('send', 'event', 'callback', 'cliqueno0800')")
    }

     $(".telefone").mask("99999-999");
});

$(document).on('mousedown', '.assineagora', function () {
    assine.open();
});



$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $(".btnTelefoneLigamos").fadeIn(400);
    } else {
        $(".btnTelefoneLigamos").fadeOut(400);
    }

});

$(document).on("mousedown", ".btnTelefoneLigamos", function () {
    if ($(this).css("right") == "-173px") {

        $(this).animate({
            right: 0
        }, 400, function () {

        });
    } else {
        $(this).animate({
            right: -173
        }, 400, function () {

        });
    }

});

$(document).on("mouseup", ".submitLigamos",function(){  
  inseriLeadsPostGreeLigueme();
});
    


$(document).on("mouseup", ".consultarTop",function(){  
  inseriLeadsPostGree();
});

$(document).on("mouseup", ".planosFormulario .consultar",function(){  
  inseriLeadsPostGreeConsulte();
});

function inseriLeadsPostGreeLigueme(){

    var nome, telefone1, origem, ddd;

    ddd = $(".ligamos .ddd_home").val();
    nome = $(".ligamos #nome").val();
    telefone1 = $(".ligamos #telefone").val();  
    origem = "CLICKSITEPOWER";

     if(nome == "" || ddd == "" || telefone1 == ""){
      if(nome == ""){
        $(".ligamos #nome").css("border", "3px solid red");
      }else{
        $(".ligamos #nome").css("border", "3px solid #f1f1f1");        
      }
      if(ddd == ""){
        $(".ligamos #ddd").css("border", "3px solid red");
      }else{
         $(".ligamos #ddd").css("border", "3px solid #f1f1f1");        
      }
      if(telefone1 == ""){
        $(".ligamos #telefone").css("border", "3px solid red");
      }else{
         $(".ligamos #telefone").css("border", "3px solid #f1f1f1");        
      }
      e.preventDefault(); 
      e.stopPropagation();  
      return false;   
    }else{

         $.ajax({ 
            type      : 'POST',
            url       : 'http://powercombo.com.br/form/postgree.php',
            data      : { 'nome': nome, 'telefone1':ddd + telefone1, 'origem':origem}, //Forms name
            dataType  : 'json',
            success   : function(data) {
                location.replace("http://powercombo.com.br/cadastro-concluido/");
            },
                error: function(ex){
            }        
          });

    }

    
}



function inseriLeadsPostGree(){

    var nome, email, telefone1, cep, nro, origem, ddd;

     ddd = $(".formularioPrincipal .ddd").val();
    nome = $(".formularioPrincipal .nome").val();
    email = $(".formularioPrincipal .email").val();
    telefone1 = $(".formularioPrincipal .telefone").val();
    cep = $(".formularioPrincipal .cep").val();
    nro = $(".formularioPrincipal .numeroResidencia").val();
    origem = "LEADSPOWER";

     $.ajax({ 
        type      : 'POST',
        url       : 'http://powercombo.com.br/form/postgree.php',
        data      : { 'nome': nome, 'email': email, 'telefone1':ddd + telefone1, 'cep':cep, 'nro':nro, 'origem':origem}, //Forms name
        dataType  : 'json',
        success   : function(data) {
            location.replace("http://powercombo.com.br/cadastro-concluido/");
        },
        error: function(ex){
        }        
      });
   
}


function inseriLeadsPostGreeConsulte(){

    var nome, email, telefone1, cep, nro, origem, ddd;

     ddd = $(".planosFormulario .ddd").val();
    nome = $(".planosFormulario .nome").val();
    email = $(".planosFormulario .email").val();
    telefone1 = $(".planosFormulario .telefone").val();
    cep = $(".planosFormulario .cep").val();
    nro = $(".planosFormulario .numeroResidencia").val();
    origem = "LEADSPOWER";

     $.ajax({ 
        type      : 'POST',
        url       : 'http://powercombo.com.br/form/postgree.php',
        data      : { 'nome': nome, 'email': email, 'telefone1':ddd + telefone1, 'cep':cep, 'nro':nro, 'origem':origem}, //Forms name
        dataType  : 'json',
        success   : function(data) {
           location.replace("http://powercombo.com.br/cadastro-concluido/");
        },
        error: function(ex){
        }        
      });
   
}

