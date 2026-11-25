<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoGames</title>
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="include/materialize/css/materialize.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body class="blue darken-2">
    <div class="margen">
        <div class="grey darken-4">
            <div class="row  left-align grey lighten-5" id="corazao">
                <section class=" col l11 offset-l1 m10 offset-m2 s9 offset-s3 ">
                    <img src="imgs/corazao.png" alt="corazones pixel" width="50" class="responsive-img">
                    <img src="imgs/corazao.png" alt="corazones pixel" width="50" class="responsive-img">
                    <img src="imgs/corazao_vacio.png" alt="corazones pixel" width="50" class="responsive-img">
                </section>
            </div>

            <header>
                <nav class="row yellow darken-1 right-align g-5">
                    <section class="container col s12 m12 l12">
                        <a href="index.html" class="right"><img src="imgs/logo.png" alt="info games logo"
                                class="responsive-img s1 l3 m2 hide-on-med-and-down" width="300"></a>
                        
                    </section>
                </nav>
            </header>
        </div>


        <div class="row margen">
            <aside class="col s12 m3 l3 right">
                <img src="imgs/graphic2.png" alt="Consolas de mano" class="imagen-lateral-consolas-verde" width="380">
            </aside>

            <main class="col s12 m9 l9 grey lighten-5 left" id="cont_lateral">

                <h1 id="sustitulo" >Iniciar sesión</h1>
                <form action="">
                    <label for="correo" class="lbl">Correo electronico:</label><br>
                    <input type="text" name="correo" id="correo"class="inpt browser-default" required>
                    <br><br>
                    <label for="contra" class="lbl">Contraseña:</label><br>
                    <input type="password" name="contra" id="contra" class="inpt browser-default" required>
                    <br><br><br><br><br>
                    <section class="col offset-l7">
                        <button type="submit" class="boton light-green accent-4 row">INICIAR SESIÓN</button><br>
                        <a href="registro.html" class="right-align row link_reg">¿No tienes cuenta? Registrate aquí...</a>
                    </section>
                    
                </form>
            </main>
        </div>
    </div><br><br>
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