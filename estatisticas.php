<?php
?>

 <div class="col-sm-4">
 <div class="panel panel-danger">
            <div class="panel-heading">
              <h3 class="panel-title">Informações do Sistema Tabela 1</h3>
            </div>
            <div class="panel-body">
              <p><?=numrows($rowsFiliais);?> Filiais</p>
              <p><?=numrows($rowsVendedores);?> Vendedores</p>
              <p><?=numrows($rowsProdutos);?> Produtos diferentes vendidos</p>
              <p><?=$tregistros;?> Registros de vendas</p>
              <p><?=moeda($tvendas);?> em Vendas</p>
              <p><?=moeda($timposto);?> em impostos recolhidos (<?=percente($tvendas,$timposto);?>)</p>
            </div>
          </div>

          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title">Notas emitidas com CPF</h3>
            </div>
            <div class="panel-body">
            <?php
            retorno($rowsCPF);
            ?>
            </div>
          </div>

         <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title">Devoluções</h3>
            </div>
            <div class="panel-body">
            <?php
            retorno($rowsDevolvidos);
            ?>
            </div>
          </div>          
<div class="panel panel-danger">
            <div class="panel-heading">
              <h3 class="panel-title">Informações do Sistema Tabela 2</h3>
            </div>
            <div class="panel-body">
              <p><?=$t2registros;?> Registros de vendas</p>
              <p><?=moeda($t2vendas);?> em Vendas</p>
              <p><?=moeda($t2impostos);?> em impostos recolhidos (<?=percente($t2vendas,$t2impostos);?>)</p>
			  <p><?=moeda($t2retorno);?> Em retorno (<?=percente($t2vendas,$t2retorno);?>)</p>
            </div>
          </div>
          
        </div><!-- /.col-sm-4 -->
		