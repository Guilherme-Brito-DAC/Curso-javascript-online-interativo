<?php 
   session_start(); 

   if(!isset($_SESSION['email']) || !isset($_SESSION['senha']))
   {
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
      <title>Perfil</title>
      <style>
         <?php include "css/bootstrap.min.css";
            include "css/perfil.css";
            include "css/home.css";?>
      </style>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                     <li class="nav-item">
                        <a class="nav-link" >Sair</a>
                     </li>
                  </div>
               </ul>
            </div>
         </div>
      </nav>
      <div class="container col-12" style="margin-top: 3em; background-color: #2a2b2a; padding: 3em; width: 60em; display: grid; grid-template-columns: 33% 33% 33%; gap: 1em;">
         <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group" style="grid-column: 1/span 2;">
            <input type="button" class="btn-check" id="btnperfil" checked="" autocomplete="off">
            <label class="btn btn-primary" id="lblperfil" for="btncheck1">Perfil</label>
            <input type="button" class="btn-check" id="btnsenha" autocomplete="off">
            <label class="btn btn-primary" id ="lblsenha" for="btncheck2">Alterar Senha</label>
            <input type="button" class="btn-check" id="btnDelete" autocomplete="off">
            <label class="btn btn-primary" id ="lblDelete" for="btnDelete">Deletar Conta</label>
         </div>
         <div style="grid-row: 1/span 2; grid-columns: 3;" id="divimg">
            <img class="foto" src="img/jooj.png"/>
            <div class="form-group">
               <input class="form-control" type="file" id="formFile" style="margin-top: 1em;">
            </div>
         </div>
         <div style="grid-column: 1/span 2; grid-row: 2;" id="divperfil">
            
            <form action="../index.php?acao=update" method="post" id="formulario" style="margin-top: 8em">
               <div class="form-group">
                  <div class="form-floating mb-3">
                     <input type="text" name="nome" class="form-control" id="floatingInput" value="<?php echo $_SESSION['nome']?>"/>
                     <label for="floatingInput">Nome</label>
                  </div>
                  <div class="form-floating mb-3">
                     <input type="email" name="email" class="form-control" id="email_cad" value="<?php echo $_SESSION['email']?>"/>
                     <label for="email_cad">Email</label>
                  </div>
               </div>
               <br />
               <button style="float: left;" type="submit" class="btn btn-info">Salvar</button>
            </form>
         </div>
         <div style="grid-column: 1/span 2; grid-row: 2; display:none" id="divsenha">
            <form action="../index.php?acao=updateSenha" method="post" id="formulario" style="margin-top: 8em">
               <div class="form-group">
                  <div class="form-floating mb-3">
                     <input type="password" name="senhaOld" class="form-control" id="floatingInput"/>
                     <label for="floatingInput">Senha Antiga</label>
                  </div>
                  <div class="form-floating mb-3">
                     <input type="password" name="senhaNew" class="form-control" id="floatingInput"/>
                     <label for="floatingInput">Senha Nova</label>
                  </div>
                  <div class="form-floating mb-3">
                     <input type="password" name="senhaCon" class="form-control" id="email_cad"/>
                     <label for="email_cad">Confirmar Nova Senha</label>
                  </div>
               </div>
               <br />
               <button style="float: left;" type="submit" class="btn btn-info">Salvar</button>
            </form>
         </div>
         <div style="grid-column: 1/span 2; grid-row: 2; display:none" id="divDelete">
         <form action="../index.php?acao=delete" method="post" id="formulario_delete" style="margin-top: 8em">
               <div class="form-group">
               <p class="text-danger">Cuidado! Essa é uma ação irreversível</p>
                  <div class="form-floating mb-3">
                     <input type="password" name="senha" id="txt_Delsenha" class="form-control" />
                     <label for="floatingInput">Senha</label>
                  </div>
                  <div class="form-floating mb-3">
                     <input type="password" name="senhaCon" id="txt_DelsenhaCon" class="form-control" />
                     <label for="email_cad">Confirmar Senha</label>
                  </div>
               </div>
               <br />
               <button style="float: left;" type="button" id="btn_delete" class="btn btn-danger">Deletar</button>
            </form>
         </div>
      </div>
      <script>
         document.getElementById('lblperfil').addEventListener("click", () => {
           document.getElementById('divperfil').style.display= "block"
           document.getElementById('divimg').style.display= "block"
           document.getElementById('divsenha').style.display= "none"
           document.getElementById('divDelete').style.display= "none"
         })
         document.getElementById('lblsenha').addEventListener("click", () => {
           document.getElementById('divperfil').style.display= "none"
           document.getElementById('divimg').style.display= "block"
           document.getElementById('divsenha').style.display= "block"
           document.getElementById('divDelete').style.display= "none"
         })
         document.getElementById('lblDelete').addEventListener("click", () => {
           document.getElementById('divperfil').style.display= "none"
           document.getElementById('divimg').style.display= "none"
           document.getElementById('divsenha').style.display= "none"
           document.getElementById('divDelete').style.display= "Block"
         })
      </script>
      <script>
      function DeleteCon(){
         Swal.fire({
            title: "<h3 style='color: white'>Tem certeza? </h3>",
            html: "<h6 style='color: white'> É irreversível e nós sentiremos saudades </h6>",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#1993c6',
            cancelButtonColor: '#d33',
            iconColor:'#d33',
            cancelButtonText: 'Não, vou ficar mais um pouco',
            background: '#474547',
            confirmButtonText: 'Sim, Tchau :('
         }).then((result) => {
            if (result.isConfirmed) {
               document.getElementById("formulario_delete").submit()
            }
         })
      }

      document.getElementById("btn_delete").addEventListener("click",()=>{
            if(document.getElementById("txt_Delsenha").value != "" && document.getElementById("txt_DelsenhaCon").value != "")
            {
               DeleteCon()
            }
            else
            {
               console.log("Complete todos os campos animal")
            }
      })

      </script>
   </body>
</html>