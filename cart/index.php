<?php
ob_start();
require('./sheep_core/config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vendacupcake.com.br - Gabriel Ribeiro</title>
    <link rel="stylesheet" href="../cart/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!--- Topo do Site --->
    <div class="header">
        <p class="logo">Loja Cupcake</p>
        <!--- Logo Carrinho de Compras Font Awesome --->
        <div class="cart"><i class="fa fa-shopping-cart"></i>
            <p>0</p>
        </div>
    </div>
    <!--- Fim do Topo Site --->

    <!-- Conteudo do Site -->
    <div class="container">
        <!-- Linha Produto Site -->
        <div class="linha-produtos">
            <form action="filtros/criar.php" method="post">
            <!-- Inicio Produto -->
            <div class="corpoProduto">

                <div class="imgProduto">
                    <img src="assets/img/produto-1.jpg" alt="" class="produtoMiniatura">
                </div>

                <div class="titulo">
                    <p>Curso PHP</p>
                    <h2>R$ 10,00</h2>
                    <input type="hidden" name="id_produto" value="">
                    <input type="hidden" name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho"></button>
                </div>

            </div>
            </form>
        </div>
        <!-- Fim Produto -->
    </div>
    <!-- Fim Linha Produto Site -->
    <!-- Fim Conteudo do Site Nao editei hj -->
    <!-- Xampp -->
    <!-- https://localhost/Loja-Virtual-Cupcake/cart/ -->

</body>

</html>