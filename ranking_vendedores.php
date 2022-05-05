<?php
include "inc/graficos_ranking_vendedores.php";
#Ranking vendedores
$sql = $rowsVendedores." LIMIT 5";

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