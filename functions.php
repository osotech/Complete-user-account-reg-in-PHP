<?php

function clean_input($data){
  if (!empty($data)) {
  $string = trim($data);
  $string = stripslashes($string);
  $string = filter_var($string,FILTER_SANITIZE_STRING);
  $string = htmlspecialchars($string);
  return $string;
  }else{
    return "";
  }
}

function confirmationCode($len){
  $code = "abcdefghijklmnopqrstuvwxyz0123456789";
  $code = str_shuffle($code);
  $code = md5(time().substr($code,0,$len));
  return $code;

}

function generateToken(){
  $random = str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789");
  $string = md5(time().substr($random,0,4));
  $string = date("Ymdhis").$string;
  return $string;
}

 ?>
