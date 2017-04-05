<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Vivo - Assine agora - Internet Fibra, HD TV e Vivo Fixo" />
    <meta charset="utf-8" />
   
    
    <meta property="og:site_name" content="Internet Fibra, HD TV e Vivo Fixo" />

   <?php include 'titulosDescricoes.php' ?>

    <title><?=$tituloHeader?></title>
    <meta name = "robots" content = "noodp">
    <meta name="description" content="<?=$descricao?>"/>
    <link rel="canonical" href="<?=$url?>" />

    <link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    

     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" media="none" onload="if(media!='all')media='all'">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous" onload="if(media!='all')media='all'"> 

    

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" onload="if(media!='all')media='all'">
    <link rel="stylesheet" href="/css/flexslider.css" onload="if(media!='all')media='all'" />
    <link rel="stylesheet" href="/css/remodal.css" onload="if(media!='all')media='all'">
    <link rel="stylesheet" href="/css/remodal-default-theme.css" onload="if(media!='all')media='all'">
    
    <link rel="stylesheet" href="/css/site.css" onload="if(media!='all')media='all'">

   
</head>
<body>

    <div class="topo">
        <div class="container">
            <div class="row">
                <div class="logo col-md-4">
                    <?php if($paginaPrincipal) { ?>
                        <h1 title="GVT | Vivo Combo com TV, Internet Banda Larga e Telefonia Fixa, GVT Contato">
                            <a href="/"><img src="/img/vivo-logo.png" alt="Vivo Logo" /></a>
                        </h1>

                    <?php } else{ ?>

                        <a href="/"><img src="/img/vivo-logo.png" alt="Vivo Logo" /></a>

                    <?php } ?>
                </div>

                <div class="fone col-lg-5 col-md-5 col-sm-6">
                    <i class="material-icons">headset_mic</i>
                    <div class="right">
                        <span>Assine já:</span><b class="addEventoTelefone"><a href="tel:08009417121" style="color: #414151;">0800 941 7121</a></b>
                    </div>
                </div>

                <div class="pacotesVivo col-lg-3 col-md-3 col-sm-6">
                    <div class="controlaLarguraMin">
                        <span class="ligamosParavc"><a href="#ligamosParaVoce">Ligamos Para <br>Você</a></span>
                    </div>
                </div>

            </div><!--row-->          
        </div><!--wrapper-->
    </div><!--topo-->

    <div class="formularioPrincipal">
        <div class="container">
            <span class="consultarCobertura">Consulte Cobertura</span>
            <div class="formulario">
                <form id="theform" novalidate="novalidate" onsubmit="return false">
                    <input type="text" name="nome" placeholder="Nome" class="nome" required>
                    <input type="text" name="email" placeholder="E-mail" class="email" required>
                    <input type="text" name="cep" placeholder="CEP" class="cep" required>
                    <input type="text" name="numeroResidencia" placeholder="Numero da Residência" class="numeroResidencia" required>
                    <input type="text" name="ddd" placeholder="ddd"  maxlength="2" class="ddd" required>
                    
                    <input type="number" name="telefone" placeholder="Telefone" maxlength="9" class="telefone" data-placement="right" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" required="" aria-required="true">
                    <input type="submit" name="" value="Consultar" class="consultarTop">
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="flexslider col-lg-12 col-md-12 col-sm-12">
            <ul class="slides">
                <li>
                    <img src="/img/vivoPrecoss.jpg" alt="Vivo Internet Fibra Preço" />
                    <!--<p class="flex-caption">Adventurer Cheesecake Brownie</p>-->
                </li>
                <li>
                    <img src="/img/vivo-TV.jpg" alt="Vivo HD TV Preço" />
                    <!--<p class="flex-caption">Adventurer Lemon</p>-->
                </li>
            </ul>
        </div>
    </div><!--row-->
    <?php if(!$paginaPrincipal) { ?>
    <h1 class="internas"><div class="container"><?=$tituloPagina?></div></h1>
    <?php } ?>