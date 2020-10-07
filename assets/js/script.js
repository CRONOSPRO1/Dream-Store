function registrar() {
    alert("Registrate y publica!")
    location = href = "registro-usuario.php"
}

function insertar() {
    alert("En mantenimiento");
}

function favoritos() {
    alert("Agregado a la lista de deseos")
}

function añadir_user() {
    alert("Registrate para poder añadir al carrito");
    location = href = "../registro-usuario.php"
}

function agregar_carrito() {
    alert("Agregado al carrito")
}

function buscar() {
    var resultado_buscar = document.getElementById("buscar").value;

    location = href = "buscar.php"


}

function ingresar_usuario() {
    var nombre = document.getElementById("email").value;

    alert("Bienvenido" + nombre);
    location = href = "index-usuario.php";
}

function contactar() {
    alert("No puedes contactar al vendedor ,registrate y podras ver informacion del vendedor")
}

function temporizador() {
    setTimeout(function() {
        location.href = "../index.php"
    }, 3300);
}

function temporizadorb() {
    setTimeout(function() {
        location.href = "../inicio-usuario.php"
    }, 3300);
}

function temporizadorc() {
    setTimeout(function() {
        location.href = "../index.php"
    }, 3300);
}
/*object.onkeypress = function(){buscar()};
function buscar(){(
 var buscar = document.getElementByI("buscar");
 document.getElementsByName("buscar")=buscar;

}*/