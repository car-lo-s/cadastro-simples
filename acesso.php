<?php
include("base.php");
session_start();


if(empty($_POST['nome']) || empty($_POST['senha']) ){
        $mensagem = "Preencha todos os campos";
    }else{
        $query = "SELECT * from dados";
        $res = mysqli_query($conn,$query);
        while ($linha = mysqli_fetch_array($res)){
            if($linha['nome'] === $_POST['nome'] && $linha['senha'] === $_POST['senha']){
                $_SESSION['root'] = 'carlos'; 
                header("Location: tabela.php");
            }else{
                $mensagem = "Dados incorretos";
            }
        }
    }


