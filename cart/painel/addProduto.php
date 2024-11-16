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
        <title>Adição de Produto</title>
        <link rel="stylesheet" href="assets/css/app.min.css">
      
        <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>


<!-- Main Content -->
<div align="center" style="padding:20px; margin-top:120px;" >
 
        <div class="col-md-10"> 
      <section class="section" >

           <br>
         <!-- inicio formulario  topo menu -->
          <form action="filtros/criar.php" method="post" enctype="multipart/form-data">


         <div class="section-body" >
          <div class="row" >
            <div class="col-md-12">
              <div class="card">
                  
                    
                <div class="card-header">
                  <h4>Produtos</h4><br>
                 
                </div>
                <div class="card-body">
         
                  <div class="form-group row mb-4">
                   
                    <div class="col-md-12">
                      <input type="file" class="form-control" name="capa">
                    </div>
                    
                  </div>

                  <div class="form-group row mb-4">
                   
                    <div class="col-md-12">
                      <input type="text" class="form-control" name="nome" placeholder="Título do Produto">
                    </div>
                    
                  </div>

                  <div class="form-group row mb-4">
                   
                   <div class="col-md-12">
                     <input type="text" class="form-control" name="valor" placeholder="Valor">
                   </div>
                   
                 </div>

                  
                  <div class="form-group row mb-4">
                   
                    <div class="col-md-12">
                        <button style="background-color: #6c01aa; height :50px; width :300px; color:#fff; border-radius:7px;" type="submit" name="criarProduto" >Salvar</button>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
            </form>
      <!-- fim formulario  topo menu -->
      </section>
      </div>
       
    </div>

  <script src="assets/js/custom.js"></script>

</body>
</html>

<?php
ob_end_flush();
?>