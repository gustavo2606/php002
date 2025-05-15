<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($senha == 312112){
    echo "senha correta,pode entrar";
    header("location: liberado.php");
}else{
    echo "acesso bloqueado";
    header("location: bloqueado.php");
}
?>