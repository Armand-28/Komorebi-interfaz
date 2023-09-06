<?php
if(!empty($_POST)){

    $numb=$_POST["numb"];
    $contra=$_POST["contra"];
    $captcha=$_POST["g-recaptcha-response"];
    $secret='6Lcb9nknAAAAAJ8aouGGquPrx5H9qw-c7XFAABQK';
}
if(!$captcha){
    echo"Por favor verifica el captcha";
}
$response= file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");

?>