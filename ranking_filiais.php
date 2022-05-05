
<?php
include "inc/graficos_ranking_filiais.php";
$result = $mysqli->query($rowsFiliais);
$i=1;
echo '<table class="table" id="filiais">
            <thead>
              <tr>
                <th>#</th>
                <th>Filial</th>
                <th>Valor</th>
                <th>Det</th>
              </tr>
          </thead>
		    <tbody>';
		while($res = mysqli_fetch_assoc($result)){
		echo '<tr>
			 <td>'.$i.'</td>
			 <td>'.$res['filial'].'</td>
             <td style= "white-space: nowrap;">'.moeda($res['total']).'</td>
             <td><button type="button" class="btn btn-xs" aria-label="Mais detalhes" data-toggle="modal" data-target=".bs-example-modal-sm'.$i.'">
			 <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
			 </button></td>
			 </tr>       
       ';
      include "inc/modal_ranking_filiais.php";
       $i++;
}
	echo '</tbody>
          </table>';
?>
