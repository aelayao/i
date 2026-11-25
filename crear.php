<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <title>InfoGames</title>
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="include/materialize/css/materialize.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body class="blue darken-2">
    <div class="margen">

        <div class="grey darken-4">
            <div class="row  right-align grey lighten-5" id="corazao">
                <section class=" col l11 offset-l1 m10 offset-m2 s9 offset-s3 ">
                    <img src="imgs/corazao.png" alt="corazones pixel" width="50" class="responsive-img">
                    <img src="imgs/corazao.png" alt="corazones pixel" width="50" class="responsive-img">
                    <img src="imgs/corazao_vacio.png" alt="corazones pixel" width="50" class="responsive-img">
                </section>
            </div>

            <header>
                <nav class="row yellow darken-1 right-align g-5">
                    <section class="container col s12 m12 l12">
                        <a href="home_adm.html" class="left"><img src="imgs/logo.png" alt="info games logo"
                                class="responsive-img s1 l3 m2 hide-on-med-and-down" width="300"></a>
                        <ul class="right s12 l12 m12">
                            <li><a href="home_adm.html" class="grey-text text-darken-4 show-on-medium-and-down hide-on-med-and-up">InfoGames</a>
                            <li><a href="todos_admin.html" class="grey-text text-darken-4 " id="nav1">todos los artículos</a>
                            </li>
                            <li><a href="perfil_adm.html" class="grey-text text-darken-4" id="nav2">perfil</a></li>
                            <li><a href="cerrar_sesion.html" class="grey-text text-darken-4" id="nav3">cerrar sesión</a>
                            </li>
                        </ul>
                    </section>
                </nav>
            </header>
        </div>
        <div class="row margen">

            <main class="col s12 m12 l12 grey lighten-5" id="cont_lateral">

                <h2>Nombre del juego:</h2>
                <form action="">
                    <input type="text" class="inpt browser-default"><br><br><br>
                    <label for="descripcion" class="lbl">Descripción del artículo:</label><br>
                    <textarea name="descripcion" id="descripcion" class="inpt_med" rows="10" cols="50"></textarea><br><br>

                    <label for="img_p" class="lbl">Imagen principal:</label><br>
                    <input type="file" id="img_p browser-default"><br><br>

                    <label for="subtit" class="lbl">Subtítulo de sección:</label><br>
                    <input type="text" class="inpt browser-default" id="subtit"><br><br>

                    <label for="contnt" class="lbl">Contenido:</label><br>
                    <textarea name="contnt" id="contnt" class="inpt_med" rows="10" cols="50"></textarea><br><br>

                    <img src="imgs/añadir.png" alt="añadir">
                    <a href="#">Agregar nueva sección</a><br><br>

                    <label for="img_g" class="lbl">Imagenes para la galería:</label><br>
                    <input type="file" id="img_g browser-default"><br><br>
                    <button type="submit" class="boton light-green accent-4">GUARDAR</button> <a href="art_admin.html" class="boton pink">VOLVER</a>
                </form>

            </main>
        </div>

    </div><br>
    <footer class="right-align grey-text text-lighten-5 grey darken-4 row">
        <section class="col s1 offset-s7 l2 offset-l8 m1 offset-m8">
            <div class="blue-grey darken-2">
                <a href="https://instagram.com"><img src="imgs/inst.png" alt="red social" class="sns blue-grey darken-2 left p-5 m-6 responsive-img"></a>
                <a href="https://facebook.com"><img src="imgs/fb.png" alt="red social" class=" sns blue-grey darken-2 left p-5 m-6 responsive-img"></a>
                <a href="https://x.com/?lang=es"><img src="imgs/twt.png" alt="red social" class=" sns blue-grey darken-2 left p-5 m-6 responsive-img"></a>
            </div>
            
            
        </section>
        <section class="col right-align s4 l2 m3 grey-text text-lighten-5">
            <h4>InfoGames</h4>
            <p>Wiki de videojuegos</p>
            <p>TID 4°A</p>
            <p>Derechos Reservados&copy;</p>
        </section>
    </footer>
</body>

</html>