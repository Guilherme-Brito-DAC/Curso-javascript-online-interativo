<?php
   include "autenticacao.php";
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
   <script src="js/aulas_info.js"></script>
   <link rel="stylesheet" type="text/css" href="css/fakeLoader.css">
</head>
<body>

<main id="main">

  <script>
      function redirect(aula_id)
      {
        window.location.href = "aula.php?aula=" + aula_id;
      }

    for(let i = 0; i < aulas.length; i++){

      let item = `
    <div class="list-item" onclick="redirect(${i+1})" style="cursor:pointer">
      <div class="card text-white bg-dark mb-5" style="max-width: 20rem;">
        <div class="card-header"><img src="https://img.icons8.com/color/50/000000/code.png"/>Aula 0${i+1}</div>
          <div class="card-body">
            <img src="img/code.png" style="width:100%;margin-bottom:1rem"/>
            <h4 class="card-title">${aulas[i].titulo}</h4>
            <p class="card-text">${aulas[i].descricao}</p>
            <label style="opacity:0.5">${aulas[i].duracao}</label>
          </div>
      </div>
    </div>`
    
      document.getElementById("main").innerHTML += item;
    }
  </script>
  <div class="myloader"></div>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="js/fakeLoader.min.js"></script>
</main>

<script>

    document.getElementById("logout").onclick = function () { 
            Swal.fire({
            title: '<h1 style="color: white;">Deseja mesmo sair ?</h1>',
            icon: 'warning',
            showCancelButton: true,
            focusConfirm: false,
            confirmButtonText:
            'Sim, quero sair!',
            confirmButtonAriaLabel: 'Thumbs up, great!',
            confirmButtonColor: '#FF4935',
            cancelButtonText:
            'Cancelar',
            cancelButtonAriaLabel: 'Thumbs down',
            cancelButtonColor: '#1c96c5',
            background: '#474547',
         }).then((result) => {
            if (result.isConfirmed) {

               window.location.href="logout.php";

            }
         })};

</script>

</body>
</html>