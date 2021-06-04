<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <style>
            <?php include "css/login.css";
                include "css/bootstrap.min.css"?>
        </style>
        <title>Login</title>
    </head>
    <body>
        <center>
            <div class="caixa">
                <h1 id="titulo">Cadastro</h1>
                <form action="./?acao=create" method="post" id="formulario">
                    <div class="form-group">
                        <div class="form-floating mb-3">
                            <input type="text" name="nome"class="form-control" id="floatingInput" placeholder="Carlinhos Maia" value="">
                            <label for="floatingInput">Nome</label>
                        </div>
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control" id="floatingPassword" placeholder="carlinhos@gmail.com" value="">
                            <label for="floatingPassword">Email</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="senha" class="form-control" id="floatingPassword" value="">
                            <label for="floatingPassword">Senha</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            Mostrar Senha
                            </label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="confirmar_senha" class="form-control" id="floatingPassword" value="">
                            <label for="floatingPassword">Confirmar Senha</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            Mostrar Senha
                            </label>
                        </div>
                    </div>
                    <br>
                    <button type="submit">Salvar</button>
                </form>
                <form action="./?acao=login" method="post" id="formulario_login">
                    <label>Email</label><br>
                    <input class="text-box" type="email" name="email" value=""/><br>
                    <div class="form-floating">
                        <input type="password" name="senha" class="form-control" id="floatingPassword" value="">
                        <label for="floatingPassword">Senha</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Mostrar Senha
                        </label>
                    </div>
                    <br>
                    <button type="submit">Salvar</button>
                </form>
                <br>
                <span>
                    <p id="conta">Já tem uma conta?</p>
                    <a id="btn_form"><b>Clique aqui!</b></a>
                </span>
            </div>
        </center>
        <script>
            var btn_form = document.getElementById("btn_form")
            var formulario = document.getElementById("formulario")
            var formulario_login = document.getElementById("formulario_login")
            
            var IsinLogin = false
            
            btn_form.onclick = function(){
            
                if(IsinLogin)
                {
                    document.getElementById("titulo").innerHTML = "Cadastro"
                    document.getElementById("conta").innerHTML = "Já tem uma conta?"
                    
                    IsinLogin = false
                    formulario.style.display = "block"
                    formulario_login.style.display = "none"
                }
                else
                {
                    document.getElementById("titulo").innerHTML = "Login"
                    document.getElementById("conta").innerHTML = "Não possui uma conta?"
                    IsinLogin = true
                    formulario.style.display = "none"
                    formulario_login.style.display = "block"
                }
            }
        </script>
    </body>
</html>