<?php
//Conexão com o Banco de Dados
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "Teste2";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
    echo "Erro na conexão: ".mysqli_connect_error();
endif;    



// // If you installed via composer, just use this code to require autoloader on the top of your projects.
//     require 'vendor/autoload.php';
     
//     // Using Medoo namespace
//     use Medoo\Medoo;
     
//     // Initialize
//     $database = new Medoo([
//         'database_type' => 'mysql',
//         'database_name' => 'Teste2',
//         'server' => 'localhost',
//         'username' => 'root',
//         'password' => ''
//     ]);
?>