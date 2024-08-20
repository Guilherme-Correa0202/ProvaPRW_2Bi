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
        $sql = "select * from fluxo_caixa";
        $result = mysqli_query($con, $sql);
    ?>
    <h1>Listar Fluxo Caixa:</h1>
    <table align="center" border="1" width="500px">
        <tr>
            <Th>Codigo</Th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Historico</th>
            <th>Cheque</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo"<tr>";
                echo"<td>".$row['idFluxo']."</td>";
                echo"<td>".$row['data']."</td>";
                echo"<td>".$row['tipo']."</td>";
                echo"<td>".$row['valor']."</td>";
                echo"<td>".$row['historico']."</td>";
                echo"<td>".$row['cheque']."</td>";
                echo"<td><a href='AtualizarFluxoCaixa.php?id=".$row['idFluxo']."'>Altera</a></td>";
                echo"<td><a href='DeletarFluxoCaixa.php?id=".$row['idFluxo']."'>Deleta</a></td>";
                echo"</tr>";
            }
        ?>
    </table>
    <a href="index.html"><h3>Voltar ao inicio</h3></a>
</body>
</html>