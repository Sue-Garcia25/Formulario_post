<?php
function saludar(){
    return "usuario regitrado correctamente";
}
function calcularIva($total){
    return $total * 0.13; 
}
function validarCuenta($user, $pwd){
    $userbd = "sue@gmail.com";
    $pwdbd = "123";
  
    $msj = "Error en la contreña y/o usuario";
    if($user==$userbd && $pwdbd == $pwdbd){
     $msj = "ok";
    }
    
  return $msj; 
}
?>