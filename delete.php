<?php
    include("base.php");

    session_start();
if(!isset($_SESSION['root'])){
    header('Location: ./erro.php');
    exit;
}

    if(!empty($_POST['nome'])){
        $nome = $_POST['nome'];
        $query = "SELECT * from dados";
        $res = mysqli_query($conn,$query);
        while ($linha = mysqli_fetch_array($res)){
            if ($nome == $linha['nome']){
               $query_delete = "DELETE FROM dados WHERE nome = '$nome'";
               $del = mysqli_query($conn,$query_delete); 
            }
    }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir</title>
    <link rel="stylesheet" href="./geral.css">
    <style>
        form{
            display: flex;
            flex-direction: row;
            justify-content: center;
            height: 100px;
            align-items: flex-end;
        }
        form input, button{
            padding: 10px;
            margin: 10px;
        }
        button{
            background-color: white;
            border-color: black;
        }
        button:hover{
            border-color: white;
            background-color: lightblue;
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
    <form action="" method="post">
        <input type="text" name="nome" id="">
        <button type="submit">Apagar</button>
    </form>
    <div class="btn">
        <a href="./tabela.php">Tabela</a>
        <a href="./insert.php">Inserir</a>
        <a href="./delete.php">Apagar</a>
        <a href="./update.php">Atualizar</a>
    </div>
</body>
</html>