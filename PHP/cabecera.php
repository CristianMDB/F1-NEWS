<!-- NAVBAR SUPERIOR DINÁMICO QUE CAMBIA ENTRE LOGIN/SINGUP y MENU INTERNO UNA VEZ LOGUEADO-->

<div class="container_cabecera">
    <div class="logo">
        <h1><a href="#"> F1 NEWS</a></h1>
    </div>
    <div id="menu_nav">

        <!-- MENU DE NAVEGACION CUANDO EL USUARIO ESTA LOGUEADO-->

        <div class="menu">
            <div class="home_nav">
                <a href="#" onclick="mostrar_home()">HOME</a>
            </div>
            <div class="noticias_nav">
                <a href="#" onclick="mostrar_noticias()">NOTICIAS</a>
            </div>
            <div class="carreras">
                <a href="#" onclick="mostrar_circuitos()">CARRERAS</a>
            </div>
            <div class="equipos">
                <a href="#" onclick="mostrar_equipos()">EQUIPOS</a>
            </div>
            <div class="pilotos">
                <a href="#" onclick="mostrar_pilotos()">PILOTOS</a>
            </div>
            <div>
                <a class="cerrar_sesion" onclick="logout();" href="#">
                    <h4 id="usuario_nav">Bienvenido</h4>
                </a>
            </div>
        </div>

        <!-- MENU DESPLEGABLE VERSION MOVIL -->
        <div id="nav_mov">
            <div id="home_nav_mov">

                <input id ="boton_nav" type="checkbox"/>
                <span></span>
                <span></span>
                <span></span>

                <ul class="menu_mov" id="home_nav_mov_ul">
                    <a href="#" onclick="mostrar_home()">
                        <li> HOME </li>
                    </a>
                    <a href="#" onclick="mostrar_noticias()">
                        <li> NOTICIAS </li>
                    </a>
                    <a href="#" onclick="mostrar_circuitos()">
                        <li> CIRCUITOS </li>
                    </a>
                    <a href="#" onclick="mostrar_equipos()">
                        <li> EQUIPOS </li>
                    </a>
                    <a href="#" onclick="mostrar_pilotos()">
                        <li> PILOTOS </li>
                    </a>
                    <a class="cerrar_sesion_mov" onclick="logout();" href="#">
                        <li>CERRAR SESIÓN</li>
                    </a>

                </ul>
            </div>
        </div>

        <!-- MENU DE NAVEGACION EN LA PORTADA CUANDO EL USUARIO AUN NO ESTA LOGUEADO-->
    </div>
    <div id="acceso_nav">
        <div class="acceso">
            <div class="login">
                <h1><a href="#" onclick="mostrar_login();">LOG IN</a></h1>
            </div>
            <div class="singup">
                <h1><a href="#" onclick="mostrar_alta_usuario();">SIGN UP</a></h1>
            </div>
        </div>
    </div>
</div>