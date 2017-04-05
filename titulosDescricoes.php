 <?php 

       // $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $explode = explode('/', $url);
        $end = count($explode);
        $end =  $explode[$end - 2];
        $paginaPrincipal = false;

        if($end == "index.php"){
            $paginaPrincipal = true;
        }else{
            $paginaPrincipal = false;
        }


        switch ($end) {
            case "index.php":               
                 $tituloHeader = "Vivo - Assine agora - Internet Fibra, HD TV e Vivo Fixo";
                 $tituloPagina = "CONHEÇA OS PLANOS";
                 $descricao = "Vivo Assine já - Vivo HDTV, Vivo Internet Fibra, Vivo Speedy, Vivo Fixo ou nosso Vivo combo disponível para Ribeirão Preto e região";
                break;

                  case "":               
                 $tituloHeader = "Vivo - Assine agora - Internet Fibra, HD TV e Vivo Fixo";
                 $tituloPagina = "CONHEÇA OS PLANOS";
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
                 $cidade = "Santa Bárbara do Oeste";   
                 $descricao = "Vivo Santa Bárbara do Oeste tem os melhores serviços TV por assinatura, internet banda larga Vivo Speedy Fibra e telefonia fixa e móvel, confira combos Vivo";
                break;

            case "vivo-suzano":
                 $tituloHeader = "Vivo | GVT Suzano - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO | GVT SUZANO";   
                 $cidade = "Suzano";      
                 $descricao = "Vivo + GVT Suzano tem os melhores serviços em TV por assinatura, internet e telefonia fixa e móvel, confira combos Vivo GVT em Suzano";
                break;

            case "vivo-aruja":
                 $tituloHeader = "Vivo | GVT Arujá - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO | GVT ARUJÁ";     
                 $cidade = "Arujá";     
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
                 $cidade = "Sorocaba";       
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

            case "10-mbps":
                 $tituloHeader = "Vivo Internet 10 Mbps - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO INTERNET 10 MBPS";          
                 $descricao = "Para quem quer internet rápida, de qualidade e gastando bem pouco no mês, atualmente, a Vivo Banda Larga (Speedy), oferece quatro opções.";
                break;

            case "8-mbps":
                 $tituloHeader = "Vivo Internet 8 Mbps - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO INTERNET 8 MBPS";          
                 $descricao = "A internet Vivo Speedy foi “desenhada” e desenvolvida exclusivamente para quem quer poupar e ainda sim ter o melhor serviço da banda larga";
                break;

            case "15-mbps":
                 $tituloHeader = "Vivo Internet 15 Mbps - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO INTERNET 15 MBPS";          
                 $descricao = "Os 15 megas por segundo não ficam só no título do texto, eles aparecem na hora dos seus downloads, e o que isso quer dizer?";
                break;

            case "2-mbps":
                 $tituloHeader = "Vivo Internet 2 Mbps - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO INTERNET 2 MBPS";          
                 $descricao = "O 2 Mbps e não só ele, mas toda a linha Vivo Speedy foi criada para oferecer um serviço ainda mais barato do que o 15 mega.";
                break;

            case "4-mbps":
                 $tituloHeader = "Vivo Internet 4 Mbps - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO INTERNET 4 MBPS";          
                 $descricao = "Antes conhecido somente como Speedy, hoje, a Vivo Speedy é uma alternativa para quem precisa de uma internet com um preço mais amigável";
                break;

            case "vivo-fixo-simples":
                 $tituloHeader = "Vivo fixo simples - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO FIXO SIMPLES";          
                 $descricao = "Além do valor extremamente acessível, o pacote vivo fixo simples é liberado para qualquer tipo de ligação, sem limitações";
                break;

            case "vivo-ilimitado-fixo-brasil-movel-local":
                 $tituloHeader = "Vivo Ilimitado Fixo Brasil Móvel Local - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO ILIMITADO FIXO BRASIL MÓVEL LOCAL";          
                 $descricao = "Com o plano ilimitado fixo Brasil, você consegue ter a liberdade que sempre desejou, pois te permite fazer ligação para qualquer fixo e celular Vivo";
                break;

            case "vivo-ilimitado-fixo-local":
                 $tituloHeader = "Vivo Ilimitado Fixo Local - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO ILIMITADO FIXO LOCAL";          
                 $descricao = "Diferente dos aparelhos móveis, os telefones fixos possuem planos com preços bem menores que os de celulares, como o plano ilimitado fixo local, por exemplo";
                break;

            case "vivo-ilimitado-fixo-movel-local":
                 $tituloHeader = "Vivo Ilimitado Fixo Móvel Local - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO ILIMITADO FIXO MÓVEL LOCAL";          
                 $descricao = "E se você pudesse ter duas coisas essenciais, mas com um preço tão pequeno, tão pequeno que talvez nem sequer faça diferença no seu bolso, você acreditaria?";
                break;

            case "vivo-tv-full-hd-101-canais":
                 $tituloHeader = "Vivo TV Full HD 101 Canais - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO TV FULL HD 101 CANAIS";          
                 $descricao = "Diversas opções de planos de televisão da Vivo, está fazendo com que o valor se torne cada vez mais amigo, cabendo em todos os bolsos.";
                break;

            case "vivo-tv-super-hd-39-canais":
                 $tituloHeader = "Vivo TV Super HD 39 Canais - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO TV SUPER HD 39 CANAIS";          
                 $descricao = "Para você que já não aguenta mais assistir aos poucos canais disponíveis e quer uma programação mais diversificada, eu te aconselho fortemente a Super HD";
                break;

            case "vivo-tv-super-hd-futebol":
                 $tituloHeader = "Vivo TV Super HD Futebol - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO TV SUPER HD FUTEBOL";          
                 $descricao = "Esse plano é perfeito para a família que adora acompanhar os jogos do time de coração ou para aquele casal que não perde um jogo se quer";
                break;


             case "vivo-tv-ultimate-hd-85-canais":
                 $tituloHeader = "Vivo TV Ultimate HD 85 CANAIS - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO TV ULTIMATE HD 85 CANAIS";          
                 $descricao = "O Ultimate HD é ideal para você que gosta de tudo um pouquinho quando o assunto é a programação, pois são onze canais de esporte, sendo que oito em HD";
                break;

             case "vivo-tv-ultimate-hd-futebol":
                 $tituloHeader = "Vivo TV Ultimate HD Futebol - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO TV ULTIMATE HD FUTEBOL";          
                 $descricao = "Se você não quer perder a partida do seu time nem quando alguém está usando a sala para assistir novela, então, o Ultimate HD Futebol é o plano para você";
                break;

             case "vivo-tv-ultra-hd-61-canais":
                 $tituloHeader = "Vivo TV Ultra HD 61 CANAIS - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO TV ULTRA HD 61 CANAIS";          
                 $descricao = "Diferente dos outros pacotes, o Ultra HD é ideal para quem tem família com crianças, visto que contém a maior programação de canais infantis da categoria";
                break;

             case "vivo-tv-ultra-hd-futebol":
                 $tituloHeader = "Vivo TV Ultra HD Futebol - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO TV ULTRA HD FUTEBOL";          
                 $descricao = "Com um combo 3 em 1 do Ultra HD Futebol, você pode ter acesso a uma quantidade maior de canais, maior do que o econômico";
                break;

             case "vivo-hd-tv":
                 $tituloHeader = "Vivo HD TV - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO HD TV";          
                 $descricao = "A Vivo HD TV oferece uma programação diferenciada, por meio de pacotes diversificados com o melhor custo benefício. Conheça mais.";
                break;

             case "vivo-sao-jose-do-rio-preto":
                 $tituloHeader = "Vivo São José do Rio Preto - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO SÃO JOSÉ DO RIO PRETO";   
                 $cidade = "São José do Rio Preto";       
                 $descricao = "Vivo São José do Rio Preto tem serviços em TV por assinatura,Internet Vivo Speedy Fibra e telefonia fixa e móvel, confira combos Vivo São José do Rio Preto";
                break;

             case "vivo-praia-grande":
                 $tituloHeader = "Vivo Praia Grande - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO PRAIA GRANDE"; 
                 $cidade = "Praia Grande";         
                 $descricao = "Vivo Praia Grande tem os melhores serviços em TV por assinatura, internet banda larga Vivo Speedy Fibra e telefonia fixa e móvel, combos Vivo Praia Grande";
                break;

             case "gvt-itaquaquecetuba":
                 $tituloHeader = "GVT | Vivo Itaquaquecetuba - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "GVT | Vivo ITAQUAQUECETUBA";  
                 $cidade = "Itaquaquecetuba";        
                 $descricao = "Vivo + GVT Itaquaquecetuba tem os melhores serviços em TV por assinatura, internet e telefonia fixa e móvel, confira combos Vivo GVT em Itaquaquecetuba";
                break;

             case "vivo-ribeirao-pires":
                 $tituloHeader = "Vivo Ribeirão Pires - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO RIBEIRÃO PIRES";         
                 $cidade = "Ribeirão Pires"; 
                 $descricao = "Vivo Ribeirão Pires tem os melhores serviços em TV por assinatura, internet e telefonia fixa e móvel, confira combos Vivo em Ribeirão Pires";
                break;

             case "vivo-sao-caetano-do-sul":
                 $tituloHeader = "Vivo São Caetano do Sul - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO SÃO CAETANO DO SUL"; 
                 $cidade = "São Caetano do Sul";         
                 $descricao = "Vivo São Caetano do sul tem os melhores serviços em TV por assinatura, internet banda larga e telefonia fixa e móvel do país, confira combos Vivo";
                break;

             case "vivo-ribeirao-preto":
                 $tituloHeader = "Vivo Ribeirão Preto - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO RIBEIRÃO PRETO";  
                 $cidade = "Ribeirão Preto";        
                 $descricao = "Vivo Ribeirao Preto tem os melhores serviços em TV por assinatura, internet e telefonia fixa e móvel, confira combos Vivo em Ribeirão Preto";
                break;

             case "vivo-campinas":
                 $tituloHeader = "Vivo Campinas - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO CAMPINAS";       
                 $cidade = "Campinas";   
                 $descricao = "Vivo Campinas e região, tem os melhores serviços em TV por assinatura, internet fibra, banda larga, telefonia fixa e móvel do país, confira combos Vivo";
                break;

             case "vivo-guarulhos":
                 $tituloHeader = "Vivo Guarulhos - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO GUARULHOS";  
                 $cidade = "Guarulhos";        
                 $descricao = "Vivo Guarulhos tem os melhores serviços em TV por assinatura, internet fibra, banda larga e telefonia fixa e móvel, confira combos Vivo em Guarulhos";
                break;

             case "vivo-araraquara":
                 $tituloHeader = "Vivo Araraquara - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO ARARAQUARA";  
                 $cidade = "Araraquara";        
                 $descricao = "Vivo Araraquara tem os melhores serviços em TV por assinatura, internet fibra, banda larga e telefonia fixa e móvel, confira combos Vivo em Araraquara";
                break;

             case "vivo-taubate":
                 $tituloHeader = "Vivo Taubaté - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO TAUBATÉ";
                 $cidade = "Taubaté";         
                 $descricao = "Vivo Taubaté tem os melhores serviços em TV por assinatura, internet banda larga e telefonia fixa e móvel, confira combos Vivo em Taubaté";
                break;

             case "vivo-jacarei":
                 $tituloHeader = "Vivo Jacareí - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO JACAREÍ"; 
                 $cidade = "Jacareí";         
                 $descricao = "Vivo Jacareí tem os melhores serviços em TV por assinatura, internet banda larga e telefonia fixa e móvel, confira combos Vivo em Jacareí";
                break;

             case "vivo-americana":
                 $tituloHeader = "Vivo Americana - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO AMERICANA"; 
                 $cidade = "Americana";         
                 $descricao = "Vivo Americana tem os melhores serviços em TV por assinatura, Vivo Internet Fibra, e telefonia fixa e móvel, confira combos Vivo em Americana";
                break;

             case "vivo-diadema":
                 $tituloHeader = "Vivo Diadema - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO DIADEMA";
                 $cidade = "Diadema";         
                 $descricao = "Vivo Diadema tem os melhores serviços em TV por assinatura,internet banda larga Vivo Speedy Fibra e telefonia fixa e móvel do país, combos Vivo em Diadema";
                break;

             case "vivo-hortolandia":
                 $tituloHeader = "Vivo Hortolândia - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO HORTOLÂNDIA";   
                 $cidade = "Hortolândia";       
                 $descricao = "Vivo Hortolândia tem os melhores serviços em TV por assinatura, internet banda larga e telefonia fixa e móvel, confira combos Vivo em Hortolândia";
                break;

             case "vivo-cotia":
                 $tituloHeader = "Vivo Cotia - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO COTIA";    
                 $cidade = "Cotia";      
                 $descricao = "Vivo Cotia tem os melhores serviços em TV por assinatura, internet banda larga e telefonia fixa e móvel, confira combos Vivo em Cotia";
                break;

             case "vivo-sao-vicente":
                 $tituloHeader = "Vivo São Vicente - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO SÃO VICENTE"; 
                 $cidade = "São Vicente";         
                 $descricao = "Vivo São Vicente tem os melhores serviços em TV por assinatura, internet fibra banda larga e telefonia fixa e móvel, confira combos Vivo em São Vicente";
                break;

             case "vivo-sao-paulo":
                 $tituloHeader = "Vivo São Paulo - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO SÃO PAULO"; 
                 $cidade = "São Paulo";         
                 $descricao = "Vivo São Paulo tem os melhores serviços em TV por assinatura, internet fibra, banda larga e telefonia fixa e móvel, confira combos Vivo São Paulo";
                break;

             case "vivo-sao-jose-dos-campos":
                 $tituloHeader = "Vivo São José dos Campos - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO SÃO JOSÉ DOS CAMPOS"; 
                 $cidade = "São José dos Campos";         
                 $descricao = "Vivo São José dos Campos tem os melhores serviços em TV por assinatura, internet banda larga e telefonia fixa e móvel, confira combos Vivo";
                break;

             case "vivo-igarata":
                 $tituloHeader = "Vivo Igaratá - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO IGARATÁ";    
                 $cidade = "Igaratá";      
                 $descricao = "Vivo Igaratá tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Igaratá";
                break;

             case "vivo-ibiuna":
                 $tituloHeader = "Vivo Ibiúna - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO IBIÚNA";    
                 $cidade = "Ibiúna";      
                 $descricao = "Vivo Ibiúna tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Ibiúna";
                break;

             case "vivo-ibitinga":
                 $tituloHeader = "Vivo Ibitinga - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO IBITINGA";   
                 $cidade = "Ibitinga";       
                 $descricao = "Vivo Ibitinga tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Ibitinga";
                break;

             case "vivo-guariba":
                 $tituloHeader = "Vivo Guariba - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO GUARIBA";  
                 $cidade = "Guariba";        
                 $descricao = "Vivo Guariba tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Guariba";
                break;

             case "vivo-guarei":
                 $tituloHeader = "Vivo Guarei - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO GUAREI";  
                 $cidade = "Guarei";        
                 $descricao = "Vivo Guarei tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Guarei";
                break;

             case "vivo-guararema":
                 $tituloHeader = "Vivo Guararema - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO GUARAREMA";  
                 $cidade = "Guarema";        
                 $descricao = "Vivo Guararema tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Guararema";
                break;

             case "vivo-guararapes":
                 $tituloHeader = "Vivo Guararapes - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO GUARARAPES";  
                 $cidade = "Guararapes";        
                 $descricao = "Vivo Guararapes tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Guararapes";
                break;

             case "vivo-guapiara":
                 $tituloHeader = "Vivo Guapiara - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO GUAPIARA";     
                 $cidade = "Guapiara";     
                 $descricao = "Vivo Guapiara tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Guapiara";
                break;

             case "vivo-garca":
                 $tituloHeader = "Vivo Garça - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO GARÇA";   
                 $cidade = "Garça";       
                 $descricao = "Vivo garça tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em garça";
                break;

            case "vivo-fernandopolis":
                 $tituloHeader = "Vivo Fernandópolis - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO FERNANDÓPOLIS";  
                 $cidade = "Fernandópolis";        
                 $descricao = "Vivo Fernandópolis tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Fernandópolis";
                break;

             case "vivo-dracena":
                 $tituloHeader = "Vivo Dracena - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO DRACENA";   
                 $cidade = "Dracena";       
                 $descricao = "Vivo Dracena tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Dracena";
                break;

             case "vivo-cravinhos":
                 $tituloHeader = "Vivo Cravinhos - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO CRAVINHOS";   
                 $cidade = "Cravinhos";       
                 $descricao = "Vivo Cravinhos tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Cravinhos";
                break;

            case "vivo-cesario-lange":
                 $tituloHeader = "Vivo Cesário Lange - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO CESÁRIO LANGE";  
                 $cidade = "Cesário Lange";        
                 $descricao = "Vivo Cesário Lange tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Cesário Lange";
                break;

             case "vivo-cerquilho":
                 $tituloHeader = "Vivo Cerquilho - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO CERQUILHO"; 
                 $cidade = "Cerquilho";         
                 $descricao = "Vivo Cerquilho tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Cerquilho";
                break;

             case "vivo-capela-do-alto":
                 $tituloHeader = "Vivo Capela do Alto - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO CAPELA DO ALTO"; 
                 $cidade = "Capela do Alto";         
                 $descricao = "Vivo Capela do Alto tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Capela do Alto";
                break;

            case "vivo-capao-bonito":
                 $tituloHeader = "Vivo Capão Bonito - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO CAPÃO BONITO";     
                 $cidade = "Capão Bonito";     
                 $descricao = "Vivo Capão Bonito tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Capão Bonito";
                break;

             case "vivo-buri":
                 $tituloHeader = "Vivo Buri - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO BURI";   
                 $cidade = "Buri";       
                 $descricao = "Vivo Buri tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Buri";
                break;

             case "vivo-bom-sucesso-de-itarare":
                 $tituloHeader = "Vivo Bom Sucesso de Itararé - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO BOM SUCESSO DE ITARARÉ";   
                 $cidade = "Bom Sucesso de Itararé";      
                 $descricao = "Vivo Bom sucesso de Itararé tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, combos Vivo em Bom sucesso de Itararé";
                break;

            case "vivo-boituva":
                 $tituloHeader = "Vivo Boituva - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO BOITUVA";    
                 $cidade = "Boituva";      
                 $descricao = "Vivo Boituva tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Boituva";
                break;

             case "vivo-biritiba-mirim":
                 $tituloHeader = "Vivo Biritiba Mirim - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO BIRITIBA MIRIM"; 
                 $cidade = "Bititiba Mirim";         
                 $descricao = "Vivo Biritiba Mirim tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Biritiba Mirim";
                break;

             case "vivo-barretos":
                 $tituloHeader = "Vivo Barretos - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO BARRETOS"; 
                 $cidade = "Barretos";         
                 $descricao = "Vivo Barretos tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Barretos";
                break;

            case "vivo-barra-do-turvo":
                 $tituloHeader = "Vivo Barra do Turvo - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO BARRA DO TURVO";    
                 $cidade = "Barra do Turvo";      
                 $descricao = "Vivo Barra do Turvo tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Barra do Turvo";
                break;

             case "vivo-barra-do-chapeu":
                 $tituloHeader = "Vivo Barra do Chapéu - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO BARRA DO CHAPÉU";  
                 $cidade = "Barra do Chapéu";        
                 $descricao = "Vivo Barra do Chapéu tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Barra do Chapéu";
                break;

             case "vivo-barra-bonita":
                 $tituloHeader = "Vivo Barra Bonita - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO BARRA BONITA";      
                 $cidade = "Barra Bonita";    
                 $descricao = "Vivo Barra Bonita tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Barra Bonita";
                break;

            case "vivo-bariri":
                 $tituloHeader = "Vivo Bariri - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO BARIRI";    
                 $cidade = "Bariri";      
                 $descricao = "Vivo Bariri tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Bariri";
                break;

             case "vivo-barao-de-antonina":
                 $tituloHeader = "Vivo Barão de Antonina - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO BARÃO DE ANTONINA";  
                 $cidade = "Barão de Antonina";         
                 $descricao = "Vivo Barão de Antonina tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Barão de Antonina";
                break;

             case "vivo-avare":
                 $tituloHeader = "Vivo Avaré - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO AVARÉ";       
                  $cidade = "Avaré";   
                 $descricao = "Vivo Avaré tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Avaré";
                break;

            case "vivo-assis":
                 $tituloHeader = "Vivo Assis - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO ASSIS";  
                $cidade = "Assis";        
                 $descricao = "Vivo Assis tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Assis";
                break;

             case "vivo-aracoiaba-da-serra":
                 $tituloHeader = "Vivo Araçoiaba da Serra - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO ARAÇOIABA DA SERRA";   
                $cidade = "Araçoiaba da Serra";       
                 $descricao = "Vivo Araçoiaba da Serra tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Araçoiaba da Serra";
                break;

             case "vivo-apiai":
                 $tituloHeader = "Vivo Apiai - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO APIAI";
                 $cidade = "Apiai";          
                 $descricao = "Vivo Apiai tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Apiai";
                break;

            case "vivo-angatuba":
                 $tituloHeader = "Vivo Angatuba - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO ANGATUBA"; 
                 $cidade = "Angatuba";         
                 $descricao = "Vivo Angatuba tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Angatuba";
                break;

             case "vivo-andradina":
                 $tituloHeader = "Vivo Andradina - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO ANDRADINA";  
                 $cidade = "Andradina";        
                 $descricao = "Vivo Andradina tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Andradina";
                break;

             case "vivo-alambari":
                 $tituloHeader = "Vivo Alambari - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO ALAMBARI"; 
                 $cidade = "Alambari";         
                 $descricao = "Vivo Alambari tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Alambari";
                break;

            case "vivo-agudos":
                 $tituloHeader = "Vivo Agudos - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO AGUDOS";  
                 $cidade = "Agudos";        
                 $descricao = "Vivo Agudos tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Agudos";
                break;

             case "vivo-adamantina":
                 $tituloHeader = "Vivo Adamantina - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO ADAMANTINA";     
                 $cidade = "Adamantina";     
                 $descricao = "Vivo Adamantina tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Adamantina";
                break;

            case "vivo-sertaozinho":
                 $tituloHeader = "Vivo Sertãozinho - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO SERTÃOZINHO"; 
                 $cidade = "Sertãozinho";         
                 $descricao = "Vivo Sertãozinho tem os melhores serviços em TV por assinatura, Vivo Speedy, e telefonia fixa e móvel, confira combos Vivo em Sertãozinho";
                break;

            case "vivo-botucatu":
                 $tituloHeader = "Vivo Botucatu - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO BOTUCATU";  
                 $cidade = "Botucatu";        
                 $descricao = "Vivo Botucatu tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Botucatu";
                break;

             case "vivo-ferraz-de-vasconcelos":
                 $tituloHeader = "Vivo Ferraz de Vasconcelos - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO FERRAZ DE VASCONCELOS"; 
                 $cidade = "Ferraz de Vasconcelos";         
                 $descricao = "Vivo Ferraz de Vasconcelos tem os melhores serviços em TV por assinatura, Vivo Speedy, telefonia fixa e móvel, confira combos Vivo em Ferraz de Vasconcelos";
                break;

             case "vivo-aracatuba":
                 $tituloHeader = "Vivo Araçatuba - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO ARAÇATUBA";    
                 $cidade = "Araçatuba";      
                 $descricao = "Vivo Araçatuba tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Vivo em Araçatuba";
                break;

            case "vivo-marilia":
                 $tituloHeader = "Vivo Marília - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO MARÍLIA";     
                 $cidade = "Marília";     
                 $descricao = "Vivo Marília tem os melhores serviços em TV por assinatura, Vivo Speedy, e telefonia fixa e móvel, confira combos Vivo em Marília";
                break;

            case "vivo-itatiba":
                 $tituloHeader = "Vivo Itatiba - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO ITATIBA";    
                 $cidade = "Itatiba";      
                 $descricao = "Vivo Itatiba tem os melhores serviços em TV por assinatura, internet banda larga e telefonia fixa e móvel, confira combos Vivo em Itatiba";
                break;

             case "vivo-sao-carlos":
                 $tituloHeader = "Vivo São Carlos - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO SÃO CARLOS"; 
                 $cidade = "São Carlos";        
                 $descricao = "Vivo São Carlos tem os melhores serviços em TV por assinatura, Vivo Speedy, e telefonia fixa e móvel, confira combos Vivo em São Carlos";
                break;

             case "vivo-presidente-prudente":
                 $tituloHeader = "Vivo Presidente Prudente - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO PRESIDENTE PRUDENTE";   
                 $cidade = "Presidente Prudente";       
                 $descricao = "Vivo + GVT Presidente Prudente tem os melhores serviços em TV por assinatura, internet speedy e telefonia fixa e móvel, confira combos Presidente Prudente";
                break;

            case "vivo-votorantim":
                 $tituloHeader = "Vivo Votorantim - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO VOTORANTIM";  
                 $cidade = "Votorantim";        
                 $descricao = "Vivo Votorantim tem os melhores serviços em TV por assinatura, internet fibra e telefonia fixa e móvel, confira combos Vivo em Votorantim";
                break;

            case "vivo-sao-bernardo-do-campo":
                 $tituloHeader = "Vivo | GVT São Bernardo do Campo - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO | GVT SÃO BERNARDO DO CAMPO";       
                 $cidade = "São Bernardo do Campo";   
                 $descricao = "Vivo + GVT São Bernardo do Campo tem os melhores serviços em TV por assinatura, internet e telefonia fixa e móvel, combos Vivo GVT em São Bernardo do Campo";
                break;

             case "vivo-mogi-das-cruzes":
                 $tituloHeader = "Vivo | GVT Mogi das Cruzes - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO | GVT MOGI DAS CRUZES";  
                 $cidade = "Mogi das Cruzes";        
                 $descricao = "Vivo + GVT Mogi das Cruzes tem os melhores serviços em TV por assinatura, internet e telefonia fixa e móvel, confira combos Vivo GVT em Mogi das Cruzes";
                break;

             case "vivo-santos":
                 $tituloHeader = "Vivo | GVT Santos - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO | GVT SANTOS";      
                 $cidade = "Santos";    
                 $descricao = "Vivo + GVT Santos tem os melhores serviços em TV por assinatura, internet e telefonia fixa e móvel, confira combos Vivo GVT em Santos";
                break;

            case "vivo-santo-andre":
                 $tituloHeader = "Vivo | GVT Santo André - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO | GVT SANTO ANDRÉ";   
                 $cidade = "Santo André";       
                 $descricao = "Vivo + GVT Santo André tem os melhores serviços em TV por assinatura, internet e telefonia fixa e móvel, confira combos Vivo GVT em Santo André";
                break;

            case "vivo-varzea-paulista":
                 $tituloHeader = "Vivo | GVT Várzea Paulista - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO | GVT VÁRZEA PAULISTA"; 
                 $cidade = "Várzea Paulista";         
                 $descricao = "Vivo + GVT Várzea Paulista tem os melhores serviços em TV por assinatura, internet vivo speedy e telefonia fixa e móvel, confira combos em Várzea Paulista";
                break;

             case "vivo-maua":
                 $tituloHeader = "Vivo | GVT Mauá - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO | GVT MAUÁ";    
                 $cidade = "Mauá";      
                 $descricao = "Vivo + GVT Mauá tem os melhores serviços em TV por assinatura, internet banda larga e telefonia fixa e móvel, confira combos Vivo GVT em Mauá";
                break;

             case "vivo-jundiai":
                 $tituloHeader = "Vivo | GVT Jundiaí - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO | GVT JUNDIAÍ";
                 $cidade = "Jundiaí";          
                 $descricao = "Vivo + GVT Jundiaí tem os melhores serviços em TV por assinatura, internet banda larga e telefonia fixa e móvel, confira combos Vivo GVT em Jundiaí";
                break;

            case "vivo-osasco":
                 $tituloHeader = "Vivo | GVT Osasco - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO | GVT OSASCO";   
                 $cidade = "Osasco";       
                 $descricao = "Vivo + GVT Osasco tem os melhores serviços em TV por assinatura, internet banda larga e telefonia fixa e móvel, confira combos Vivo GVT em Osasco";
                break;

            case "vivo-indaiatuba":
                 $tituloHeader = "Vivo | GVT Indaiatuba - Internet Fibra, HD TV e Vivo Fixo<";     
                 $tituloPagina = "VIVO | GVT INDAIATUBA"; 
                 $cidade = "Indaiatuba";         
                 $descricao = "Vivo + GVT Indaiatuba tem os melhores serviços em TV por assinatura, internet banda larga e telefonia fixa e móvel, confira combos Vivo GVT em Indaiatuba";
                break;

             case "vivo-piracicaba":
                 $tituloHeader = "Vivo | GVT Piracicaba - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO | GVT PIRACICABA";
                 $cidade = "Piracicaba";          
                 $descricao = "Vivo + GVT Piracicaba tem os melhores serviços em TV por assinatura, internet banda larga e telefonia fixa e móvel, confira combos Vivo GVT em Piracicaba";
                break;

             case "vivo-bauru":
                 $tituloHeader = "Vivo Bauru - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO BAURU";
                 $cidade = "Bauru";
                 $descricao = "Vivo Bauru tem os melhores serviços em TV por assinatura, internet fibra, banda larga speedy e telefonia fixa e móvel, confira combos Vivo em Bauru";
                break;

            case "vivo-pindamonhangaba":
                 $tituloHeader = "Vivo Pindamonhangaba - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO PINDAMONHANGABA";
                 $cidade = "Pindamonhangava";            
                 $descricao = "Vivo Pindamonhangaba tem os melhores serviços em TV por assinatura, internet fibra e telefonia fixa e móvel, confira combos Vivo em Pindamonhangaba";
                break;

            case "vivo":
                 $tituloHeader = "Vivo - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "VIVO";          
                 $descricao = "A Vivo oferece planos de telefonia móvel, fixa, internet e TV por assinatura. Conheça nossos combos Vivo HD TV, Vivo Fibra e Vivo Fixo";
                break;

             case "internet":
                 $tituloHeader = "Internet - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "INTERNET";          
                 $descricao = "O Supremo Tribunal Federal (STF) decidiu no dia 13 de outubro de 2016 pela incidência de ICMS sobre o valor referente à assinatura mensal sem franquia de minutos.";
                break;

             case "telefone":
                 $tituloHeader = "Telefone - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "TELEFONE";          
                 $descricao = "Fale ilimitado com fixos de qualquer operadora e celulares Vivo da sua cidade";
                break;

            case "televisao":
                 $tituloHeader = "Televisão - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "TELEVISÃO";          
                 $descricao = "TV por Assinatura (Super HD) e Telefonia Fixa (Fixo e Movel Local) no combo a partir de R$219,88 por ciclo";
                break;

             case "cadastro-concluido":
                 $tituloHeader = "Cadastro Concluído - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "Cadastro Concluído";          
                 $descricao = "Obrigado por se Cadastrar! Entraremos em contato em Breve";
                break;

            case "concluido":
                 $tituloHeader = "Concluído - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "Cadastro Concluído";          
                 $descricao = "Obrigado por se Cadastrar! Entraremos em contato em Breve";
                break;

            case "obrigado":
                 $tituloHeader = "Obrigado - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "Cadastro Concluído";          
                 $descricao = "Obrigado por se Cadastrar! Entraremos em contato em Breve";
                break;

            case "powercombo.com.br":
                 $tituloHeader = "Vivo - Assine agora - Internet Fibra, HD TV e Vivo Fixo";     
                 $tituloPagina = "CONHEÇA OS PLANOS";          
                 $descricao = "Vivo Assine já - Vivo HDTV, Vivo Internet Fibra, Vivo Speedy, Vivo Fixo ou nosso Vivo combo disponível para Ribeirão Preto e região";
                break;

        }

     ?>