<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include "css/login.css" ?>
    </style>
    <title>Login</title>
</head>
<body>

    <form action="./?acao=create" method="post" id="formulario">

        <label>Nome</label><br>
        <input type="text" name="nome" value=""/><br>

        <label>Email</label><br>
        <input type="email" name="email" value=""/><br>

        <label>Senha</label><br>
        <input type="password" name="senha" value=""/><br>

        <label>Confirmar Senha</label><br>
        <input type="password" name="confirmar_senha" value=""/><br>

        <br>

        <button type="submit">Salvar</button>
    </form>

    <form action="./?acao=login" method="post" id="formulario_login">

        <label>Email</label><br>
        <input type="email" name="email" value=""/><br>

        <label>Senha</label><br>
        <input type="password" name="senha" value=""/><br>

        <br>

        <button type="submit">Salvar</button>
    </form>

    <p>Já tem uma conta?<a id="btn_form">Clique aqui!</a></p>
    
    <script>
        var btn_form = document.getElementById("btn_form")
        var formulario = document.getElementById("formulario")
        var formulario_login = document.getElementById("formulario_login")
        
        var IsinLogin = false

        btn_form.onclick = function(){

            if(IsinLogin)
            {
                IsinLogin = false
                formulario.style.display = "block"
                formulario_login.style.display = "none"
            }
            else
            {
                IsinLogin = true
                formulario.style.display = "none"
                formulario_login.style.display = "block"
            }
        }
    </script>
</body>
</html>