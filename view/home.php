<?php
   session_start();
   
   //if(!isset($_SESSION["email"])) header("Location: ../");
   
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
      <div class="head";>
         <h1 style="margin-right: 20em";> Welcome, stranger </h1>
         <input type="button" id="cursos" value="Cursos">
         <input type="button" id="sobre" value="Sobre">
         <input type="button" id="apoie" value="Apoie">
         <input type="button" id="perfil" value="Perfil">
      </div>
      <div class="content";>
         <div class="card">
            <div class="container">
               <h4><b>John Doe</b></h4>
               <p>Architect & Engineer</p>
            </div>
         </div>
        </div
   </body>
</html>