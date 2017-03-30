<?php
 
function pegaValor($valor) {
    return isset($_POST[$valor]) ? $_POST[$valor] : '';
}
 
function validaEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
$nome = pegaValor("nome");
$telefone = pegaValor("telefone");
$queue = "clicksite";

curl -i -u m2center:callback  -d "contact_name='.$nome.'&queue='.$queue.'&billing_group_id=1&to[1]='.$telefone" http://177.103.131.194:8003/contact/post_site/100;

// header('Location: http://177.103.131.194:8003/queues/curl -i -u m2center:callback');

 
//$email_servidor = "email@servidor.com";
//$para = "seu@email.com";
//$de = pegaValor("email");


 ?>