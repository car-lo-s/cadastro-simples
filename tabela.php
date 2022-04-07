<!-- <?php
include("base.php");
session_start();
if(!isset($_SESSION['root'])){
    header('Location: ./erro.php');
    exit;
}
$query = "SELECT * from dados";
        $res = mysqli_query($conn,$query);
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela / Dados</title>
    <link rel="stylesheet" href="./geral.css">
    <style>
        table{
            border: 1px solid white;
            margin:auto;
            -webkit-box-shadow: 11px 8px 11px 6px rgba(0,0,0,0.54); 
            box-shadow: 11px 8px 11px 6px rgba(0,0,0,0.54);
            width: 700px;
            text-align: center;
        }
        tr,td{
            border: 1px solid black;
            padding: 10px;
            font-size:20px;
        }
        .titulo{
            background-color: lightsteelblue;
            color: black;
        }
        H1{
            text-align: center;
        }
    </style>
</head>
<body>
<header class="topo">
        <h1>HOMOLOG</h1>
    </header>
    
<table>
    <tr class="titulo">
        <td>Nome</td>
        <td>Curso</td>
        <td>Sexo</td>
        <td>Email</td>
    </tr>
    <?php
    
    while ($linha = mysqli_fetch_array($res)){
        echo "<tr>";
        echo "<td>";
        echo $linha['nome'];
        echo "</td>";
        echo "<td>";
        echo $linha['curso'];
        echo "</td>";
        echo "<td>";
        echo $linha['sexo'];
        echo "</td>";
        echo "<td>";
        echo $linha['email'];
        echo "</td>";
}
    ?>
</table>
<div class="btn">
    <a href="./insert.php">Inserir</a>
    <a href="./delete.php">Apagar</a>
    <a href="./update.php">Atualizar</a>
</div>
</body>
</html>