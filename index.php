<?php
include ("app/conexao.php");
include ("app/functions.php");
include ("app/cmd_sql.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <?php include "inc/head.php";?>
  </head>

  <body>

    <!-- Fixed navbar -->
	<?php include "inc/cabecalho.php";?>
    <div class="container theme-showcase" role="main">
    <?php include "inc/script_graficos.php";?>
    <div class="page-header">
        <h1>Painel</h1>
      </div>
      <div class="row">
        <?php include "estatisticas.php";?>
		<div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Ranking Filiais</h3>
            </div>
            <div class="panel-body">
              <?php include "ranking_filiais.php";?>
            </div>
          </div>
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Motivo devoluções</h3>
            </div>
            <div class="panel-body">
              <?php include "motivos_devolucoes.php";?>
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Ranking Produtos</h3>
            </div>
            <div class="panel-body">
              <?php include "ranking_produto.php";?>
            </div>
          </div>
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Ranking Vendedores</h3>
            </div>
            <div class="panel-body">
              <?php include "ranking_vendedores.php";?>
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
       
      </div>

    </div> <!-- /container -->

	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
       <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
         <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title">Pesquisa Filiais</h4>
       </div>
       <div class="modal-body">
      <table id="minhaTabela">
    <thead>
      <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Vinicius Moura</td>
        <td>viniciusmouramail@gmail.com</td>
        <td>49 12345-68791</td>
        <td><a href="">Deletar</a></td>
      </tr>
      <tr>
        <td>José Andrade</td>
        <td>joseandrade@gmail.com</td>
        <td>32 9875-68791</td>
        <td><a href="">Deletar</a></td>
      </tr>
      <tr>
        <td>Rodrigo Costa</td>
        <td>rodrigocosta@gmail.com</td>
        <td>32 4564-68791</td>
        <td><a href="">Deletar</a></td>
      </tr>
    </tbody>
  </table>
        </div>
      
<script>
  $(document).ready(function(){
      $('#minhaTabela').DataTable({
        	"language": {
                "lengthMenu": "Mostrando _MENU_ registros por página",
                "zeroRecords": "Nada encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(filtrado de _MAX_ registros no total)"
            }
        });
  });
  </script>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>           
         </div>
       </div>
     </div>
	<?php include "inc/rodape.php"; ?>
    
  </body>
</html>
