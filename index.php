<?php

include ("base.php");
include("acesso.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./geral.css">
</head>
<style>
    section{
    width: 400px;
    min-height: 500px;
    height: 500px;
    margin: auto;
    -webkit-box-shadow: 11px 8px 11px 6px rgba(0,0,0,0.54); 
    box-shadow: 11px 8px 11px 6px rgba(0,0,0,0.54);
    
}
section form{
    display: flex;
    flex-direction: column;
    text-align: center;
    justify-content: center;
    height: 80%;
}
section form input, button{
    padding: 10px 35px;
    margin: 7px;
}
p{
    text-align:center;
    margin: 10px;
    color: rgb(150, 148, 148);
}
</style>
<body>
    <header class="topo">
        <h1>HOMOLOG</h1>
    </header>
    <section>
        <form action="" method="post">
            <div>
                <label for="nome">Nome:</label><br>
                <input type="text" name="nome" id="">
            </div>
            <div>
                <label for="senha">Senha:</label><br>
                <input type="password" name="senha" id="">
            </div>
            <div>
                <button type="submit">Entrar</button>
            </div>
        </form>
        <p>
            <?php
            echo $mensagem;
            ?>
        </p>
        <hr>
        <div>
            <p>*Area de teste</p>
        </div>
    </section>
</body>
</html>