<?php


include "../usuario/autenticacao.php";

if ($_GET['aula'] == "" || !isset($_GET['aula'])) {
    header('Location: ../usuario/home.php');
    exit;
}

foreach ($_SESSION["aulas"] as $element) {
    if ($_GET["aula"] == $element["id"]) {
        $aula = $element;
    }
}

$comentarios = [];

foreach ($_SESSION["comentarios"] as $element) {
    if ($_GET["aula"] == $element["aula_id"]) {
        array_push($comentarios, $element);
    }
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
        <?php include "../css/bootstrap.min.css";
        include "../css/home.css";
        ?>
    </style>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" data-name="vs/editor/editor.main" href="../js/monaco/min/vs/editor/editor.main.css" />
</head>

<body>

    <?php include "../prop/navbar.php" ?>

    <div id="main">
        <div id="aulamenu">
            <h1 style="color: #1993c6;">
                Aula
                <?php echo $_GET['aula']; ?>
                <b style="color: white;">
                    -
                    <?php echo $aula["titulo"] ?>
                </b>
            </h1>

            <div class="btn-group">
                <input type="button" class="btn-check" />
                <label class="btn btn-primary" id="btn_aula" style="border-bottom-left-radius: 10%; border-top-left-radius: 10%;">Aula</label>
                <input type="button" class="btn-check" />
                <label class="btn btn-primary" id="btn_code" style="border-bottom-right-radius: 10%; border-top-right-radius: 10%;">Atividade</label>
            </div>
        </div>
        <div id="div_aula">
            <div class="aula">
                <div class="btn-group" style="margin-top: 2rem;">
                    <input type="button" class="btn-check" />
                    <label class="btn btn-primary" id="btn_resumo" style="border-bottom-left-radius: 10%; border-top-left-radius: 10%;">Aula</label>
                    <input type="button" class="btn-check" />
                    <label class="btn btn-primary" id="btn_comentarios" style="border-bottom-right-radius: 10%; border-top-right-radius: 10%;">Comentários</label>
                </div>

                <div id="div_resumo" style="margin-top: 2rem; color: white;">
                    <h2 style="color: white;">
                        <?php echo $aula["titulo"] ?>
                    </h2>
                    <?php echo stripslashes($aula["texto"]); ?>
                </div>

                <div id="div_comentarios" style="margin-top: 2rem; display:none;">
                    <div class="escrever">
                        <form action="../../?acao=create_comment" method="POST" style="display: flex; gap: 20px;">
                            <input name="comentario" type="text" style="margin-top: 5px; margin-bottom: 0px; height: 50px; width: 500px;" placeholder="Adicionar um comentário..." /> <br><br>
                            <button type="submit" class="btn btn-info" style="transform: scale(0.88);"><img src="https://img.icons8.com/android/24/ffffff/checkmark.png"></button>
                            <input name="aula_id" style="display: none" value=<?php echo $_GET["aula"]; ?>>
                        </form>
                    </div>
                    <div class="comentarios_escritos">
                        <?php
                        for ($i = 0; $i < sizeof($comentarios); $i++) {
                        ?>
                            <script>
                                let isEditting = false

                                function Edit(id){
                                    if (isEditting == true) {
                                        document.getElementById(id).readOnly = true
                                        document.getElementById(id).className = "edit_comment"
                                        document.getElementById("btn_salvar"+id).style.display = "none"
                                        isEditting = false
                                    } else {
                                        document.getElementById(id).readOnly = false
                                        document.getElementById(id).className = ""
                                        document.getElementById("btn_salvar"+id).style.display = "block"
                                        isEditting = true
                                    }
                                }
                            </script>
                            <div class="comentario_individual" style="display:flex; margin-top: 5em; margin-left: 2em; gap: 20px; align-items: center; ">
                                <div class="comment">
                                    <div style="display: flex; gap: 10px;">
                                        <p><?= $comentarios[$i]["nome"] ?></p>
                                        <p style="opacity: 0.5;"><?= $comentarios[$i]["data_postagem"] ?></p>
                                    </div>

                                    <form action="../../?acao=update_comment" method="post" style="display:flex;">
                                        <input type="text" id="<?= $comentarios[$i]['id'] ?>" name="mensagem" readonly required class="edit_comment" value="<?= $comentarios[$i]["mensagem"] ?>" />
                                        <button type="submit" name="id" id="btn_salvar<?= $comentarios[$i]['id'] ?>" style="border-radius: 0px; margin-left: 1em; height:51px; margin-bottom: 2.4em; display:none" value="<?= $comentarios[$i]["id"] ?>">
                                            <img src="https://img.icons8.com/android/24/ffffff/checkmark.png">
                                        </button>
                                        <input type="" name="aula_id" value="<?= $_GET["aula"] ?>" style="display: none;" />
                                    </form>
                                </div>

                                <?php
                                if ($comentarios[$i]["usuario_id"] == $_SESSION["id"]) {
                                ?>
                                <div style="margin-left: 21em;">
                                    <button class="btn btn-primary" type="button" name="edit" value="" onclick="Edit(<?= $comentarios[$i]['id'] ?>)" style="margin-top: 5px;">
                                        <img src="https://img.icons8.com/material-outlined/30/ffffff/edit--v1.png" />
                                    </button>
                                    <form action="../../?acao=delete_comment" method="post" style="float:right">
                                        <button type="submit" name="id" value="<?= $comentarios[$i]["id"] ?>" class="btn btn-danger" style="transform: scale(0.8); ">
                                            <img src="https://img.icons8.com/ios/40/ffffff/delete--v1.png" />
                                        </button>
                                        <input type="" name="aula_id" value="<?= $_GET["aula"] ?>" style="display: none;" />
                                    </form>
                                </div>
                                <?php } ?>
                            </div>

                        <?php } ?>

                    </div>
                </div>
            </div>

            <div class="proximasaulas" id="aulas_prox">
                <h2 style="color: white; margin-bottom: 1rem;">Aulas</h2>

                <script>
                    function redirect(aula_id) {
                        window.location.href = "aula.php?aula=" + aula_id;
                    }
                </script>

                <?php
                for ($i = 0; $i < sizeof($_SESSION["aulas"]); $i++) {
                ?>

                    <div class="nextaula" id="${ativo}" onclick="redirect(<?= $_SESSION['aulas'][$i]['id'] ?>)">
                        <span>
                            <h4 style="color:white;opacity:${opacity}"><?= $_SESSION["aulas"][$i]["titulo"] ?></h4>
                        </span>
                    </div>

                <?php } ?>

            </div>
        </div>

        <div id="div_atividade">
            <div id="editor_tools">
                <div class="btn-group">
                    <input type="button" class="btn-check" />
                    <label class="btn btn-primary" id="btn_fullscreen"><img src="https://img.icons8.com/material-sharp/20/ffffff/full-screen--v1.png" /></label>
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
        var require = {
            paths: {
                vs: "js/monaco/min/vs"
            }
        };
    </script>
    <script src="../js/monaco/min/vs/loader.js"></script>
    <script src="../js/monaco/min/vs/editor/editor.main.nls.js"></script>
    <script src="../js/monaco/min/vs/editor/editor.main.js"></script>
    <script src="../js/aula.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>