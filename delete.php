<?php
require_once 'db_connect.php';

    if (isset($_POST['btn-deletar'])):
        
        $id = mysqli_escape_string($connect, $_POST['id']);        
      
       
        $sql = "DELETE FROM user WHERE id = '$id'";
        mysqli_set_charset($connect, "utf8");
    
        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Deletado com Sucesso!";
            header('Location: index.php');
        else:
            $_SESSION['mensagem'] = "Erro ao Deletar!";
            header('Location: index.php');
        endif;
    endif;
?>