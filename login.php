<?php

$Login = $_GET["Usuario"];
$Senha = $_GET["Senha"];

// simula o acesso ao bd
$LoginBD = "Cliente";
$SenhaBD = "12345";

$Valido = 1;
$Invalido = 0;

if ($Login == $LoginBD && $Senha == $SenhaBD){
    echo $Valido;
}
else{
    echo $Invalido;
}