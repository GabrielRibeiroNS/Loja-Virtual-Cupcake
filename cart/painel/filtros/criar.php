<?php

ob_start();
require('../../sheep_core/config.php');

$produto = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if(isset($produto['criarProduto'])){
    unset($produto['criarProduto']);
    $produto['capa'] = ($_FILES['capa']['tmp_name'] ? $_FILES['capa'] : null); //Se a capa existir no arquivo temporario, o mesmo recebe a foto / Caso contrário ele recebe null = nada

    $salvar = new Produtos();
    $salvar->CriarProduto($produto);

    if($salvar->getResultado()){
        header("location: ".HOME."/painel/index.php?sucesso=true")
    }

    //var_dump($produto); MOSTRA RECEBENDO OS ARQUIVOS E SUAS ESPECIFICAÇÔES

}


?>