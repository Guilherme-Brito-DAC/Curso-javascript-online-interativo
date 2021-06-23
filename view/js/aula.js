var editor = monaco.editor.create(document.getElementById("editor"), {
    value: ["function x() {", '\tconsole.log("Hello world!");', "}"].join("\n"),
    language: "javascript",
    theme: "vs-dark",
    automaticLayout: true,   
});

document.getElementById("btn_play").addEventListener("click", () => {

    var value =  editor.getValue();
              
    try {
        eval(value)
    }
    catch(err) {
        console.log(err)
    }
        
});

document.getElementById("btn_reset").addEventListener("click", () => {
    editor.getModel().setValue(aulas[aula-1].valor.toString());
});

var ThemeDark = true;
document.getElementById("btn_theme").addEventListener("click", () => {

    if(ThemeDark)
    {
        monaco.editor.setTheme("vs")
        document.getElementById("btn_theme").innerHTML = "Claro"
        ThemeDark = false
    }
    else
    {
        monaco.editor.setTheme("vs-dark")
        document.getElementById("btn_theme").innerHTML = "Escuro"
        ThemeDark = true
    }
});

var fullscreen = false
document.getElementById("btn_fullscreen").addEventListener("click", () => {
    if(fullscreen)
    {
        fullscreen = false
        document.getElementById("btn_fullscreen").innerHTML = `<img src="https://img.icons8.com/material-sharp/20/ffffff/full-screen--v1.png"/>`
        document.getElementById("menubar").style.display = "block"
        document.getElementById("atividade").style.display = "block"
        document.getElementById("aulamenu").style.display = "flex"
        document.getElementById("editor_tools").style.backgroundColor = "#232323"
        document.getElementById("main").style.padding = "5rem"
    }
    else
    {
        fullscreen = true
        document.getElementById("btn_fullscreen").innerHTML = `<img src="https://img.icons8.com/ios/20/ffffff/compress.png"/>`
        document.getElementById("menubar").style.display = "none"
        document.getElementById("aulamenu").style.display = "none"
        document.getElementById("atividade").style.display = "none"
        document.getElementById("editor_tools").style.backgroundColor = "#191919"
        document.getElementById("main").style.padding = "0"
    }
});

window.onresize = () => {
        editor.layout();
};
