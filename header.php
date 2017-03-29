<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Vivo - Assine agora - Internet Fibra, HD TV e Vivo Fixo" />
    <meta charset="utf-8" />
   
    <link rel="canonical" href="http://powercombo.com.br/" />
    <meta property="og:site_name" content="Internet Fibra, HD TV e Vivo Fixo" />

   <?php include 'titulosDescricoes.php' ?>

    <title><?=$tituloHeader?></title>
    <meta name="description" content="<?=$descricao?>"/>
    <script src="/powercomboV2/js/jquery-3.2.0.min.js"></script>

     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/powercomboV2/css/flexslider.css" />
    <link rel="stylesheet" href="/powercomboV2/css/remodal.css">
    <link rel="stylesheet" href="/powercomboV2/css/remodal-default-theme.css">
   
    <link rel="stylesheet" href="/powercomboV2/css/site.css">

   
</head>
<body>
<?=$end?>
    <div class="topo">
        <div class="container">
            <div class="row">
                <div class="logo col-md-4">
                    <?php if($paginaPrincipal) { ?>
                        <h1 title="GVT | Vivo Combo com TV, Internet Banda Larga e Telefonia Fixa, GVT Contato">
                            <a href="/"><img src="/powercomboV2/img/vivo-logo.png" alt="Vivo Logo" /></a>
                        </h1>

                    <?php } else{ ?>

                        <a href="/"><img src="/powercomboV2/img/vivo-logo.png" alt="Vivo Logo" /></a>

                    <?php } ?>
                </div>

                <div class="fone col-lg-4 col-md-4 col-sm-6">
                    <i class="material-icons">headset_mic</i>
                    <div class="right">
                        <span>Assine já:</span><b class="addEventoTelefone"> 0800 941 7121</b>
                    </div>
                </div>

                <div class="pacotesVivo col-lg-4 col-md-4 col-sm-6">
                    <div class="controlaLarguraMin">
                        <span class="ligamosParavc"><a href="#ligamosParaVoce">Ligamos Para <br>Você</a></span>
                    </div>
                </div>

            </div><!--row-->          
        </div><!--wrapper-->
    </div><!--topo-->

    <div class="row">
        <div class="flexslider col-lg-12 col-md-12 col-sm-12">
            <ul class="slides">
                <li>
                    <img src="/powercomboV2/img/vivoPrecoss.jpg" />
                    <!--<p class="flex-caption">Adventurer Cheesecake Brownie</p>-->
                </li>
                <li>
                    <img src="/powercomboV2/img/vivo-TV.jpg" />
                    <!--<p class="flex-caption">Adventurer Lemon</p>-->
                </li>
            </ul>
        </div>
    </div><!--row-->
    <?php if(!$paginaPrincipal) { ?>
    <h1 class="internas"><div class="container"><?=$tituloPagina?></div></h1>
    <?php } ?>