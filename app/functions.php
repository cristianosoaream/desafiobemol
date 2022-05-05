<?php

function moeda($valor){//Formata moeda
$txt_valor = 'R$ '.number_format($valor,2,",",".");
return $txt_valor;
}

function percente($total,$valor){//Calcula qual porcentagem
$resp = ($valor/$total)*100;
return number_format($resp,2).'%';
}

function numrows($sql){//Informa num de linhas de registro encontradas
    include "app/conexao.php";
    $result1 = $mysqli->query("$sql");
    return $nrows = $result1->num_rows;
    
}
function retorno($sql){//Função que pesquisa frequencia de deteminado campo e retorna quantidade e porcentagem
    include "app/conexao.php";
    include "app/cmd_sql.php";
    $result = $mysqli->query("$sql");
    $row = $result->fetch_row();
    $numsim = $row['0'];
    echo '<p>'.percente($tregistros,$numsim).'</p><p>Total: '.$numsim.'.</p>';
    
}

function retorna_vendas($sql){//Função que produto mais vendido
    include "app/conexao.php";
    include "app/cmd_sql.php";
    $result = $mysqli->query("$sql");
    $row = $result->fetch_row();
    $numsim = $row['0'];
    $nome_produto = $row['1'];
    $print = '<p>'.$nome_produto.' | Total: '.$numsim.'</p>';
    return $print;
}

?>