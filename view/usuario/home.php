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
    <?php include "../css/bootstrap.min.css";
    include "../css/home.css"; ?>
  </style>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" type="text/css" href="css/fakeLoader.css">
</head>

<body>

  <?php include "../prop/navbar.php" ?>

  <main id="main">

    <script>
      function redirect(aula_id)
      {
        window.location.href = "../aula/aula.php?aula=" + aula_id;
      }
    </script>

    <?php

    for ($i = 0; $i < sizeof($_SESSION["aulas"]); $i++) {
    ?>

      <div class="list-item" onclick="redirect(<?= $_SESSION['aulas'][$i]['id']?>)" style="cursor:pointer">
        <div class="card text-white bg-dark mb-5" style="max-width: 20rem;">
          <div class="card-body">
            <img src="../img/code.png" style="width:100%;margin-bottom:1rem" />
            <h4 class="card-title"><?= $_SESSION["aulas"][$i]["titulo"] ?></h4>
            <p class="card-text"><?= $_SESSION["aulas"][$i]["descrição"] ?></p>
            <label style="opacity:0.5"><?= $_SESSION["aulas"][$i]["data_de_postagem"] ?></label>
          </div>
        </div>
      </div>

    <?php } ?>

    <div class="myloader"></div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/fakeLoader.min.js"></script>
  </main>
</body>

</html>