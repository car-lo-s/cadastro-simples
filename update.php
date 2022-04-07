<?php

session_start();
if(!isset($_SESSION['root'])){
    header('Location: ./erro.php');
    exit;
}

include("base.php");
if(!empty($_POST['nome'])){
    $nome = $_POST['nome'];
    $query = "SELECT * from dados";
    $res = mysqli_query($conn,$query);
    while ($linha = mysqli_fetch_array($res)){
        if ($nome == $linha['nome']){
           $novo_nome = $_POST['novo-nome'];
           $novo_curso = $_POST['novo-curso'];
            $up = "UPDATE  dados SET nome = '$novo_nome', curso = '$novo_curso' WHERE nome = '$nome'";
            $res_up = mysqli_query($conn,$up);
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
    <title>UPDATE</title>
    <link rel="stylesheet" href="./geral.css">
    <style>
        H1{
            text-align: center;
        }
        section form{
        border: 2px solid white;
        width: 600px;
        min-height: 400px;
        padding:20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: auto;
        -webkit-box-shadow: 11px 8px 11px 6px rgba(0,0,0,0.54); 
    box-shadow: 11px 8px 11px 6px rgba(0,0,0,0.54);
    }form div{
        margin: 10px;
    }
    form input, button{
        padding: 10px;
    }
    button{
        border: none;
        border: 2px solid white;
        padding: 15px;
        /* background-color: lightblue; */
    }
    button:hover{
        border: 2px solid lightseagreen;
        color: lightseagreen;
        background-color: white;
        
    }
    </style>
</head>
<body>
    <header class="topo">
        <h1>HOMOLOG</h1>
    </header>
    <section>
        
        <form action="" method="post">
            
            <div>
                <label for="nome">Nome antigo: </label> <br>
                <input type="text" name="nome" id="">
            </div>
            <div>
                <label for="novo-nome">Nome novo: </label> <br>
                <input type="text" name="novo-nome" id="">
            </div>
            <div>
                <label for="novo-curso">Curso:</label> <br>
                <input type="text" name="novo-curso" id="">
            </div>
            <div>
                <label for="sexo">Sexo</label> <br>
                Masculino: <input type="radio" name="sexo" id="" value="m">
                Feminino: <input type="radio" name="sexo" id="" value="f">
            </div>
            <div>
                <label for="email">Email:</label><br>
                <input type="email" name="email" id="">
            </div>
            <div>
                <button type="submit">Atualizar</button>
            </div>
        </form>
    </section>
    <div class="btn">
        <a href="./tabela.php">Tabela</a>   
        <a href="./insert.php">Inserir</a>
        <a href="./delete.php">Apagar</a>
    </div>
</body>
</html>