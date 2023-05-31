<?php require('layouts/header.php');  ?>
      
    <div class="contenido">

        <div class="contenidoFaltan">
            <p>FALTAN</p>
        </div>
        
        <div class="contador" id="contador">
            <div class="circulo">
                <span class="tiempo" id="dias">00</span>
                <p class="tiempoT">DÍAS</p>
            </div>
            <div class="circulo">
                <span class="tiempo" id="horas">00</span>
                <p class="tiempoT">HRS</p>
            </div>
            <div class="circulo">
                <span class="tiempo" id="minutos">00</span>
                <p class="tiempoT">MIN.</p>
            </div>
            <div class="circulo">
                <span class="tiempo" id="segundos">00</span>
                <p class="tiempoT">SEG</p>
            </div>
        </div>
        
        <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/mAinJyxqrBY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div class="claro">
            <BR>
            <div class="textoClaro">
                <p>CLARO SPORTS EN SOCHI 2014</p>
            </div>
            
            <div class="imgs">
                <div class="img1"> 
                    <a href="index.php"><img class="imagen" src="img/team-latam.png"></a>
                    <p class="textoItem">TEAM LATAM</p>
                </div>
                <div class="img2"> 
                    <a href="views/video2.php"><img class="imagen" src="img/travel-meets-fashion.png"></a>
                    <p class="textoItem" >TEAM LATAM</p> 
                </div>
                <div class="img3"> 
                    <a href="views/video3.php"><img class="imagen" src="img/velocidad-riesgo.png" ></a>
                    <p class="textoItem" >TEAM LATAM</p> 
                </div>
                <div class="img4"> 
                    <a href="views/video4.php"><img class="imagen" src="img/experiencia.png" ></a>
                    <p class="textoItem" >TEAM LATAM</p>
                </div>
            </div>
        </div>
    </div>

<?php include('layouts/footer.php'); ?>