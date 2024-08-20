<?php
    include('Includes/conexao.php');
    $tipo = $_POST['tipoconsulta'];
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?php echo "$tipo" ?></h1>
    <?php 
    include('Includes/conexao.php');    
        if($tipo == 'Saldo Total'){
            $sql1 = "select sum(case when tipo ='Entrada' then valor else 0 end) - sum(case when tipo = 'Saida' then valor else 0 end) as valor from fluxo_caixa";
        }
        elseif($tipo == 'Total Saida'){ $sql1 = "select sum(valor) valor from fluxo_caixa where tipo ='Saida'";}
        elseif($tipo == 'Total Entrada'){ $sql1 = "select sum(valor) valor from fluxo_caixa where tipo ='Entrada'";}
        $result = mysqli_query($con, $sql1); 
        $row= mysqli_fetch_array($result);
        echo "<h4>O $tipo é: ".$row['valor']." $ R$</h4>";
    ?>
        <a href="index.html"><h3>Voltar ao inicio</h3></a>

</body>
</html>