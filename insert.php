<?php
include("base.php");

session_start();
if(!isset($_SESSION['root'])){
    header('Location: ./erro.php');
    exit;
}

if(!empty($_POST['nome']) || !empty($_POST['curso']) || !empty($_POST['sexo']) || !empty($_POST['email'])){
   $nome = $_POST['nome'];
   $curso = $_POST['curso'];
   $sexo = $_POST['sexo'];
   $email = $_POST['email'];

    $query = "INSERT INTO dados(nome,curso,sexo,email) VALUES ('$nome','$curso','$sexo','$email')";
    $res = mysqli_query($conn,$query);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./geral.css">
</head>
<style>
    H1{
            text-align: center;
        }
    section form{
        border: 2px solid white;
        width: 600px;
        height: 400px;
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
    }
    button:hover{
        border: 2px solid lightseagreen;
        color: lightseagreen;
        background-color: white;
        
    }
</style>
<body>
    <header class="topo">
        <h1>HOMOLOG</h1>
    </header>
    <section>
        
        <form action="" method="post">
            <div>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="">
            </div>
            <div>
                <label for="curso">Curso:</label>
                <input type="text" name="curso" id="">
            </div>
            <div>
                <label for="sexo">Sexo</label> <br>
                Masculino: <input type="radio" name="sexo" id="" value="m">
                Feminino: <input type="radio" name="sexo" id="" value="f">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="">
            </div>
            <div>
                <button type="submit">Cadastrar</button>
            </div>
        </form>
    </section>
    <div class="btn">
    <a href="./tabela.php">Tabela</a>
    <!-- <a href="./insert.php">Inserir</a> -->
    <a href="./delete.php">Apagar</a>
    <a href="./update.php">Atualizar</a>
</div>
</body>
</html>