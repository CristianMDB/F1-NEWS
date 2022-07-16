<?php require "login.php";?>


<!-- TITULO DE SECCION -->
<section>
    <div class="titulo_seccion">
        <h1>NOTICIAS</h1>
    </div>


<!-- FLECHAS SCROLL DOWN -->
    <a href="#not" class="scroll-down" address="true">
    <div class="scroll-down">
        
        <span></span>
        <span></span>
        <span></span>
    </div></a>
</section>
<a name="not"></a>


<!-- CONTENIDO NOTICIAS -->
<section>
    <div class="container_noticia">
        <?php
        // CONEXION CON API DE NOTICIAS EN LOS ULTIMOS 15 DIAS
        $to = date("y-m-d");
        $from = Date('y-m-d', strtotime('-15 days'));
        $url = "https://newsapi.org/v2/everything?q=f1-2022&from=$from&to=$to&language=es&apiKey=b7fd928c622b49029fca284671c236e1";
        $response = file_get_contents($url);
        
        /* json QUE DEVUELVE LA API CON LAS NOTICIAS AL QUE CON UN FOREACH ACCEDE A CADA UNA DE LAS NOTICIAS CON UNA URL, 
        UNA IMAGEN, TITULO, DESCRIPCION, AUTOR Y PUBLICACION DE CADA NOTICIA*/

        $newsData = json_decode($response);
        foreach ($newsData->articles as $news) {
        ?>
        <a href="<?= $news->url ?>">
            <div class="noticia">
                <div class="foto_noticia">
                    <a href="<?= $news->url ?>"><img class="foto_not" src="<?= $news->urlToImage ?>"></a>
                </div>
                <div class="info_noticia">
                    <a href="<?= $news->url ?>">
                        <h5><?= $news->title ?></h5>
                    </a>
                    <p><?= $news->description ?></p>
                    <h9>Autor: <?= $news->author ?></h9>
                    <p><?= $news->publishedAt ?></p>
                </div>
            </div>
        </a>
        <?php
        }
        ?>
    </div>
</section>