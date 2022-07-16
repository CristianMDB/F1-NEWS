<!-- SECCION PILOTOS-->
<section>
    <div class="titulo_seccion">
        <h1>PILOTOS</h1>
    </div>
    <!-- FLECHAS DE SCROLL DOWN DE LA PORTADA DE LA SECCION PILOTOS -->
    <a href="#not5" class="scroll-down" address="true">
        <div class="scroll-down">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </a>
</section>

<a name="not5"></a>

<!-- CONTAINER DE LA SECCION PILOTOS -->

<div class="container_pilotos">
    <?php

    //CONEXION CON LA API
    $url = "https://ergast.com/api/f1/2022/drivers.json?pilotos";
    $response = file_get_contents($url);
    
    
    //JSON DE LOS PILOTOS DE LA TEMPORADA 2022
    $pilotos = json_decode($response);
    ?>
    
    <!-- TABLA QUE MUESTRA PILOTOS-->
    <table>

        <?php
        foreach ($pilotos->MRData->DriverTable->Drivers as $piloto) {
        ?>

            <tr onclick="window.location.href='<?= $piloto->url ?>';">
                <td><?= $piloto->givenName  ?> <?= $piloto->familyName ?></td>
                <td><?= $piloto->code ?></td>
                <td><?= $piloto->nationality ?></td>
            </tr>

        <?php
        }
        ?>
    </table>
</div>
