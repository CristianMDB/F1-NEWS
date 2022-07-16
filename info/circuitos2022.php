<!-- SECCION CIRCUITOS-->

<section>
    <div class="titulo_seccion">
        <h1>CARRERAS</h1>
    </div>

    <!-- FLECHAS DE SCROLL DOWN DE LA PORTADA DE LA SECCION CIRCUITOS -->
    <a href="#not2" class="scroll-down" address="true">
        <div class="scroll-down">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </a>
</section>
<a name="not2"></a>

<!-- CONTAINER DE LA SECCION CIRCUITOS -->

<section class="container_circuitos">
    <?php

    //CONEXION CON LA API 
    $url = "https://ergast.com/api/f1/2022.json?circuitos";
    $response = file_get_contents($url);

    //JSON DE LOS CIRCUITOS DE LA TEMPORADA 2022
    $circuitos = json_decode($response);
    ?>

    <!-- TABLA QUE MUESTRA CIRCUITOS-->
    <table>
        <?php
        foreach ($circuitos->MRData->RaceTable->Races as $circuito) {
        ?>
            <tr onclick="window.location.href='<?= $circuito->url ?>';">
                <td><?= $circuito->Circuit->circuitName ?></td>
                <td><?= $circuito->Circuit->Location->locality ?></td>
                <td><?= $circuito->Circuit->Location->country ?></td>
                <td><?= $circuito->date ?></td>
                <td><?= $circuito->time ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</section>
