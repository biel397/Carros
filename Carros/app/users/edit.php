<!DOCTYPE html>
<?php
  include 'classes/session/session.php';
  //Session::validaSession();
  include 'action/update.php';
?>
<html>
<head>
  <title>Cadastrar usuários</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div>
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar usuários</li>
          </ol>
      </nav>
    </div>
    <h1>Editar usuário <a href="list.php"><button type="button" class="btn btn-success">Listar</button></a></h1>

    <form method="POST" action="action/save.php">

      <div class="form-group">
        <small class="form-text text-muted">Digite um email válido</small>
      </div>

      <div class="row">
        <div class="col">
          <input type="text" name="email" required class="form-control" value="<?php echo $email; ?>">
        </div>

        <div class="col">
          <input type="text" name="senha" required class="form-control">
        </div>

        <div class="col">
          <input type="text" name="confirmaSenha" required class="form-control">
        </div>

      </div>

      <br>

      <button type="submit" class="btn btn-primary">Atualizar</button>
      <?php
        if(isset($_GET['edit'])){
          $edit = $_GET['edit'];
          if ($edit == '1') {
            echo '<div class="alert alert-warning" role="alert">
                    Email ja existe!
                  </div>'; 
          }
        }
      ?>    
    </form>
  </div>
</body>
</html>