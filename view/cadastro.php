<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Cadastro</title>
        <style>
            <?php include "css/login.css";
                include "css/bootstrap.min.css"?>
        </style>
	</head>
	<body>
		<center>
			<div class="box">
				<h1 id="titulo">Cadastro</h1>
				<br/>
				<form action="../?acao=create" method="post" id="formulario">
					<div class="form-group">
						<div class="form-floating mb-3">
							<input type="text" name="nome" class="form-control" id="floatingInput" value="" />
							<label for="floatingInput">Nome</label>
						</div>
						<div class="form-floating mb-3">
							<input type="email" name="email" class="form-control" id="email_cad" value="" />
							<label for="email_cad">Email</label>
						</div>
						<div class="form-floating mb-3">
							<input type="password" name="senha" class="form-control" id="txt_senha_cadastro" value="" />
							<label for="floatingPassword">Senha</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="btn_senha_cadastro" />
							<label class="form-check-label" id="lbl_senha_cad" for="flexCheckDefault" style="float: left;">
							Mostrar Senha
							</label>
						</div>
						<br />
						<div class="form-floating mb-3">
							<input type="password" name="confirmar_senha" class="form-control" id="txt_confirmar_senha_cadastro" value="" />
							<label for="floatingPassword">Confirmar Senha</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="btn_confimar_senha_cadastro" />
							<label class="form-check-label" id="lbl_con_senha" for="flexCheckDefault" style="float: left;">
							Mostrar Senha
							</label>
						</div>
					</div>
					<br />
					<button style="width: 100%;" id="btn_salvar" type="submit">Salvar</button>
				</form>
				<span>
					<p id="conta">Já tem uma conta?</p>
					<a id="btn_form" href="login.php"><b>Clique aqui!</b></a>
				</span>
			</div>
		</center>
	</body>
</html>