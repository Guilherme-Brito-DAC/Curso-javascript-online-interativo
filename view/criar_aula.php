<?php

    if(isset($_SESSION['alert'])){}
    
    ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Nova Aula</title>
        <style>
            <?php include "css/login.css";
                include "css/bootstrap.min.css"?>
        </style>
	</head>
	<body>
		
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <center>
				        <h1 id="titulo">Nova Aula</h1>
                    </center>
                </nav>
				<br/>
				<form method="post"  action="create_aula" >
                <div class="form-group">
                    <h4 style="color: white;">Título<h4>
                    <input name="titulo" type="text" />
                </div>
                <div class="form-group">
                    <h4 style="color: white;">Texto<h4>
                    <textarea class="text" id="exampleTextarea" rows="3"></textarea>
    </div>
                </div>
                <div class="form-group">
                    <h4 style="color: white;">Descrição<h4>
                    <input name="descricao" type="text" />
                </div>
					<button style="width: 5%;" id="btn_salvar" type="submit">Criar</button>
				</form>
				<br>
</html>