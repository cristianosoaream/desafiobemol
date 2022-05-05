<canvas id="myChartProdutos" width="100%"></canvas>
<?php
echo "
<script>
const ctx2 = document.getElementById(\"myChartProdutos\").getContext(\"2d\");
const myChartProdutos = new Chart(ctx2, {
    type: 'pie',
    data: {
        labels:[";
		$sql = $rowsProdutos2.' LIMIT 5';
        $result1 = $mysqli->query($sql);
        while($res1 = mysqli_fetch_assoc($result1)){
        echo "'".$res1['nome']."',";
         } 
        echo "],";
        //['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
echo "   datasets: [{
            label: '# Valor em R$ ',data: [";
            $result2 = $mysqli->query($sql);
            while($res2 = mysqli_fetch_assoc($result2)){
            $t_vendas = $res2['vvenda'];
            echo "'".$t_vendas."',";
             } 
          echo "],";    
      //      data: [12.50, 19.90, 13.7, 15.9, 12.1],
echo"           backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
});
</script>";
?>
