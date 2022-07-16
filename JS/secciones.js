//FUNCION PARA MOSTRAR LA SECCION NOTICIAS
function mostrar_noticias(){

    document.getElementById("home").style.display = "none";
    document.getElementById("noticias").style.display = "block";
    document.getElementById("circuitos").style.display = "none";
    document.getElementById("equipos").style.display = "none";
    document.getElementById("pilotos").style.display = "none";
    document.getElementById("footer").style.display = "block";
    document.getElementById("boton_nav").checked = false;
    
}

//FUNCION PARA MOSTRAR LA SECCION CARRERAS
function mostrar_circuitos(){
    
    document.getElementById("home").style.display = "none";
    document.getElementById("noticias").style.display = "none";
    document.getElementById("circuitos").style.display = "block";
    document.getElementById("equipos").style.display = "none";
    document.getElementById("pilotos").style.display = "none";
    document.getElementById("footer").style.display = "block";
    document.getElementById("boton_nav").checked = false;

}

//FUNCION PARA MOSTRAR LA SECCION EQUIPOS
function mostrar_equipos(){
    
    document.getElementById("home").style.display = "none";
    document.getElementById("noticias").style.display = "none";
    document.getElementById("circuitos").style.display = "none";
    document.getElementById("equipos").style.display = "block";
    document.getElementById("pilotos").style.display = "none";
    document.getElementById("footer").style.display = "block";
    document.getElementById("boton_nav").checked = false;

}

//FUNCION PARA MOSTRAR LA SECCION PILOTOS
function mostrar_pilotos(){
    
    document.getElementById("home").style.display = "none";
    document.getElementById("noticias").style.display = "none";
    document.getElementById("circuitos").style.display = "none";
    document.getElementById("equipos").style.display = "none";
    document.getElementById("pilotos").style.display = "block";
    document.getElementById("footer").style.display = "block";
    document.getElementById("boton_nav").checked = false;

}

//FUNCION PARA MOSTRAR LA SECCION HOME
function mostrar_home(){

    document.getElementById("footer").style.display = "none";
    document.getElementById("home").style.display = "block";
    document.getElementById("noticias").style.display = "none";
    document.getElementById("circuitos").style.display = "none";
    document.getElementById("equipos").style.display = "none";
    document.getElementById("pilotos").style.display = "none";
    document.getElementById("boton_nav").checked = false;

}
