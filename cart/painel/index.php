<?php

ob_start();
require('../sheep_core/config.php');
?>
<!DOCTYPE html>
<html lang="pt-br" >
<head >
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>PAINEL DE PRODUTOS</title>
        <link rel="stylesheet" href="../assets/css/app.min.css">
      
        <link rel="stylesheet" href="../assets/css/style.css">
        <!-- FIM DO CSS  SHEEP FRAMEWORK PHP - -->
</head>
<body>


<!-- Main Content -->
<div align="center" style="padding:20px; margin-top:120px;" >
 
        <div class="col-md-10"> 
      <section class="section" >

            
            <!-- inicio topo menu -->
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-0">
                  <div class="card-body">
                      <ul class="nav nav-pills" style="margin:5px; float:right;">
                      <li class="nav-item" >
                        <a style="background-color: #6c01aa;" class="nav-link active"  href="addProduto.php">Novo </a>
                      </li>
                     
                    </ul>
                    <ul class="nav nav-pills">
                    
                      <li class="nav-item">
                        <a style="background-color: #6c01aa;"class="nav-link active" href="<?=HOME?>/index.php" target="_blank">VOLTAR PARA A LOJA</a>
                      </li>
                      <!--
                      <li class="nav-item">
                        <a style="color: #6c01aa;" class="nav-link" href="index.php">Atualizar</a>
                      </li>
                      -->
                     
                      
                     
                    </ul>
                  </div>
                </div>
              </div>
            </div>
      
            <!-- fim topo menu -->


           <br>
          <!-- INICIO TABELA  MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA -->
          <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Ativos</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Nº</th>  
                            <th>Capa</th>
                            <th>Criado</th>
                          
                            <th>Nome</th>
                            <th>Valor</th>
                           
                            <th>Excluir</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                              $ler = new Ler();
                              $ler->Leitura('produtos', "ORDER BY data ASC");
                              if($ler->getResultado()){
                                foreach($ler->getResultado() as $produto){
                                  $produto = (object) $produto;
                            ?>
                          
                          <tr>
                            <td><?=$produto->id?></td>
                            <td><img src="<?=HOME?>/uploads/<?=$produto->capa?>" alt="" style="width:50px;"></td>
                            <td><?= date('d/m/Y', strtotime($produto->data)) ?></td>
                            <td><?=$produto->nome?></td>
                            <td>R$ <?=$produto->valor?></td>
                                                   
                            <td>
                                <form action="excluir_produto.php" method="post">
                                 <input type="hidden" name="id_unico" value="<?=$produto->id?>">
                                 <button type="submit" class="btn btn-icon btn-danger"><i class="fa fa-trash-alt"></i></button>
                                 </form>
                            </td>
                          </tr>
                         <?php
                            }
                                echo implode($_POST);
                          }
                         ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
      </section>
      </div>
        
       
    </div>

  <script src="assets/js/custom.js"></script>

 
  

</body>
</html>

<?php
ob_end_flush();
?>