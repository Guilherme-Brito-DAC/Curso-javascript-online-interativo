<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <style>
      <?php include "css/bootstrap.min.css";
      include "css/home.css";?>
   </style>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarColor01">
      
      <ul class="navbar-nav me-auto">
      <div class="header">
      <div style="display:flex;">
        <img src="img/goxtoso.png" width="50" height="50" style="margin-right:1rem">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="perfil.php">Perfil</a>
        </li>
        </div>

      <div>
      <li class="nav-item">
       <div style="display:flex;heigth:100%">
            <input type="text" class="form-control" id="floatingInput" placeholder="Procurar">
            <button id="search" type="button" class="btn btn-info"><img src="https://img.icons8.com/android/20/ffffff/search.png"/></button>
        </div>
      </li>
      </div>

        <li class="nav-item">
          <a class="nav-link" >Sair</a>
        </li>

      </div>

      </ul>
  
    </div>
  </div>
</nav>


</body>
</html>