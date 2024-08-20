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
    
    <?php
    include('Includes/conexao.php');
        $data = $_POST['data'];
        $tipo = $_POST['tipo'];
        $valor = $_POST['valor'];
        $historico = $_POST['historico'];
        $cheque = $_POST['cheque'];

        echo "<h1>Dados do Fluxo de Caixa:</h1>";
        echo "Data: $data<br>";
        echo "Tipo: $tipo<br>";
        echo "Valor: $valor<br>";
        echo "Historico: $historico<br>";
        echo "Cheque: $cheque<br>";
        $sql = "INSERT INTO fluxo_caixa (data, tipo, valor, historico, cheque)";
        $sql .= " VALUES('".$data."', '".$tipo."', '".$valor."', '".$historico."', '".$cheque."')";
        $result = mysqli_query($con, $sql);
        if($result){
            echo "<h3>Dados cadastrados com sucesso</h3>";
        }
        else{
            echo "<h3>Erro ao cadastrar</h3>";
            echo mysqli_error($con);
            }
    ?>
    <a href="index.html"><h3>Voltar ao inicio</h3></a>
</body>
</html>