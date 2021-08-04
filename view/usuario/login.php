<?php

    session_start();

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
   <?php include "../css/login.css";
       include "../css/bootstrap.min.css"?>
  </style>
  <title>Login</title>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 </head>
 <body>
    <center>    
            <div class="box">
                <h1 id="titulo">Login</h1>
                <br />
                <?php
				
				if(isset($_SESSION["alert"]) && $_SESSION["alert"] == "Invalido" ) :

				?>

				<script>
					Swal.fire({
  					icon: 'error',
  					title: "<h3 style='color: white'>Oops...</h3>",
 		 			html: "<h6 style='color: white'>Email ou senha não coincidem!</h6>",
					background: '#474547'
				})
				</script>

				<?php endif; ?>
                <form action="../../?acao=login" method="post">
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="email_log" value="" required/>
                        <label for="email_log">Email</label>
                    </div>
                    <br />
                    <div class="form-floating">
                        <input type="password" name="senha" class="form-control" id="txt_senha_login" value="" required/>
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
                    <p id="conta">Não possui conta?</p>
                    <a id="btn_form" href="cadastro.php" style="text-decoration:none"><b>Clique aqui!</b></a>
                </span>
            </div>
        </center>
        <script>

			var SenhaShow = false;
			function ShowSenha()
			{
				if(SenhaShow)
				{
					document.getElementById("txt_senha_login").type = 'password'
					SenhaShow = false
					document.getElementById("btn_senha_login").checked = false
				}
				else
				{
					document.getElementById("txt_senha_login").type = 'text'
					SenhaShow = true
					document.getElementById("btn_senha_login").checked = true
				}
			}

			document.getElementById("btn_senha_login").onclick = ShowSenha
			document.getElementById("lbl_senha_login").onclick = ShowSenha

		</script>
 </body>
</html>
<?php

$_SESSION["alert"] = "";
session_destroy();

?>
