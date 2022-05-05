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
        <h1>Pesquisa Produtos</h1>
      </div>
      <div class="row">
      <?php
	$result = $mysqli->query($rowsProdutos2);
	$i=1;
	echo '<table class="table" id="minhaTabela">
            <thead>
              <tr>
                <th>#</th>
                <th>Nome</th>
				<th>Vendas</th>
                <th>Valor Vendas</th>
                
              </tr>
          </thead>
		    <tbody>';
		while($res = mysqli_fetch_assoc($result)){
		echo '<tr>
			 <td>'.$i.'</td>
			 <td>'.$res['nome'].'</td>
             <td>'.$res['tvenda'].'</td>
			 <td style= "white-space: nowrap;">'.moeda($res['vvenda']).'</td>
             
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
