function Mostrar() {
    document.getElementById("caja").style.display = "block";
}

function Ocultar() {
    document.getElementById("caja").style.display = "none";
}

function Mostrar_Ocultar() {
    var caja = document.getElementById("caja");

    if (caja.style.display == "none") {
        Mostrar();
        document.getElementById("boton").value = "Auto";
    } else {
        Ocultar();
        document.getElementById("boton").value = "Auto";
    }
}


function MostrarA() {
    document.getElementById("arbol").style.display = "block";
}

function OcultarA() {
    document.getElementById("arbol").style.display = "none";
}

function Mostrar_OcultarA() {
    var caja = document.getElementById("arbol");

    if (arbol.style.display == "none") {
        MostrarA();
        document.getElementById("botonA").value = "Arbol";
    } else {
        OcultarA();
        document.getElementById("botonA").value = "Arbol";
    }
}