<?php
ob_start();
require('./sheep_core/config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOJA CUPCAKE by Gabriel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <?php
    $cart = new ler();
    $cart->Leitura('carrinho');
    ?>


    <!--- Topo do Site --->
    <div class="header">
        <p class="logo">Loja Cupcake</p>
        <div class="painel_button">
            <button type="submit" name="criarProduto"><a href="../cart/painel/index.php">Painel</a></button>
        </div>
        <div class="cart"><i class="fa fa-shopping-cart"></i>
            <p><?= $cart->getContaLinhas() > 0 ? $cart->getContaLinhas() : 0 ?></p>
        </div>
    </div>
    <!---Fim do Topo Site--->




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
                                <img src="<?= HOME ?>/uploads/<?= $produto->capa ?>" alt="<?= $produto->nome ?>" class="produtoMiniatura">
                            </div>
                            <div class="titulo">
                                <p><?= $produto->nome ?></p>
                                <h2>R$ <?= $produto->valor ?></h2>
                                <input type="hidden" name="id_produto" value="<?= $produto->id ?>">
                                <input type="hidden" name="valor" value="<?= $produto->valor ?>">
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



            <?php
            if ($cart->getContaLinhas() > 0) {
                foreach ($cart->getResultado() as $carts) {


                    $ler = new Ler();
                    $ler->Leitura('produtos', "WHERE id = :id ORDER BY data DESC", "id={$carts['id_produto']}");
                    if ($ler->getResultado()) {
                        foreach ($ler->getResultado() as $produto) {
                            $produto = (object) $produto;

            ?>
                            <!-- INICIO PRODUTO CARRINHO -->
                            <div class="item-carrinho">
                                <div class="linha-da-imagem">
                                    <img src="<?= HOME ?>/uploads/<?= $produto->capa ?>" alt="<?= $produto->nome ?>" class="img-carrinho">
                                </div>
                                <p><?= $produto->nome ?></p>
                                <h2>R$ <?= $produto->valor ?></h2>
                                <form action="filtros/excluir.php" method="post">
                                    <input type="hidden" name="id_produto" value="<?= $produto->id ?>">
                                    <button type="submit" style="border:none; background:none; "> <i class="fa fa-trash-o"></i> </button>
                                </form>

                            </div>
                            <!-- FIM PRODUTO CARRINHO -->

                            <!-- INICIO RODAPE -->

                <?php
                        }
                    }
                }
            } else {
                ?>
                <div class="item-carrinho-vazio">Seu Carrinho está Vazio!</div>
            <?php
            }
            ?>

            <?php
            $totalCarrinho = new Ler();
            $totalCarrinho->LeituraCompleta("SELECT SUM(valor) as total FROM carrinho");
            if ($totalCarrinho->getResultado()) {
                $totalCompras = number_format($totalCarrinho->getResultado()[0]['total'], 2, ',', '.');
            } else {
                $totalCompras = 0;
            }
            ?>

            <div class="rodape">
                <h3>Total</h3>
                <h2>R$ <?= $totalCompras ?></h2>
            </div>
            <!-- FIM RODAPE -->

        </div>

    </div>

</body>
<!-- Xampp -->
<!-- https://localhost/Loja-Virtual-Cupcake/cart/ -->

        <!--Working on CS50 course!!-->
                <!--Second Day on CS50 course Horwship Christ!!-->
                <!--Today i've learned Scratch from CS50 arrays -->
        <!--Week 1 C language Conditionals - loops - while - for - when --- complete prgramimg !!arrays!! i didn't study today !! arrays of strings-->


</html>