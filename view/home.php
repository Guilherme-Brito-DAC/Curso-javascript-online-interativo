<?php
session_start();

if(!isset($_SESSION["email"])) header("Location: ../");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
      <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
      <style>
         <?php include "css/home.css";
            include "css/bootstrap.min.css"?>
      </style>
      <title>Home</title>
   </head>
   <body>
      <div class="container-fluid" >
         <div>
            <img src="img/goxtoso.png" width="100" height="100">
         </div>
         <div>
            <img src="https://img.icons8.com/material/50/ffffff/home--v5.png"/>
            <img src="https://img.icons8.com/android/50/ffffff/about.png"/>
            <img src="https://img.icons8.com/ios-filled/50/ffffff/settings-3.png"/>
            <img src="https://img.icons8.com/ios-glyphs/50/ffffff/exit.png"/>
         </div>       
      </div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
      <div class="content";>
         <div class="card">
            <div class="container">
               <h4><b>John Doe</b></h4>
               <p>Architect & Engineer</p>
            </div>
         </div>
<<<<<<< Updated upstream
        </div>
=======
      </div>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
         Swal.fire({
         title: 'Novo Nome',
         html: "<form action='./?acao=update' method='post'>
  <div class='form-group'>
      <div class='form-floating mb-3'>
          <input type='text' name='new_nome'class='form-control' id='floatingInput' placeholder='Carlinhos Maia' value=''>
          <label for='floatingInput'>Nome</label>
      </div>
      <div class='form-floating'>
          <input type='email' name='new_email' class='form-control' id='floatingPassword' placeholder='carlinhos@gmail.com' value=''>
          <label for='floatingPassword'>Email</label>
      </div>
      <div class='form-floating'>
          <input type='password' name='new_senha' class='form-control' id='floatingPassword' value=''>
          <label for='floatingPassword'>Senha</label>
      </div>
      <div class='form-check'>
          <input class='form-check-input' type='checkbox' value='' id='flexCheckDefault'>
          <label class='form-check-label' for='flexCheckDefault'>
          Mostrar Senha
          </label>
      </div>
      <div class='form-check'>
          <input class='form-check-input' type='checkbox' value='' id='flexCheckDefault'>
          <label class='form-check-label' for='flexCheckDefault'>
          Mostrar Senha
          </label>
      </div>
  </div>
  <br>
  <button type='submit'>Salvar</button>
</form>
         inputAttributes: {
          autocapitalize: 'off'
         },
         showCancelButton: true,
         cancelButtonText:'Cancelar'
         confirmButtonText: 'Confirmar',
         showLoaderOnConfirm: true,
         preConfirm: (login) => {
          return fetch(`//api.github.com/users/${login}`)
            .then(response => {
              if (!response.ok) {
                throw new Error(response.statusText)
              }
              return response.json()
            })
            .catch(error => {
              Swal.showValidationMessage(
                `Request failed: ${error}`
              )
            })
         },
         allowOutsideClick: () => !Swal.isLoading()
         }).then((result) => {
         if (result.isConfirmed) {
          Swal.fire({
            title: `${result.value.login}'s avatar`,
            imageUrl: result.value.avatar_url
          })
         }
         })
      </script>
>>>>>>> Stashed changes
   </body>
</html>