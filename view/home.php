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
   <title>Home</title>
   <style>
      <?php include "css/bootstrap.min.css";
      include "css/home.css";?>
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
<main id="main">

  <script>

    for(let i = 0; i < 5; i++){
      let item = `
    <div class="list-item">
      <div class="card text-white bg-dark mb-5" style="max-width: 20rem;">
        <div class="card-header"><img src="https://img.icons8.com/color/50/000000/code.png"/>Aula 0${i+1}</div>
          <div class="card-body">
            <img src="img/code.png" style="width:100%;margin-bottom:1rem"/>
            <h4 class="card-title">Título</h4>
            <p class="card-text">Texto</p>
            <label style="opacity:0.5">2 min</label>
          </div>
      </div>
    </div>`
    
      document.getElementById("main").innerHTML += item;
    }
  </script>
  <div class="myloader"></div>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="js/fakeLoader.min.js"></script>
  <script>

  var login = '<?php echo $_SESSION['login'] ?>'

    function load(){
      $('.myloader').fakeLoader({
        timeToHide: 1500,
        bgColor:'#222222',
        spinner:'spinner6'
      })
    }

  if(login)
  {
      if(login == "first")
      {
        load()
        login = '<?php $_SESSION['login'] = "" ?>'
      }
  }
      

  </script>
</main>
</body>
</html>