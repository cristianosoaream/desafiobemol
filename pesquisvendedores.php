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
        <h1>Pesquisa Vendedores</h1>
      </div>
      <div class="row">
      <?php
$sql = $rowsVendedores;

$result = $mysqli->query($sql);
$i=1;
echo '<table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Vendas</th>
                <th>Det</th>
              </tr>
          </thead>
		    <tbody>';
		while($res = mysqli_fetch_assoc($result)){
		echo '<tr>
			 <td>'.$i.'</td>
			 <td>'.$res['nome'].'</td>
             <td style= "white-space: nowrap;">'.moeda($res['tvenda']).'</td>
             <td><button type="button" class="btn btn-xs" aria-label="Mais detalhes"
			 data-toggle="modal" data-target=".bs-vendedores-modal-sm'.$i.'">
			 <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
			 </button></td>
			 <tr>';
			 include "inc/modal_ranking_vendedores.php";
		$i++;
}
	echo '</tbody>
          </table>';  
	  ?> 
      </div>

    </div> <!-- /container -->

	
<!-- paginação -->
	
    <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	      
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
  
	<?php include "inc/rodape.php"; ?>
    
  </body>
</html>
