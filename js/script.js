function regProducto() {
    var x = document.getElementById("productos-registro");
    var y = document.getElementById("productos-modificar");
    var xx = document.getElementById("registrar-p");
    var yy = document.getElementById("modificar-p");


    x.style.display = "flex";
    xx.style.background = "#40acd7";
    xx.style.color = "ffffff";
    yy.style.background = "#ffffff";
    yy.style.color = "#444444";
    y.style.display = "none";


}

function modProducto() {
    var x = document.getElementById("productos-registro");
    var y = document.getElementById("productos-modificar");
    var xx = document.getElementById("registrar-p");
    var yy = document.getElementById("modificar-p");

    y.style.display = "flex";
    yy.style.background = "#40acd7";
    xx.style.color = "ffffff";
    xx.style.background = "#ffffff";
    xx.style.color = "#444444";
    x.style.display = "none";
}