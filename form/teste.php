

<?php

//$postData['NOMECAMPO']='m2center';

function pegaValor($valor) {
    return isset($_POST[$valor]) ? $_POST[$valor] : '';
}

$ddd = pegaValor("ddd");
$nome = pegaValor("nome");
$telefone = pegaValor("telefone");
$site = pegaValor("site");

if($nome != "" &&  $telefone != ""){

$nome = str_replace(" ","%20", $nome);
$telefone = str_replace("-","", $telefone);

if($site ==""){
	$nomeSite = "combo";
}else{
	$nomeSite = $site;
}

include_once($_SERVER['DOCUMENT_ROOT'].'/wp-config.php' );
global $wpdb;
$wpdb->insert(
	'telefonemas',
	array(
		'nome' => $nome,
		'telefone' => $ddd . $telefone,
		'data' => date('Y-m-d H:i'),
		'site' => $nomeSite

	)

);



$ch = curl_init();

curl_setopt($ch,CURLOPT_URL,'http://177.103.131.194:8003/contact/'. $ddd . $telefone);

curl_setopt($ch,CURLOPT_USERPWD, 'm2center:callback');

curl_setopt($ch,CURLOPT_HEADER,0);

curl_setopt($ch,CURLOPT_POST,1);

curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));

//curl_setopt($ch,CURLOPT_POSTFIELDS,$postData);

curl_setopt($ch,CURLOPT_POSTFIELDS,'contact_name='.$nome.'&queue=clicksite&billing_group_id=1&to[1]='. $ddd . $telefone.'');
//curl_setopt($ch,CURLOPT_POSTFIELDS,'contact_name='.$nome.'&queue=callbacksip&billing_group_id=1&to[1]='. $ddd . $telefone.'');

curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);

curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);

curl_setopt($ch,CURLOPT_TIMEOUT,20);

$response=curl_exec($ch);

curl_close($ch);



echo($response);







if($site  == "powercombo"){
	?> 
<script> location.replace("http://powercombo.com.br/cadastro-concluido/"); </script>

<?php
}else{
?>

<script> location.replace("http://powercombo.com.br/"); </script>

<?php
	}
}
?>


