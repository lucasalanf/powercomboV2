 <?php 

       // $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $explode = explode('/', $url);
        $end = end($explode);

        $paginaPrincipal = false;

        if($end == "index.php"){
            $paginaPrincipal = true;
        }else{
            $paginaPrincipal = false;
        }


        switch ($end) {
            case "index.php":               
                 $tituloHeader = "Vivo - Assine agora - Internet Fibra, HD TV e Vivo Fixo";
                 $tituloPagina = "";
                 $descricao = "Vivo Assine já - Vivo HDTV, Vivo Internet Fibra, Vivo Speedy, Vivo Fixo ou nosso Vivo combo disponível para Ribeirão Preto e região";
                break;

            case "vivo.php":
                 $tituloHeader = "Vivo - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "Vivo";          
                 $descricao = "A Vivo oferece planos de telefonia móvel, fixa, internet e TV por assinatura. Conheça nossos combos Vivo HD TV, Vivo Fibra e Vivo Fixo";
                break;

            case "vivo-santa-barbara-do-oeste":
                 $tituloHeader = "Vivo Santa Bárbara do Oeste - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO SANTA BÁRBARA DO OESTE";          
                 $descricao = "Vivo Santa Bárbara do Oeste tem os melhores serviços TV por assinatura, internet banda larga Vivo Speedy Fibra e telefonia fixa e móvel, confira combos Vivo";
                break;

            case "vivo-suzano":
                 $tituloHeader = "Vivo | GVT Suzano - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO | GVT SUZANO";          
                 $descricao = "Vivo + GVT Suzano tem os melhores serviços em TV por assinatura, internet e telefonia fixa e móvel, confira combos Vivo GVT em Suzano";
                break;

            case "vivo-aruja":
                 $tituloHeader = "Vivo | GVT Arujá - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO | GVT ARUJÁ";          
                 $descricao = "Vivo + GVT Arujá tem os melhores serviços em TV por assinatura, internet banda larga Speedy e telefonia fixa e móvel, confira combos Vivo GVT em Arujá";
                break;

            case "combate":
                 $tituloHeader = "Combate - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "COMBATE";          
                 $descricao = "Programação diversificada com faixas especiais, equipe especializada de comentaristas e narradores que garantirá que você sinta a emoção da luta";
                break;

            case "vivo-sorocaba":
                 $tituloHeader = "Vivo | GVT Sorocaba - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO | GVT SOROCABA";          
                 $descricao = "Vivo + GVT Sorocaba tem os melhores serviços em TV por assinatura, internet banda larga e telefonia fixa e móvel, confira combos Vivo GVT em Sorocaba";
                break;

            case "vivo-internet":
                 $tituloHeader = "Vivo Internet - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO INTERNET";          
                 $descricao = "A Vivo | GVT possui Internet Fibra de 50 Mega, 100 Mega, 200 Mega e até 300 Mega sem limites de transmissão de dados. Confira disponibilidade em sua cidade";
                break;

            case "esportes":
                 $tituloHeader = "Esportes - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "ESPORTES";          
                 $descricao = "Que tal conseguir ter à sua disposição mais de 1100 jogos ao vivo e em HD pelos dois principais campeonatos do Brasil, o Brasileirão e a Série B?";
                break;

            case "hbo-digital-max-hd":
                 $tituloHeader = "HBO Digital MAX HD - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "HBO DIGITAL MAX HD";          
                 $descricao = "Tenha o melhor, ou melhor, tenha tudo o que a HBO pode te oferecer e assim nasceu o conteúdo à la carte HBO Digital MAX HD";
                break;

            case "hbo-digital-hd":
                 $tituloHeader = "HBO Digital HD - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "HBO DIGITAL HD";          
                 $descricao = "HBO Digital HD é, junto com a Telecine, as duas maiores redes de filmes em canal fechado da televisão brasileira, mas tem uma diferencial em series e filmes";
                break;

            case "internacionais":
                 $tituloHeader = "Internacionais - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "INTERNACIONAIS";          
                 $descricao = "Quer viajar pelo mundo, ficar por dentro das principais notícias que movimentam as principais potências mundiais e tudo isso sem sair de casa?";
                break;

            case "sexy-hot":
                 $tituloHeader = "Sexy Hot - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "SEXY HOT";          
                 $descricao = "É fã de conteúdo erótico? A Sexy Hot pode te proporcionar um mundo de opções para você assistir o melhor dos filmes explícitos sem sair do sofá de casa";
                break;

            case "telecine-hd":
                 $tituloHeader = "Telecine HD - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "TELECINE HD";          
                 $descricao = "Essa rede é a responsável por trazer, em primeiro lugar, os maiores sucessos e até os que não fizeram tanto sucesso assim, para a sua casa";
                break;

            case "telecine-light-hd":
                 $tituloHeader = "Telecine LIGHT HD - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "TELECINE LIGHT HD";          
                 $descricao = "O Telecine Light HD foi feito para pessoas que querem diversificar os filmes, conseguir assistir aquele filme que saiu do cinema o mais rápido possivel";
                break;

            case "100-mbps":
                 $tituloHeader = "Vivo Internet 100 Mbps - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO INTERNET 100 MBPS";          
                 $descricao = "Você sabe o que uma internet a base de fibra pode fazer? Você sabe qual a diferença entre a Vivo Fibra e a Vivo normal?Não? Então confira";
                break;

            case "200-mbps":
                 $tituloHeader = "Vivo Internet 200 Mbps - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO INTERNET 200 MBPS";          
                 $descricao = "Redescubra o significado de velocidade. Isso é diferente de tudo o que você já viu e eu coloco a minha mão no fogo por essa afirmação";
                break;

            case "300-mbps":
                 $tituloHeader = "Vivo Internet 300 Mbps - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO INTERNET 300 MBPS";          
                 $descricao = "Se você deseja uma internet com estabilidade de conexão, com ultravelocidade e vindo de uma operadora de confiança, aproveite para conhecer a Vivo Fibra!";
                break;

            case "50-mbps":
                 $tituloHeader = "Vivo Internet 50 Mbps - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO INTERNET 50 MBPS";          
                 $descricao = "Já se sentiu como se estivesse flutuando pela rede alguma vez e qualquer movimento sua direção mudava rapidamente? Não? Experimentar a 50 Mbps Vivo internet";
                break;

            case "":
                 $tituloHeader = "";     
                 $tituloPagina = "";          
                 $descricao = "";
                break;

            case "":
                 $tituloHeader = "";     
                 $tituloPagina = "";          
                 $descricao = "";
                break;

            case "":
                 $tituloHeader = "";     
                 $tituloPagina = "";          
                 $descricao = "";
                break;

            case "":
                 $tituloHeader = "";     
                 $tituloPagina = "";          
                 $descricao = "";
                break;

            case "":
                 $tituloHeader = "";     
                 $tituloPagina = "";          
                 $descricao = "";
                break;

            case "":
                 $tituloHeader = "";     
                 $tituloPagina = "";          
                 $descricao = "";
                break;

            case "":
                 $tituloHeader = "";     
                 $tituloPagina = "";          
                 $descricao = "";
                break;

            case "":
                 $tituloHeader = "";     
                 $tituloPagina = "";          
                 $descricao = "";
                break;

            case "":
                 $tituloHeader = "";     
                 $tituloPagina = "";          
                 $descricao = "";
                break;

            case "":
                 $tituloHeader = "";     
                 $tituloPagina = "";          
                 $descricao = "";
                break;

            case "":
                 $tituloHeader = "";     
                 $tituloPagina = "";          
                 $descricao = "";
                break;

            case "":
                 $tituloHeader = "";     
                 $tituloPagina = "";          
                 $descricao = "";
                break;
        }

     ?>