//FUNCION QUE MUESTRA EL FORMULARIO DE LOGIN
function mostrar_login() {

    document.getElementById("alta_usuario").style.display = "none";
    document.getElementById("portada").style.display = "none";
    document.getElementById("noticias").style.display = "none";
    document.getElementById("login").style.display = "block";
    document.getElementById("titulo").style.display = "block";
    let titulo = document.getElementById("titulo");
    titulo.innerHTML = "LOGIN";

}

//FUNCION PARA RECOGER LOS DATOS DEL FORMULARIO Y MANDARLOS A login_json PARA MANDARLOS A LA BASE DE DATOS Y COMPROBAR SI EXISTEN O NO
function login() {
    let usuario = document.getElementById("usuario_log").value;
    let clave = document.getElementById("clave_log").value;
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText === "FALSE") {
                alert("Revise usuario y contraseña.");
                mostrar_login();
            } else {
                document.getElementById("alta_usuario").style.display = "none";
                document.getElementById("portada").style.display = "none";
                document.getElementById("noticias").style.display = "none";
                document.getElementById("home").style.display = "block";
                document.getElementById("login").style.display = "none";
                document.getElementById("menu_nav").style.display = "block";
                document.getElementById("acceso_nav").style.display = "none";
                titulo.innerHTML = "";
                document.getElementById("usuario_nav").innerHTML += " " + usuario;
            }
        }
    }
    let params = "usuario_log=" + usuario + "&clave_log=" + clave;

    xhttp.open("POST", "./PHP/login_json.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(params);
    return false;
}


//FUNCION PARA CERRAR SESION Y MOSTRAR LA PORTADA(PAGINA PRINCIPAL)
function logout() {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            mostrar_login();
            document.getElementById("alta_usuario").style.display = "none";
            document.getElementById("portada").style.display = "block";
            document.getElementById("noticias").style.display = "none";
            document.getElementById("home").style.display = "none";
            document.getElementById("login").style.display = "none";
            document.getElementById("menu_nav").style.display = "none";
            document.getElementById("home").style.display = "none";
            document.getElementById("noticias").style.display = "none";
            document.getElementById("circuitos").style.display = "none";
            document.getElementById("equipos").style.display = "none";
            document.getElementById("pilotos").style.display = "none";
            document.getElementById("footer").style.display = "none";
            document.getElementById("titulo").style.display = "none";
            document.getElementById("usuario_nav").innerHTML= "Bienvenido";

            alert("Sesion cerrada con exito");
        }
    };
    xhttp.open("GET", "./PHP/logout_json.php", true);
    xhttp.send();
    return false;
}

