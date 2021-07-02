<?php

   include "autenticacao.php";
   
   if(!isset($_GET['aula'])){
      header('Location: home.php');
      exit;
   }

   ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Aula 01</title>
        <style>
            <?php include "css/bootstrap.min.css";
               include "css/home.css";
               ?>
        </style>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/aulas_info.js"></script>
        <link rel="stylesheet" data-name="vs/editor/editor.main" href="js/monaco/min/vs/editor/editor.main.css" />
        <script>
            var aula = <?php echo $_GET['aula']?>
        </script>
    </head>
    <body>
        <nav id="menubar" class="navbar navbar-expand-lg navbar-dark bg-primary">
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

        <div id="main">
            <div id="aulamenu">
                <h1 style="color: #1993c6;">
                    Aula
                    <?php echo $_GET['aula']; ?>
                    <b style="color: white;">
                        -
                        <script>
                            document.write(aulas[aula - 1].titulo);
                        </script>
                    </b>
                </h1>

                <div class="btn-group">
                    <input type="button" class="btn-check" />
                    <label class="btn btn-primary" id="btn_aula" style="border-bottom-left-radius: 10%; border-top-left-radius: 10%;">Aula</label>
                    <input type="button" class="btn-check" />
                    <label class="btn btn-primary" id="btn_code" style="border-bottom-right-radius: 10%; border-top-right-radius: 10%;">Atividade</label>
                </div>
            </div>

            <div id="proxima_pagination">
                <h6 style="color: white; text-align: center;">Próximos Aulas</h6>
                <div style="display: flex; justify-content: center;">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link">&laquo;</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link">&raquo;</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="div_aula">
                <div class="aula">
                    <div id="video_aula">
                        <script>
                            let iframe = `
                        <iframe
                            width="100%"
                            height="100%"
                            src=${aulas[aula - 1].video}
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>`;
                            document.getElementById("video_aula").innerHTML = iframe;
                        </script>
                    </div>

                    <div class="btn-group" style="margin-top: 2rem;">
                        <input type="button" class="btn-check" />
                        <label class="btn btn-primary" id="btn_resumo" style="border-bottom-left-radius: 10%; border-top-left-radius: 10%;">Resumo</label>
                        <input type="button" class="btn-check" />
                        <label class="btn btn-primary" id="btn_comentarios" style="border-bottom-right-radius: 10%; border-top-right-radius: 10%;">Comentários</label>
                    </div>

                    <div id="div_resumo" style="margin-top: 2rem; color: white;">
                        <h2 style="color: white;">
                            <script>
                                document.write(aulas[aula - 1].titulo);
                            </script>
                        </h2>
                        <script>
                            document.write(aulas[aula - 1].texto);
                        </script>
                    </div>

                    <div id="div_comentarios" style="margin-top: 2rem;"></div>
                </div>

                <div class="proximasaulas" id="aulas_prox">
                    <h2 style="color: white; margin-bottom: 1rem;">Aulas</h2>
                    <script>
                        function redirect(aula_id) {
                            window.location.href = "../view/aula.php?aula=" + aula_id;
                        }

                        for (let i = 1; i < aulas.length + 1; i++) {
                            var ativo = "";
                            var opacity = 0.3;

                            if (i == aula) {
                                ativo = "ativo";
                                opacity = 1;
                            }

                            let item = `<div class="nextaula" id="${ativo}" onclick="redirect(${i})">
                                   <span><h4 style="color:white;opacity:${opacity}">${aulas[i - 1].titulo}</h4><img style="float:right" src="https://img.icons8.com/android/24/ffffff/checkmark.png"/></span>
                              </div>`;

                            document.getElementById("aulas_prox").innerHTML += item;
                        }
                    </script>
                </div>
            </div>

            <div id="div_atividade">
                <script>
                    document.write(aulas[aula - 1].enunciado);
                </script>
                <div id="editor_tools">
                    <div class="btn-group">
                        <input type="button" class="btn-check" />
                        <label class="btn btn-primary" id="btn_fullscreen"><img src="https://img.icons8.com/material-sharp/20/ffffff/full-screen--v1.png"/></label>
                        <input type="button" class="btn-check" />
                        <label class="btn btn-primary" id="btn_theme">Escuro</label>
                        <input type="button" class="btn-check" />
                        <label class="btn btn-primary" id="btn_reset"><img src="https://img.icons8.com/android/20/ffffff/recurring-appointment.png" /></label>
                        <input type="button" class="btn-check" />
                        <label class="btn btn-primary" id="btn_play"><img src="https://img.icons8.com/android/20/ffffff/play.png" /></label>
                    </div>
                </div>
                <div id="editor">
                </div>
            </div>
        </div>

        <script>
            var require = { paths: { vs: "js/monaco/min/vs" } };
        </script>
        <script src="js/monaco/min/vs/loader.js"></script>
        <script src="js/monaco/min/vs/editor/editor.main.nls.js"></script>
        <script src="js/monaco/min/vs/editor/editor.main.js"></script>
        <script src="js/aula.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
