<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="src/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="src/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="src/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>F1 NEWS</title>
    <link rel="stylesheet" href="/CSS/estilos.css">
</head>
<body>
    <main class="container">

        <!-- BACKGROUND -->
        <div class="background"></div>

        <!-- CABECERA -->

        <div id="cabecera"><?php require "./PHP/cabecera.php"; ?></div>

        <!-- CONTENIDO -->

        <div id="contenido">

            <!--PORTADA-->

            <div id="portada"><?php require "./PHP/portada.php"; ?></div>
            <!-- TITULO -->

            <div id="titulo"></div>

            <!--LOGIN -->

            <section id="login">
                <div id="titulo_acceso"></div>
                <div class="login_portada">
                    <form onsubmit="return login()" method="POST">
                        <div class="container_login">
                            <div class="container1">
                                <input type="text" name="usuario" id="usuario_log" placeholder="Usuario" required><br>
                            </div>
                            <div class="container2">
                                <input type="password" name="clave" id="clave_log" placeholder="Contraseña"
                                    required><br>
                            </div>
                            <div class="container3">
                                <input type="submit" value="ENTRAR">
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            <!--SINGUP -->

            <section id="alta_usuario">
                <div class="alta_usuario_portada">
                    <form onsubmit="return alta_usuario()" method="post">
                        <div class="container_alta_usuario">

                            <input type="text" id="usuario" placeholder="Usuario" required>
                            <input type="password" id="clave" placeholder="Contraseña" required>
                            <input type="text" id="nombre" placeholder="Nombre" required>
                            <input type="text" id="apellidos" placeholder="Apellidos" required>
                            <input type="email" id="email" placeholder="Email" required>
                            <input type="text" id="fecha_nac" onfocus="(this.type = 'date')"
                                placeholder="Fecha de nacimiento" required>
                            <input type="text" id="direccion" placeholder="Dirección" required>
                            <input type="text" id="cp" placeholder="Código postal" required>
                            <input type="text" id="pais" placeholder="País" required>
                            <input type="submit" id="submit" value="REGISTRARSE">
                        </div>
                    </form>
                </div>
            </section>

            <!-- HOME -->

            <section id="home"><?php require "./PHP/home.php"; ?></section>

            <!-- NOTICIAS -->

            <section id="noticias"><?php require "./PHP/noticias.php"; ?></section>

            <!-- CARRERAS -->

            <section id="circuitos"> <?php require "./info/circuitos2022.php" ?> </section>

            <!-- EQUIPOS -->

            <section id="equipos"> <?php require "./info/equipos2022.php" ?> </section>

            <!-- PILOTOS -->

            <section id="pilotos"> <?php require "./info/pilotos2022.php" ?> </section>

            <!-- FOOTER -->
            <div id="footer"><?php require "./PHP/footer.php"; ?></div>
        </div>
        <!-- FIN DE CONTENIDO -->

    </main>
    <!-- FIN DE CONTAINER -->
</body>

<!-- SCRIPTS -->
<script src="/JS/alta_usuario.js"></script>
<script src="/JS/login.js"></script>
<script src="/JS/secciones.js"></script>

</html>