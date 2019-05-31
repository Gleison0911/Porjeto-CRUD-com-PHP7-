<?php

// Lista do Banco de Dados
include_once 'db_connect.php'; 


//Footer
include_once 'footer.php';  
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
                <h3 class="light text-align: center"> Dados dos jogadores </h3><br>
                <table class="striped">
                        <thead>
                            <tr>
                                <th>Nome:</th>
                                <th>Login:</th>
                                <th>Lv:</th>
                            </tr>
                        </thead>  

                    <tbody>
                        <?php 
                        $sql = "SELECT * FROM user";
                        $resultado = mysqli_query($connect, $sql);
                        while($dados = mysqli_fetch_array($resultado)):
                        ?> 
                            <tr>
                                <td><?php echo $dados['nome']; ?></td>
                                <td><?php echo $dados['login']; ?></td>
                                <td><?php echo $dados['lv']; ?></td>
                                <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating  waves-light yellow"><i class="material-icons">edit</i></a></td> 
                               
                                <td><a href="#modal<?php echo $dados['id'];?>" class="btn-floating  waves-light red modal-trigger"><i class="material-icons">delete</i></a></td> 
                             
                                <!-- Modal Structure -->
                                <div id="modal<?php echo $dados['id'];?>" class="modal">
                                    <div class="modal-content">
                                        <h4>Opa!</h4>
                                        <p>Tem certeza que quer excluir o jogador?</p>
                                   
                                   

                                <form action="delete.php" method="POST">
                                    <input typr="hidden" name="id" value="<?php echo $dados['id'];?>">
                                    <button type="submit" name="btn-deletar" class="btn red">Sim, quero excluir!</button>
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                </form>
                                    </div>
                                </div>

                                <script>
                                    M.AutoInit();
                                </script>

                            
                            </tr>
                        <?php endwhile; ?>    
                    </tbody>
                </table>
                <br>
                <a href="cadastrar.php" class="waves-effect waves-light btn"><i class="material-icons left">send</i>Inserir Jogador</a>
            </div>
        </div>

      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>

