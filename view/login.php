<?php

    if(isset($_SESSION['alert'])){}
    
    ?>

<!DOCTYPE html>
<html lang="pt-br">
 <head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
   rel="stylesheet"
   href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css"
  />
  <style>
   <?php include "css/login.css";
       include "css/bootstrap.min.css"?>
  </style>
  <title>Login</title>
 </head>
 <body>
    <center>    
            <div class="box">
                <h1 id="titulo">Login</h1>
                <br />
                <form action="../?acao=login" method="post">
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="email_log" value="" />
                        <label for="email_log">Email</label>
                    </div>
                    <br />
                    <div class="form-floating">
                        <input type="password" name="senha" class="form-control" id="txt_senha_login" value="" />
                        <label for="floatingPassword">Senha</label>
                    </div>
                    <br />
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="btn_senha_login"/>
                        <label class="form-check-label" id="lbl_senha_login" for="flexCheckDefault" style="float: left;">
                        Mostrar Senha
                        </label>
                    </div>
                    <br />
                    <button style="width: 100%;" id="btn_salvar" type="submit">Entrar</button>
                </form>
                <br />
                <span>
                    <p id="conta">Já tem uma conta?</p>
                    <a id="btn_form"><b>Clique aqui!</b></a>
                </span>
            </div>
        </center>
 </body>
</html>
