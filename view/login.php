<?php

    if(isset($_SESSION['alert'])){
    }
    
    ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css" />
        <style>
            <?php include "css/login.css";
                include "css/bootstrap.min.css"?>
        </style>
        <title>Login</title>
    </head>
    <body>

        <center>    

            <div class="box">
                <h1 id="titulo">Cadastro</h1>
                <br />
                <form action="./?acao=create" method="post" id="formulario">
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
                <form action="./?acao=login" method="post" id="formulario_login">
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
        <script>

            document.getElementById("email_cad").addEventListener('input', function () {
                document.getElementById("email_log").value = document.getElementById("email_cad").value;
            })

            document.getElementById("email_log").addEventListener('input', function () {
                document.getElementById("email_cad").value = document.getElementById("email_log").value;
            })

            document.getElementById("txt_senha_cadastro").addEventListener('input', function () {
                document.getElementById("txt_senha_login").value = document.getElementById("txt_senha_cadastro").value;
            })

            document.getElementById("txt_senha_login").addEventListener('input', function () {
                document.getElementById("txt_senha_cadastro").value = document.getElementById("txt_senha_login").value;
            })

        </script>
        <script>
            var btn_form = document.getElementById("btn_form");
            var formulario = document.getElementById("formulario");
            var formulario_login = document.getElementById("formulario_login");
            var IsinLogin = false;
            
            btn_form.onclick = function () {
                Login_Cad()
            };

            function Login_Cad(){
                if (IsinLogin) {
                    document.getElementById("titulo").innerHTML = "Cadastro";
                    document.getElementById("conta").innerHTML = "Já tem uma conta?";
                    IsinLogin = false;
                    formulario.style.display = "block";
                    formulario_login.style.display = "none";
                } else {
                    document.getElementById("titulo").innerHTML = "Login";
                    document.getElementById("conta").innerHTML = "Não possui uma conta?";
                    IsinLogin = true;
                    formulario.style.display = "none";
                    formulario_login.style.display = "block";
                }
            }

            var btn_senha_cad = document.getElementById("btn_senha_cadastro");
            var btn_con_senha = document.getElementById("btn_confimar_senha_cadastro");
            var btn_senha_login = document.getElementById("btn_senha_login");
            
            var txt_senha_cad = document.getElementById("txt_senha_cadastro");
            var txt_con_senha = document.getElementById("txt_confirmar_senha_cadastro");
            var txt_senha_login = document.getElementById("txt_senha_login");
            
            var senhaShow_cad = false;
            var senhaShow_con = false;
            var senhaShow_login = false;
            
            btn_senha_cad.addEventListener("change", () => {
                SenhaShowCad()
            });
            
            btn_con_senha.addEventListener("change", () => {
                SenhaShowCon()
            });
            
            btn_senha_login.addEventListener("change", () => {
                SenhaShowLog()
            });

            lbl_senha_cad.addEventListener("click", () => {
                SenhaShowCad()
            });
            
            lbl_con_senha.addEventListener("click", () => {
                SenhaShowCon()
            });
            
            lbl_senha_login.addEventListener("click", () => {
                SenhaShowLog()
            });

            function SenhaShowCad(){
                if (senhaShow_cad) {
                    senhaShow_cad = false;
                    btn_senha_cad.checked = false;
                    txt_senha_cad.type = "password";
                } else {
                    senhaShow_cad = true;
                    btn_senha_cad.checked = true;
                    txt_senha_cad.type = "text";
                }
            }

            function SenhaShowCon(){
                if (senhaShow_con) {
                    senhaShow_con = false;
                    btn_con_senha.checked = false;
                    txt_con_senha.type = "password";
                } else {
                    senhaShow_con = true;
                    btn_con_senha.checked = true;
                    txt_con_senha.type = "text";
                }
            }

            function SenhaShowLog(){
                if (senhaShow_login) {
                    senhaShow_login = false;
                    btn_senha_login.checked = false;
                    txt_senha_login.type = "password";
                } else {
                    senhaShow_login = true;
                    btn_senha_login.checked = true;
                    txt_senha_login.type = "text";
                }
            }
        </script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            var alerta = '<?php echo $_SESSION['alert'] ?>'
            
            function campos(){
                Swal.fire({
            icon: 'error',
            title: '<h1 style="color: white;">Por favor, Complete todos os campos!</h1>',
            background: '#474547',
            confirmButtonColor: '#1993c6',
            })
            }
            
            function senha(){
                Swal.fire({
            icon: 'error',
            title: '<h1 style="color: white;">As senhas não coincídem, Digite novamente!</h1>',
            background: '#474547',
            confirmButtonColor: '#1993c6',
            })
            }
            
            function email(){
                Swal.fire({
            icon: 'error',
            title: '<h1 style="color: white;">Email já cadastrado!</h1>',
            background: '#474547',
            confirmButtonColor: '#1993c6',
            })
            }   
            
            function senha_invalida(){
                Swal.fire({
            icon: 'error',
            title: '<h1 style="color: white;">Email ou senha inválidos</h1>',
            background: '#474547',
            confirmButtonColor: '#1993c6',
            })
            }  

            if(alerta){
            
                switch (alerta) {
                    case 'Campos':
                        campos()
                    break;
                    case 'Senha':
                        senha()
                    break;
                    case 'Email':
                        email()
                    break;
                    case 'Senha_Inválida':
                        senha_invalida()
                    break;
                }

                alerta = '<?php $_SESSION['alert'] = ""; ?>'
            }
            
        </script>
    </body>
</html>