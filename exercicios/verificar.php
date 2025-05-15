<?php
$idade = $_POST['idade'];

if($idade>18){
    echo "voce tem mais de 18 anos";
}else if ($idade < 18){
    echo "voce tem menos de 18 anos";
}else{
    echo "voce tem 18 anos";
}
?>