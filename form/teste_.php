

<?php

//$postData['NOMECAMPO']='m2center';

function pegaValor($valor) {
    return isset($_POST[$valor]) ? $_POST[$valor] : '';
}

$nome = pegaValor("nome");
$telefone = pegaValor("telefone");
$site = pegaValor("site");

$nome = str_replace(" ","%20", $nome);
$telefone = str_replace("-","", $telefone);

$ch = curl_init();

curl_setopt($ch,CURLOPT_URL,'http://177.103.131.194:8003/contact/'. $telefone);

curl_setopt($ch,CURLOPT_USERPWD, 'm2center:callback');

curl_setopt($ch,CURLOPT_HEADER,0);

curl_setopt($ch,CURLOPT_POST,1);

curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));

//curl_setopt($ch,CURLOPT_POSTFIELDS,$postData);

curl_setopt($ch,CURLOPT_POSTFIELDS,'contact_name='.$nome.'&queue=clicksite&billing_group_id=1&to[1]='.$telefone.'');

curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);

curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);

curl_setopt($ch,CURLOPT_TIMEOUT,20);

$response=curl_exec($ch);

curl_close($ch);



echo($response);







if($site  == "powercombo"){
	?> 
<script> location.replace("http://powercombo.com.br/obrigado/"); </script>

<?php
}else{
?>

<script> location.replace("http://www.combotelefonetvinternet.com.br/"); </script>

<?php
	}
?>


