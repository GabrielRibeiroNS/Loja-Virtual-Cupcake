<?php

ob_start();
require('../sheep_core/config.php');

$del1 = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

if(isset($del1)){

    $excluir = new Excluir();
    $excluir->Remover('produtos', "WHERE id = :id", "id={$del1}");
    if($excluir->getResultado()){
        header("Location: ".HOME."/index.php?sucesso=true");
    }else{
        header("Location: ".HOME."/index.php?erro=true");
    } 
}


?>