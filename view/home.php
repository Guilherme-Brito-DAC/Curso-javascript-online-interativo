<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   <style>
      <?php include "css/bootstrap.min.css"?>
   </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <img src="img/goxtoso.png" width="50" height="50">
        <li class="nav-item">
          <a class="nav-link" href="#">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Perfil</a>
        </li>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Ex: Function, var...">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>
      <li class="nav-item">
         <button type="button" class="btn btn-outline-danger">Deslogar</button>
      </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>