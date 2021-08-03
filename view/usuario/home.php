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
      function redirect(aula_id) {
        window.location.href = "../aula/aula.php?aula=" + aula_id;
      }
    </script>

    <?php

    for ($i = 0; $i < sizeof($_SESSION["aulas"]); $i++) {
    ?>

      <div class="list-item" onclick="redirect(<?= $_SESSION['aulas'][$i]['id'] ?>)" style="cursor:pointer">
        <div class="card text-white bg-dark mb-5" style="max-width: 20rem;">
          <div class="card-body">
            <img src="../img/code.png" style="width:100%;margin-bottom:1rem" />
            <h4 class="card-title"><?= $_SESSION["aulas"][$i]["titulo"] ?></h4>
            <p class="card-text"><?= $_SESSION["aulas"][$i]["descrição"] ?></p>
            <label style="opacity:0.5"><?= $_SESSION["aulas"][$i]["data_de_postagem"] ?></label>

            <?php
            if ($_SESSION["nivel"] == "professor") :
            ?>
              <form method="POST" action="../../?acao=delete_aula">
                <button style="border-radius: 5px; width: 70px; float: right; display: flex; margin-left: 5px" type="submit" name="aula_id" value="<?= $_SESSION['aulas'][$i]['id'] ?>" class="btn btn-danger">
                  <img style="width: 24px " src="https://img.icons8.com/ios-glyphs/30/FFFFFF/trash--v1.png" /></button>
              </form>
              <button style="border-radius: 5px; width: 70px; float: right; display: flex" type="button" class="btn btn-warning">
                <a href="../aula/editar_aula.php?id=<?= $_SESSION['aulas'][$i]['id'] ?>"><img style="width: 20px" src="https://img.icons8.com/ios/50/FFFFFF/edit-file.png" /></a></button>
            <?php endif; ?>
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