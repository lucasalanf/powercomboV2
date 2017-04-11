// JavaScript source code
 var modal, asseine;

$(document).ready(function () {
    //console.log("aaa")
    //HoldOn.open({
    //    theme: "sk-cube-grid"
    //});


    $('.flexslider').flexslider({
        animation: "slide"
    });

   
    modal = $('[data-remodal-id="ligamosParaVoce"]').remodal();
    assine = $('[data-remodal-id="modal"]').remodal();

    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $(".fone .addEventoTelefone").attr("onClick", "ga('send', 'event', 'callback', 'cliqueno0800')")
    }

    
    
    $('.formulario .ddd').mask('99');

    //setTimeout(function () {

    //    HoldOn.close();
    //},1500)

    $("#theform").validate({
        rules: {
            firstname: "required"
        },

        messages: {
            firstname: "Este campo é obrigatório"
        }
    });

    $("#theformPlanosFormulario").validate({
        rules: {
            firstname: "required"
        },
        messages: {
            firstname: "Este campo é obrigatório"
        }
    });


    $("#ligamosParaVoceValidate").validate({
        rules: {
            firstname: "required"
        },
        messages: {
            firstname: "Este campo é obrigatório"
        }
    });

    
    
});

$(document).on('mousedown', '.assineagora', function () {
    assine.open();
});



$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $(".btnTelefoneLigamos").fadeIn(400);
console.log(localStorage.getItem('scrol'))
        if( localStorage.getItem('scrol') == null){
            modal.open();         
            localStorage.setItem('scrol', 'yes');
        }
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

    if (nome == "" || nome == undefined || ddd == "" || ddd == undefined || telefone1 == "" || telefone1 == undefined) {      
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
               modal.close();
               assine.close();
               location.replace("http://powercombo.com.br/cadastro-concluido/");
                 // $('[data-remodal-id="modal"]').modal('hide')
             
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

    if (ddd == undefined || ddd == "" ||
        nome == undefined || nome == "" ||
        email == undefined || email == "" ||
        telefone1 == undefined || telefone1 == "" ||
        cep == undefined || cep == "" ||
        nro == undefined || nro == "") {
        return false;
    } else {

        $.ajax({
            type: 'POST',
            url: 'http://powercombo.com.br/form/postgree.php',
            data: { 'nome': nome, 'email': email, 'telefone1': ddd + telefone1, 'cep': cep, 'nro': nro, 'origem': origem }, //Forms name
            dataType: 'json',
            success: function (data) {
                location.replace("http://powercombo.com.br/obrigado/");
            },
            error: function (ex) {
                modal.close();
                assine.close();
                location.replace("http://powercombo.com.br/obrigado/");
            }
        });
    }
   
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

    if (ddd == undefined || ddd == "" ||
        nome == undefined || nome == "" ||
        email == undefined || email == "" ||
        telefone1 == undefined || telefone1 == "" ||
        cep == undefined || cep == "" ||
        nro == undefined || nro == "") {
        return false;
    } else {

        $.ajax({
            type: 'POST',
            url: 'http://powercombo.com.br/form/postgree.php',
            data: { 'nome': nome, 'email': email, 'telefone1': ddd + telefone1, 'cep': cep, 'nro': nro, 'origem': origem }, //Forms name
            dataType: 'json',
            success: function (data) {
                location.replace("http://powercombo.com.br/concluido/");
            },
            error: function (ex) {
                modal.close();
                assine.close();
                location.replace("http://powercombo.com.br/concluido/");
            }
        });
    }
   
}



function maxLengthCheck(object) {
    if (object.value.length > object.maxLength)
        object.value = object.value.slice(0, object.maxLength)
}

function isNumeric(evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode(key);
    var regex = /[0-9]|\./;
    if (!regex.test(key)) {
        theEvent.returnValue = false;
        if (theEvent.preventDefault) theEvent.preventDefault();
    }
}

