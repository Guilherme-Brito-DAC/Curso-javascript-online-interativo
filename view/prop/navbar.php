<nav id="menubar" class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <div class="header">
                    <div class="header_2">
                        <li class="nav-item">
                            <a class="nav-link" href="../../?acao=read_aula">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../usuario/perfil.php">Perfil</a>
                        </li>
                    </div>
                    <li class="nav-item" style="display:flex;gap:50px">
                        <?php

                        if ($_SESSION["nivel"] == "professor") {
                            include "botao.html";
                        }

                        ?>
                        <a class="nav-link" id="logout">Sair</a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>
<script>
    document.getElementById("logout").onclick = function() {
        Swal.fire({
            title: '<h1 style="color: white;">Deseja mesmo sair ?</h1>',
            icon: 'warning',
            showCancelButton: true,
            focusConfirm: false,
            confirmButtonText: 'Sim, quero sair!',
            confirmButtonAriaLabel: 'Thumbs up, great!',
            confirmButtonColor: '#FF4935',
            cancelButtonText: 'Cancelar',
            cancelButtonAriaLabel: 'Thumbs down',
            cancelButtonColor: '#1c96c5',
            background: '#474547',
        }).then((result) => {
            if (result.isConfirmed) {

                window.location.href = "../usuario/logout.php";

            }
        })
    };
</script>