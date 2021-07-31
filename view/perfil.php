<?php 
   include "autenticacao.php";
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
                            <div class="header_2">
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
                                <a class="nav-link" id="logout">Sair</a>
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
         <div style="grid-row: 1/span 2; grid-column: 3;" id="divimg">
            <img class="foto" src="img/<?php echo $_SESSION['img'];?>" id="choose_img"/>
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

         function imgselect(img_id)
         {
            window.location.href="../index.php?acao=updateIMG&img=" + img_id;
         }

         function ChooseImg(){
            Swal.fire({
            title: '<h1 style="color:white">Clique na imagem que você deseja</h1>',
            html: '<div class="imgSelector"><img class="imgSel" src="img/1.jpg" value="1" onclick="imgselect(1)"/><img class="imgSel" src="img/2.jpg" value="2" onclick="imgselect(2)"/><img class="imgSel" src="img/3.jpg" value="3" onclick="imgselect(3)"/><img class="imgSel" src="img/4.jpg" value="4" onclick="imgselect(4)"/><img class="imgSel" src="img/5.jpg" value="5" onclick="imgselect(5)"/><img class="imgSel" src="img/6.jpg" value="6" onclick="imgselect(6)"/><img class="imgSel" src="img/7.jpg" value="7" onclick="imgselect(7)"/><img class="imgSel" src="img/8.jpg" value="8" onclick="imgselect(8)"/><img class="imgSel" src="img/9.jpg" value="9" onclick="imgselect(9)"/><img class="imgSel" src="img/10.jpg" value="10" onclick="imgselect(10)"/><img class="imgSel" src="img/11.jpg" value="11" onclick="imgselect(11)"/><img class="imgSel" src="img/13.jpg" value="13" onclick="imgselect(13)"/><img class="imgSel" src="img/14.jpg" value="14" onclick="imgselect(14)"/><img class="imgSel" src="img/15.jpg" value="15" onclick="imgselect(15)"/><img class="imgSel" src="img/16.jpg" value="16" onclick="imgselect(16)"/><img class="imgSel" src="img/17.jpg" value="17" onclick="imgselect(17)"/><img class="imgSel" src="img/18.jpg" value="18" onclick="imgselect(18)"/><img class="imgSel" src="img/19.jpg" value="19" onclick="imgselect(19)"/><img class="imgSel" src="img/20.jpg" value="20" onclick="imgselect(20)"/><img class="imgSel" src="img/21.jpg" value="21" onclick="imgselect(21)"/><img class="imgSel" src="img/22.jpg" value="22" onclick="imgselect(22)"/><img class="imgSel" src="img/23.jpg" value="23" onclick="imgselect(23)"/></div>',
            background: '#474547',
            confirmButtonColor: '#d33',
            confirmButtonText: 'Cancelar'
            })
         }

         document.getElementById('choose_img').addEventListener("click", () => {
          ChooseImg();
         })
         


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

               window.location.href="../index.php?acao=logout";

            }
         })};

      </script>
   </body>
</html>