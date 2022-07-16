//FUNCION PARA MOSTRAR EL FORMULARIO DE ALTA DE USUARIO

function mostrar_alta_usuario() {

    document.getElementById("login").style.display ="none";
    document.getElementById("portada").style.display = "none";
    document.getElementById("noticias").style.display = "none";
    document.getElementById("alta_usuario").style.display ="block";
    let titulo = document.getElementById("titulo");
    titulo.innerHTML = "ALTA USUARIO";

}

//FUNCION PARA RECOGER LOS DATOS DEL FORMULARIO Y MANDARLOS A alta_usuario_json PARA REGISTRARLOS EN LA BASE DE DATOS
function alta_usuario(){

    let usuario = document.getElementById("usuario").value;
    let clave = document.getElementById("clave").value;
    let nombre = document.getElementById("nombre").value;
    let apellidos = document.getElementById("apellidos").value;
    let email = document.getElementById("email").value;
    let fecha_nacimiento = document.getElementById("fecha_nac").value;
    let direccion = document.getElementById("direccion").value;
    let cp = document.getElementById("cp").value;
    let pais = document.getElementById("pais").value;

    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200){

            alert("Usuario registrado con éxito");
            document.getElementById("portada").style.display = "none";
            document.getElementById("alta_usuario").style.display ="none";
            document.getElementById("login").style.display ="block";

        }
    }

    let params = "usuario="+usuario+"&clave="+clave+"&nombre="+nombre+"&apellidos="+apellidos+"&email="+email+"&fecha_nacimiento="+fecha_nacimiento+"&direccion="+direccion+"&cp="+cp+"&pais"+pais;
    xhttp.open("POST","./PHP/alta_usuario_json.php", true);
    console.log(params);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhttp.send(params);
    
}