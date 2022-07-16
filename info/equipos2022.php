<!-- SECCION EQUIPOS-->
<section>
    <div class="titulo_seccion">
        <h1>EQUIPOS</h1>
    </div>
    <!-- FLECHAS DE SCROLL DOWN DE LA PORTADA DE LA SECCION EQUIPOS -->
    <a href="#not3" class="scroll-down" address="true">
        <div class="scroll-down">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </a>
</section>
<a name="not3"></a>

<!-- CONTAINER DE LA SECCION EQUIPOS -->

<section class="container_equipos">
    <?php
    
    //CONEXION CON LA API
    $url = "https://ergast.com/api/f1/2022/constructors.json?equipos";
    $response = file_get_contents($url);
    
    //JSON DE LOS CONSTRUCTORES DE LA TEMPORADA 2022
    $constructores = json_decode($response);
    ?>

    <!-- TABLA QUE MUESTRA CONTRUCTORES-->
    <table>
        <?php
        foreach ($constructores->MRData->ConstructorTable->Constructors as $equipo) {
        ?>

            <tr onclick="window.location.href='<?= $equipo->url ?>';">
                <td><?= $equipo->name ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</section>