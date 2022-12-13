<?php
include 'key.phtml';


function secured_encrypt($data){

    $KeyOne="cd659284709c11eda1ebb0242ac120002";
    // $KeySeconde="7e74bc1ea9c6'0659284709c11eda1e24589034fa4a18a65a58";

$first_key = base64_decode($KeyOne);
// $second_key = base64_decode($KeySeconde);   
   
$method = "aes-256-cbc";   
$iv_length = openssl_cipher_iv_length($method);
$iv = openssl_random_pseudo_bytes($iv_length);
       
$first_encrypted = openssl_encrypt($data,$method,$first_key, OPENSSL_RAW_DATA ,$iv);   
// $second_encrypted = hash_hmac('sha3-512', $first_encrypted, $second_key, TRUE);
           
$output = base64_encode($iv.$first_encrypted);   
return $output."=";       
}

echo secured_encrypt("bonjour");

function secured_decrypt($input){
    $KeyOne="cd659284709c11eda1ebb0242ac120002";
    // $KeySeconde="7e74bc1ea9c6'0659284709c11eda1e24589034fa4a18a65a58";

$first_key = base64_decode($KeyOne);
// $second_key = base64_decode($KeySeconde);         
$mix = base64_decode($input);
       
$method = "aes-256-cbc";   
$iv_length = openssl_cipher_iv_length($method);
           
$iv = substr($mix,0,$iv_length);
// $second_encrypted = substr($mix,$iv_length,64);
$first_encrypted = substr($mix,$iv_length);
           
$data = openssl_decrypt($first_encrypted,$method,$first_key,OPENSSL_RAW_DATA,$iv);
// $second_encrypted_new = hash_hmac('sha3-512', $first_encrypted, $second_key, TRUE);
   
// if (hash_equals($second_encrypted,$second_encrypted_new))
return $data;
   
// return false;
}


echo secured_decrypt(secured_encrypt("bonjour"));
?>