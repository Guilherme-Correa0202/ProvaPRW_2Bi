<?php
    include("Includes/conexao.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM fluxo_caixa WHERE idFluxo=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
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
<form action="AtualizarFluxoCaixaExe.php" method="post">
        <fieldset>
            <legend>Atulizar Fluxo Caixa</legend>
            <div>
                <label for="data">Data:</label>
                <input type="text" name="data" id="data" value=" <?php echo $row['data'] ?>">
            </div>
            <div>  
                <label for="tipo">Tipo</label>
                <input type="radio" name="tipo" id="tipo" value="Entrada" <?php echo $row['tipo'] == "Entrada" ? "checked": "" ?>>Entrada
                <br><input type="radio" name="tipo" id="tipo" value="Saida" <?php echo $row['tipo'] == "Saida" ? "checked": "" ?>>Saida
            </div>
            <div>
                <label for="valor">Valor:</label>
                <input type="text" name="valor" id="valor" value=" <?php echo $row['valor'] ?>">
            </div>
            <div>
                <label for="historico">Historico:</label>
                <input type="text" name="historico" id="historico" value=" <?php echo $row['historico'] ?>">
            </div>
            <div>  
                <label for="cheque">Cheque:</label>
                <select name="cheque" id="cheque">
                    <option value="sim" <?php echo $row['cheque'] == "sim" ? "selected": "" ?>>Sim</option>
                    <option value="nao" <?php echo $row['cheque'] == "nao" ? "selected": "" ?>>nao</option>
                </select>
            </div>
            
            <button type="submit">Atualizar</button>
            <div>
                <input type="hidden" name="id" value="<?php echo $id; ?>"> 
            </div>
        </fieldset>
    </form>
    <a href="index.html"><h3>Voltar ao inicio</h3></a>
</body>
</html>