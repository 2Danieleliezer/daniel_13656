<?php
include("../menu/top.php");
?>
<div class="modal-body mt-1">
    <a href="home" class="btn btn-primary">Tablas</a>
</div>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <style>
    .fakeimg {
        height: 200px;
        background: #aaa;
    }
    </style>

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="configuraciones/imagenes/banner_promociones.jpg" alt="promociones"
                    style="width: 36cm; left: 60cm;">
            </div>
            <div class="carousel-item">
                <img src="configuraciones/imagenes/h_moxie-1.jpg" alt="moxie" style="width: 36cm; left: 60cm;">
            </div>
            <div class="carousel-item">
                <img src="configuraciones/imagenes/promocion_sotano_era-2.jpg" alt="sotano era"
                    style="width: 36cm; left: 60cm;">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
    <br>
    <center>
        <div class="modal-body mt-3">
            <h1>Cambiar image</h1>
            <input type="submit" id="boton" class="btn btn-warning" onclick="Mostrar_Ocultar()" value="Auto">
            <img src="configuraciones/imagenes/supreauto.jpg" id="caja">
            <input type="submit" id="botonA" class="btn btn-primary" onclick="Mostrar_OcultarA()" value="Arbol">
            <img src="configuraciones/imagenes/abrolcalle.jpg" id="arbol" class="img-thumbnail" style="width: 170px;">
            <br>
        </div>
    </center>
</body>
<script src="configuraciones/js/dany/mostrar_ocultar.js "></script>


<?php
include("../menu/bot.php");
?>