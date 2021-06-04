<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                <br>
                
                <form action="./?acao=create" method="post" id="formulario">
                    <div class="form-group">
                        <div class="form-floating mb-3">
                            <input type="text" name="nome"class="form-control" id="floatingInput"  value="">
                            <label for="floatingInput">Nome</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingPassword" value="">
                            <label for="floatingPassword">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="senha" class="form-control" id="txt_senha_cadastro" value="">
                            <label for="floatingPassword">Senha</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="btn_senha_cadastro">
                            <label class="form-check-label" for="flexCheckDefault" style="float:left">
                            Mostrar Senha
                            </label>
                        </div>
                        <br>
                        <div class="form-floating mb-3">
                            <input type="password" name="confirmar_senha" class="form-control" id="txt_confirmar_senha_cadastro" value="">
                            <label for="floatingPassword">Confirmar Senha</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="btn_confimar_senha_cadastro">
                            <label class="form-check-label" for="flexCheckDefault" style="float:left">
                            Mostrar Senha
                            </label>
                        </div>
                    </div>
                    <br>
                    <button id="btn_salvar" type="submit">Salvar</button>
                </form>

                <form action="./?acao=login" method="post" id="formulario_login">
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="floatingPassword" value="">
                        <label for="floatingPassword">Email</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="password" name="senha" class="form-control" id="txt_senha_login" value="">
                        <label for="floatingPassword">Senha</label>
                    </div>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="btn_senha_login">
                        <label class="form-check-label" for="flexCheckDefault" style="float:left">
                        Mostrar Senha
                        </label>
                    </div>
                    <br>
                    <button id="btn_salvar" type="submit">Salvar</button>
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

            var btn_senha_cad = document.getElementById("btn_senha_cadastro")
            var btn_con_senha = document.getElementById("btn_confimar_senha_cadastro")
            var btn_senha_login = document.getElementById("btn_senha_login")

            var txt_senha_cad = document.getElementById("txt_senha_cadastro")
            var txt_con_senha = document.getElementById("txt_confirmar_senha_cadastro")
            var txt_senha_login = document.getElementById("txt_senha_login")

            var senhaShow_cad = false
            var senhaShow_con = false
            var senhaShow_login = false

            

            btn_senha_cad.addEventListener("change",()=>{

                if(senhaShow_cad)
                {
                    senhaShow_cad = false
                    txt_senha_cad.type = "password"
                }
                else
                {
                    senhaShow_cad = true
                    txt_senha_cad.type = "text"
                }

            })

            btn_con_senha.addEventListener("change",()=>{

                if(senhaShow_con)
                {
                    senhaShow_con = false
                    txt_con_senha.type = "password"
                }
                else
                {
                    senhaShow_con = true
                    txt_con_senha.type = "text"
                }
                
            })

            btn_senha_login.addEventListener("change",()=>{

                if(senhaShow_login)
                {
                    senhaShow_login = false
                    txt_senha_login.type = "password"
                }
                else
                {
                    senhaShow_login  = true
                    txt_senha_login.type = "text"
                }

            })

            function Alert_Complete(){
                Swal.fire({
                    icon: 'error',
                    title: '<span style="color:#fff">Oh não! <br> Complete todos os campos!<span>',
                    background: '#474747',
                    confirmButtonColor: '#00ccff',
                })
            }

            function Alert_Senha(){
                Swal.fire({
                    icon: 'error',
                    title: '<span style="color:#fff">Parece que as senhas não conferem<span>',
                    background: '#474747',
                    confirmButtonColor: '#00ccff',
                })
            }

        </script>
    </body>
</html>