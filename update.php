<?php
require_once 'db_connect.php';

    if (isset($_POST['btn-editar'])):
        $nome = mysqli_escape_string($connect, $_POST['nome']);
        $login = mysqli_escape_string($connect, $_POST['login']);
        $lv = mysqli_escape_string($connect, $_POST['lv']);

        $id = mysqli_escape_string($connect, $_POST['id']);        
      
       
        $sql = "UPDATE user SET nome = '$nome', login = '$login', lv = '$lv' WHERE id = '$id'";
        mysqli_set_charset($connect, "utf8");
    
        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Atualizado com Sucesso!";
            header('Location: index.php');
        else:
            $_SESSION['mensagem'] = "Erro ao Atualizar!";
            header('Location: index.php');
        endif;
    endif;
?>