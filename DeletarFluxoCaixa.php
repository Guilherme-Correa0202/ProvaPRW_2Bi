<?php
    include("Includes/conexao.php");
    $id = $_GET['id'];
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
<?php
        include('Includes/conexao.php');
        $sql = "DELETE FROM fluxo_caixa WHERE idFluxo = $id";
        $result = mysqli_query($con, $sql);
        if($result){
            echo "<h3>Fluxo deletado com sucesso</h3>";
        }
        else{
            echo "<h3>Erro ao deletar</h3>";
            echo mysqli_error($con);
            }
    ?>

    <a href="index.html"><h3>Voltar ao inicio</h3></a>
    </table>
</body>
</html>