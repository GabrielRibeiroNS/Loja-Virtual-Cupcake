<?php

ob_start();
require('../sheep_core/config.php');

$carrinho = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if(isset($carrinho['criarcarrinho'])){
    unset($carrinho['criarcarrinho']);

    $salvar = new Carrinho();
    $salvar->AddCarrinho($carrinho);

    if($salvar->getResultado($data)){
        header("location: ".HOME."/index.php?sucesso=true");    
    }else{
        header("location: ".HOME."/index.php?erro=true"); 
    }

    //var_dump($carrinho); MOSTRA RECEBENDO OS ARQUIVOS E SUAS ESPECIFICAÇÔES

}


?>