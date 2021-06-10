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
      <?php //include "css/bootstrap.min.css";
      //include "css/home.css";
      ?>
   </style>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <link rel="stylesheet" data-name="vs/editor/editor.main" href="js/monaco/min/vs/editor/editor.main.css">
</head>
<body style="margin: 0;">
    <div id="editor" style="width: 100vw; height: 100vh;"></div>
    <script>var require = { paths: { 'vs': 'js/monaco/min/vs' } };</script>
    <script src="js/monaco/min/vs/loader.js"></script>
    <script src="js/monaco/min/vs/editor/editor.main.nls.js"></script>
    <script src="js/monaco/min/vs/editor/editor.main.js"></script>
    <script src="js/aula.js"></script>
</body>
</html>