<?php
require_once 'db_connect.php';

    if (isset($_POST['btn-cadastrar'])):
        $nome = mysqli_escape_string($connect, $_POST['nome']);
        $login = mysqli_escape_string($connect, $_POST['login']);
        $lv = mysqli_escape_string($connect, $_POST['lv']);
        
      
       
        $sql = "INSERT INTO user (nome, login, lv) VALUES ('$nome', '$login', '$lv')";
        mysqli_set_charset($connect, "utf8");
    
        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Cadastrado com Sucesso!";
            header('Location: index.php');
        else:
            $_SESSION['mensagem'] = "Erro ao Cadastrar!";
            header('Location: index.php');
        endif;
    endif;
?>