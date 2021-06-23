document.getElementById("div_atividade").style.display = "none";

            var btn_aula = document.getElementById("btn_aula");
            var btn_code = document.getElementById("btn_code");
            var btn_resumo = document.getElementById("btn_resumo");
            var btn_comentarios = document.getElementById("btn_comentarios");

            btn_aula.addEventListener("click", () => {
                document.getElementById("div_atividade").style.display = "none";
                document.getElementById("div_aula").style.display = "grid";
            });

            btn_code.addEventListener("click", () => {
                document.getElementById("div_atividade").style.display = "block";
                document.getElementById("div_aula").style.display = "none";
            });

            btn_resumo.addEventListener("click", () => {
                document.getElementById("div_resumo").style.display = "block";
                document.getElementById("div_comentarios").style.display = "none";
            });

            btn_comentarios.addEventListener("click", () => {
                document.getElementById("div_resumo").style.display = "none";
                document.getElementById("div_comentarios").style.display = "block";
            });
            
            document.getElementById("logout").onclick = function () {
                Swal.fire({
                    title: '<h1 style="color: white;">Deseja mesmo sair ?</h1>',
                    icon: "warning",
                    showCancelButton: true,
                    focusConfirm: false,
                    confirmButtonText: "Sim, quero sair!",
                    confirmButtonAriaLabel: "Thumbs up, great!",
                    confirmButtonColor: "#FF4935",
                    cancelButtonText: "Cancelar",
                    cancelButtonAriaLabel: "Thumbs down",
                    cancelButtonColor: "#1c96c5",
                    background: "#474547",
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "../index.php?acao=logout";
                    }
                });
            };