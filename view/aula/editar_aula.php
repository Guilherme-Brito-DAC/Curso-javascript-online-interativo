<?php 
   include "../usuario/autenticacao.php";
   if (!isset($_GET["id"])){
      header('Location: ../../');
   }

   foreach ($_SESSION["aulas"] as $element) {
      if ($_GET["id"] == $element["id"]) {
          $aula = $element;
      }
  }
  
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Editar Aula</title>
      <style>
         <?php 
            include "../css/bootstrap.min.css";
            include "../css/home.css";?>
      </style>
   </head>
   <body>
      <?php include "../prop/navbar.php" ?>
      <br/>
      <form class="container-md" style="text-align: center" method="post" action="../../?acao=update_aula" >
      <div class="box">
         <div class="form-group">
            <h3 style="color: white;">
            Título
            <h3>
            <input class="texto" name="titulo" type="text" value="<?=$aula["titulo"]?>" required />
         </div>
         <br>
         <div class="form-group">
            <h3 style="color: white;">
            Texto
            <h3>
            <textarea class="text" style="width: 100%" name="texto" id="exampleTextarea" rows="3" required ><?=$aula["texto"]?></textarea>
         </div>
         <br>
         <div class="form-group">
            <h3 style="color: white;">
            Descrição
            <h3>
            <input class="texto" name="descricao" type="text" value="<?=$aula["descrição"]?>" required />
         </div>
         <br>
         <button style="width: 10%; height: 40%; font-size: 22px" id="btn_salvar" type="submit">Criar</button>
         </div>
         <input style="display: none;" value="<?=$aula["id"]?>" name="id"/>
      </form>
</html>