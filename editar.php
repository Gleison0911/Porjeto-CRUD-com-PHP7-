<?php 
include_once 'db_connect.php';

    if(isset($_GET['id'])):
        $id = mysqli_escape_string($connect, $_GET['id']);

        $sql = "SELECT * FROM user WHERE id = '$id'";
        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado);
    endif;
?>

<!DOCTYPE html>
  <html>
    <head>
    <meta charset="utf-8">
    <title>Teste de Formulário</title>

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>   
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    
    <body>
        <nav>
            <div class="nav-wrapper">
            <a href="#" class="brand-logo text-align: center">Logo</a>
            </div>
        </nav>


    

        <div class="row">
            <div class="col s12 m6 push-m3">
                <h3 class="light text-align: center"> Editar jogador </h3><br>
                <form action="update.php" method="POST">
                    <input type ="hidden" name="id" value="<?php echo $dados['id'];?>">
                    <div class="row">
                        <div class="col s12">
                            <div class="row">
                            <div class="input-field col s12">
                                    <i class="material-icons prefix">person</i>
                                    <input type="text" id="nome" class="autocomplete" value='<?php echo $dados['nome'];?>' name="nome"  >
                                    <label for="login">Nome</label>
                                </div>

                                <div class="input-field col s12">
                                    <i class="material-icons prefix">person</i>
                                    <input type="text" id="login" class="autocomplete" value="<?php echo $dados['login'];?>" name="login">
                                    <label for="login">Login</label>
                                </div>

                                <div class="input-field col s12">
                                    <i class="material-icons prefix">casino</i>
                                    <input type="text" id="lv" class="autocomplete" value="<?php echo $dados['lv'];?>" name="lv"> 
                                    <label for="cpf">lv</label>
                                </div>
                            </div>
                        </div>
                    </div>
                                 
                    <button  type="submit" name="btn-editar" class="btn"><i class="material-icons left">send</i>Atualizar jogador</button>               
                    <a href="index.php" class="btn"><i class="material-icons left">videogame_asset</i>Lista de Jogadores</a>
                </form>  
            </div>
        </div>

      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>

