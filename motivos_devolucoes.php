<?php
#Motivos devoluções
include "inc/graficos_ranking_devolucoes.php";
$result = $mysqli->query($rowsDevolvidos2);
$i=1;
echo '<table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Motivo</th>
                <th>Qtd</th>
                <th>Det</th>
              </tr>
          </thead>
		    <tbody>';
			while($res = mysqli_fetch_assoc($result)){
			echo '<tr>
				 <td>'.$i.'</td>
				 <td>'.$res['motivo'].'</td>
				 <td style= "white-space: nowrap;">'.$res['qmotivo'].'</td>
				 <td><button type="button" class="btn btn-xs" aria-label="Mais detalhes"
				 data-toggle="modal" data-target=".bs-devolucao-modal-sm'.$i.'">
				 <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
				 </button></td>
				 <tr>';
		  include "inc/modal_ranking_devolucoes.php";
		  $i++;
  }
	echo '</tbody>
          </table>';
?>