<?php
session_start();

if(!isset($_SESSION['email']) || !isset($_SESSION['senha'])){
  header('Location: ./');
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Aula 01</title>
   <style>
      <?php include "css/bootstrap.min.css";
      include "css/home.css";
      include "css/aula.css";?>
   </style>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <link rel="stylesheet" type="text/css" href="css/fakeLoader.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarColor01">   
      <ul class="navbar-nav me-auto">
      <div class="header">
      <div style="display:flex;">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Meus Códigos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="perfil.php">Perfil</a>
        </li>
        </div>
      <div>
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