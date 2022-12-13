<?php

function EncryptData($data){
    $FisrtKey= base64_decode($_ENV['KEYTWO']);
    $SecondKey=$_ENV['KEYONE'];
    $method="camellia-256-ofb";
    $iv_length=openssl_cipher_iv_length($method);
    $iv=openssl_random_pseudo_bytes($iv_length);
    $firstCrypt=openssl_encrypt($data,$method,$FisrtKey,OPENSSL_RAW_DATA,$iv);
    $ouput=base64_encode($iv.$firstCrypt);
    $ouput=str_replace("+","[plus]",$ouput);
    return $ouput;

}
function DecryptData($data){
    $FisrtKey= base64_decode($_ENV['KEYTWO']);
    $SecondKey=$_ENV['KEYONE'];
    $data=str_replace("[plus]","+",$data);
    $mix=base64_decode($data);
    $method="camellia-256-ofb";
    $iv_length=openssl_cipher_iv_length($method);
    $iv=substr($mix,0,$iv_length);
    $data=substr($mix,$iv_length);
    $decrypt=openssl_decrypt($data,$method,$FisrtKey,OPENSSL_RAW_DATA,$iv);
    return $decrypt;
}
