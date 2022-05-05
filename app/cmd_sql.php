<?php
//Total de registros
$result = $mysqli->query("SELECT COUNT(d.num_compra) as ntotal, SUM(d.valor_compra) AS tvalor, SUM(d.imposto) as timposto
FROM desafio_tb_1 d");
$row = $result->fetch_assoc();
$tregistros = $row['ntotal'];
$tvendas    = $row['tvalor'];
$timposto   = $row['timposto'];

//SQL Totais Tabela 2
$resultt = $mysqli->query("SELECT COUNT(tb2.cod_loja) AS qtd, SUM(tb2.valor_total) AS vvenda,
SUM(tb2.impostos) AS vimposto, SUM(tb2.din_volta_aplicado) AS retorno
FROM desafio_tb_2 tb2");
$row2 			= $resultt->fetch_assoc();
$t2registros	= $row2['qtd'];
$t2vendas		= $row2['vvenda'];
$t2impostos		= $row2['vimposto'];
$t2retorno		= $row2['retorno'];


//SQL Filiais
$rowsFiliais = "SELECT SUM(d.valor_compra) AS total, COUNT(d.filial) qt_venda, d.filial as filial
FROM desafio_tb_1 d GROUP BY d.filial ORDER BY total DESC";

//SQL filiais modal
$rowsFiliais2 = "SELECT count(d.vendedores), d.filial AS filial FROM desafio_tb_1 d";


//SQL Vendedores antigo
$rowsVendedores = "SELECT COUNT(d.usuario) as qvenda, SUM(d.valor_compra) AS tvenda, d.usuario AS usuario, 
(SELECT d1.nome FROM desafio_tb_1 d1 WHERE d1.usuario = d.usuario LIMIT 1) AS nome,
(SELECT d2.filial FROM desafio_tb_1 d2 WHERE d2.usuario = d.usuario LIMIT 1) AS filial
FROM desafio_tb_1 d GROUP BY d.usuario ORDER BY tvenda DESC";

//SQL Vendedores antigo
/*$rowsVendedores ="SELECT d.nome as nome, COUNT(d.usuario) as qvenda, SUM(d.valor_compra) AS tvenda,
d.usuario as usuario, d.filial AS filial
FROM desafio_tb_1 d GROUP BY d.usuario ORDER BY tvenda DESC";
*/
//SQL Produtos
$rowsProdutos = "SELECT d.tipo_mercadoria from desafio_tb_1 d GROUP BY d.tipo_mercadoria";

//Sql Produtdos Dashboard
$rowsProdutos2 = "SELECT d.tipo_mercadoria as nome, COUNT(d.tipo_mercadoria) AS tvenda, SUM(d.valor_compra) AS vvenda
FROM desafio_tb_1 d GROUP BY d.tipo_mercadoria
ORDER BY tvenda DESC";

//Sql Retorna numero de devoluções
$rowsDevolvidos = "SELECT COUNT(d.num_compra) AS devolvidos FROM desafio_tb_1 d WHERE d.devolvido = 'Sim'";

//Pesquisa produtos devolvidos
$rowsDevolucoes = "SELECT d.num_compra, d.tipo_mercadoria, d.motivo_devolucao, d.filial, d.usuario, d.nome
FROM desafio_tb_1 d WHERE d.devolvido = 'Sim'";

//SQL para o Dashboard
$rowsDevolvidos2 = "SELECT d.motivo_devolucao as motivo, COUNT(d.motivo_devolucao) AS qmotivo
FROM desafio_tb_1 d WHERE d.devolvido = 'Sim'
GROUP BY d.motivo_devolucao ORDER BY qmotivo DESC";

 //Sql CPF na nota
 $rowsCPF = "SELECT COUNT(d.num_compra) AS tcompra FROM desafio_tb_1 d WHERE d.cpf_nota = 'Sim'";


?>