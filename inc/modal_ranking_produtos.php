<?php
echo'
      <div class="modal fade bs-produto-modal-sm'.$i.'" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
       <div class="modal-dialog modal-sm" role="document">
         <div class="modal-content">
         <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title">'.$res['nome'].'</h4>
       </div>
       <div class="modal-body">
       ';
      $sqlmaiorvenda = "SELECT COUNT(d.filial) AS qtd, d.filial FROM desafio_tb_1 d
      WHERE d.tipo_mercadoria = '".$res['nome']."' GROUP BY d.filial ORDER BY qtd DESC LIMIT 1";
       echo'
        <p>Posição no Ranking: '.$i.'º Lugar</p>
        <p>Total de vendas '.$res['tvenda'].'</p>
        <p>Valor de vendas '.moeda($res['vvenda']).'</p>
        <p>Loja com maior venda: '.retorna_vendas($sqlmaiorvenda).'</p>
        </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>           
         </div>
       </div>
     </div>';
?>