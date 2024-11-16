<?php
ob_start();
require('../sheep_core/config.php');

echo implode($_POST);


$del = filter_input(INPUT_POST, 'id_unico', FILTER_VALIDATE_INT);

if(isset($del)){

    $excluir = new Excluir();
    $excluir->Remover('produtos', "WHERE id = {$del}");
    
    if($excluir->getResultado()){
        header("Location: ".HOME."/index.php?sucesso=true");
    }else{
        header("Location: ".HOME."/index.php?erro=true");
    }
}

?>