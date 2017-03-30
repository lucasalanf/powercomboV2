<?php

//if(!@($conexao=pg_connect ("host=pg_parceiro.postgresql.dbaas.com.br dbname=pg_parceiro port=5432 user=pg_parceiro password=m2@674"))) {
 //  print "Não foi possível estabelecer uma conexão com o banco de dados.";
//} else {

try {
      $db = new PDO(
             "mysql:host=m2center.ca3fmxffvsxd.sa-east-1.rds.amazonaws.com;dbname=m2centerV2;charset=utf8",
              "mysql_user",
              "M2mysql#"
            );
   }

catch(PDOException $e) {
    error_log($e->getMessage());
    die("A database error was encountered");
}





$dt_cadastro = date("Y-m-d H:i:s");
$nome = $_POST['nome'];
 $email = $_POST['email'];
$telefone1 = $_POST['telefone1'];
$cep = $_POST['cep'];
$nro = $_POST['nro'];
$origem = $_POST['origem'];

$ch = curl_init();

            curl_setopt($ch,CURLOPT_URL,'http://177.103.131.194:8003/contact/'. $telefone1);

            curl_setopt($ch,CURLOPT_USERPWD, 'm2center:callback');

            curl_setopt($ch,CURLOPT_HEADER,0);

            curl_setopt($ch,CURLOPT_POST,1);

            curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));

            //curl_setopt($ch,CURLOPT_POSTFIELDS,$postData);

            curl_setopt($ch,CURLOPT_POSTFIELDS,'contact_name='.$nome.'&queue=clicksite&billing_group_id=1&to[1]='. $telefone1.'');
           // curl_setopt($ch,CURLOPT_POSTFIELDS,'contact_name='.$nome.'&queue=callbacksip&billing_group_id=1&to[1]='. $telefone1.'');

            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

            curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);

            curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);

            curl_setopt($ch,CURLOPT_TIMEOUT,20);

            $response=curl_exec($ch);

            curl_close($ch);



            echo($response);




//if ($nome <> '' && $telefone1 <> '') {
   $sql = $db->exec("INSERT INTO TB_LEADS (DT_CADASTRO, NOME, EMAIL, TELEFONE1, CEP, NRO, ORIGEM) values ('$dt_cadastro', '$nome', '$email', '$telefone1', '$cep', '$nro', '$origem')");
  // $sql = ("INSERT INTO TB_LEADS (DT_CADASTRO, NOME, EMAIL, TELEFONE1, CEP, NRO, ORIGEM) values (".$dt_cadastro.", ".$nome.", ".$email.", ".$telefone1.", ".$cep.", ".$nro.", ".$origem.")");
/*	print $sql;*/
  // $result = pg_query($sql);  
//}


  
   //echo $result;  
   /* Escreve resultados até que não haja mais linhas na tabela */ 


  // pg_close($conexao); 


?>