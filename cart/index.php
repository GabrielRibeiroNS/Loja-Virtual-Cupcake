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
            <?php
            $ler = new Ler();
            $ler->Leitura('produtos', "ORDER BY data DESC");
            if ($ler->getResultado()) {
                foreach ($ler->getResultado() as $produto) {
                    $produto = (object) $produto;


            ?>
                    <!-- Inicio Produto -->
                    <form action="filtros/criar.php" method="post">
                        <div class="corpoProduto">
                            <div class="imgProduto">
                                <img src="<?= HOME ?>/uploads/<?=$produto->capa ?>" alt="<?=$produto->nome?>" class="produtoMiniatura">
                            </div>
                            <div class="titulo">
                                <p><?= $produto->nome ?></p>
                                <h2>R$ <?= $produto->valor ?></h2>
                                <input type="hidden" name="id_produto" value="<?=$produto->id?>">
                                <input type="hidden" name="valor" value="<?=$produto->valor?>">
                                <button type="submit" class="button" name="addcarrinho">Adicionar ao Carrinho</button>
                            </div>
                        </div>
                    </form>
                    <!-- Fim Produto -->


                    <!-- Fim Linha Produto Site -->

            <?php
                }
            }
            ?>
        </div>




        <!-- BARRA LATERAL -->
        <div class="barraLateral">

            <div class="topoCarrinho">
                <p>Meu Carrinho</p>
            </div>
            <!-- FIM BARRA LATERAL -->

            <!-- INICIO PRODUTO CARRINHO -->
            <div class="item-carrinho">
                <div class="linha-da-imagem">
                    <img src="assets/img/produto-1.jpg" alt="" class="img-carrinho">
                </div>
                <p>Curso PHP</p>
                <h2>497</h2>
                <form action="filtros/excluir.php" method="post">
                    <input type="hidden" name="id_produto" value="">
                    <button type="submit" style="border:none; background:none; "> <i class="fa fa-trash-o"></i> </button>
                </form>
            </div>
            <!-- FIM PRODUTO CARRINHO -->

            <!-- INICIO RODAPE -->
            <div class="item-carrinho-vazio">Seu Carrinho está Vazio!</div>

            <div class="rodape">
                <h3>Total</h3>
                <h2>R$ 497</h2>
            </div>
            <!-- FIM RODAPE -->

        </div>

    </div>

</body>









































<!-- Fim Conteudo do Site Nao editei hj -->
<!-- Xampp -->
<!-- https://localhost/Loja-Virtual-Cupcake/cart/ -->

</body>

</html>