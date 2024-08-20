<?php
    include('Includes/conexao.php');
    $id = $_POST['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];
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
    <h1>Alteração do Fluxo Caixa</h1>
    <?php
    echo "<h1>Dados do Fluxo de Caixa:</h1>";
    echo "Data: $data<br>";
    echo "Tipo: $tipo<br>";
    echo "Valor: $valor<br>";
    echo "Historico: $historico<br>";
    echo "Cheque: $cheque<br>";
    echo "<h5>ID: $id</h5>";
        $sql = "UPDATE fluxo_caixa SET data = '$data', tipo = '$tipo', valor = '$valor', historico = '$historico',cheque = '$cheque' WHERE idFluxo = $id";
        $result = mysqli_query($con, $sql);
        if($result){
            echo "<h3>Dados Atualizados com sucesso</h3>";
        }
        else{
            echo "<h3>Erro ao atualizar</h3>";
            echo mysqli_error($con);
            }
            
    ?>
    <a href="index.html"><h3>Voltar ao inicio</h3></a>
</body>
</html>