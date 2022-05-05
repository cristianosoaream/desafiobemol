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
    
    <div class="page-header">
        <h1>Pesquisa Devoluções</h1>
      </div>
      <div class="row">
      <?php
	$result = $mysqli->query($rowsDevolucoes);
	$i=1;
	echo '<table class="table" id="minhaTabela">
            <thead>
              <tr>
                <th>#</th>
				<th>Compra</th>
                <th>Produto</th>
				<th>Motivo da Devolução</th>
                <th>Filial</th>
				<th>Vendedor</th>
                
              </tr>
          </thead>
		    <tbody>';
		while($res = mysqli_fetch_assoc($result)){
		echo '<tr>
			 <td>'.$i.'</td>
			 <td>'.$res['num_compra'].'</td>
			 <td>'.$res['tipo_mercadoria'].'</td>
             <td>'.$res['motivo_devolucao'].'</td>
			 <td>'.$res['filial'].'</td>
             <td>'.$res['usuario'].'- '.$res['nome'].'</td>
			 </tr>       
       ';
      
       $i++;
}
	echo '</tbody>
          </table>';	  
	  ?> 
      </div>

    </div> <!-- /container -->

	
<!-- paginação -->
	
    
	      
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
