<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/balata.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/servicios.css">
    <title>Servicios</title>
</head>

    <body>
        <header class="header">
            <a href="#" class="header__logo">Mexper Friction</a>
            <ion-icon name="menu-outline" class="header__toggle" id="nav-toggle"></ion-icon>
            <nav class="nav" id="nav-menu">
                <div class="nav__content bd-grid">
                    <ion-icon name="close-outline" class="nav__close" id="nav-close"></ion-icon>
                    <div class="nav__perfil">
                        <div class="nav__img">
                            <img src="img/logo.png" alt="">
                        </div>

                        <div>
                            <a href="#" class="nav__name"></a>
                            <span class="nav__profesion">Mexper Friction</span>
                        </div>
                    </div>
                    <div class="nav__menu">
                        <ul class="nav__list">
                          <li class="nav__item"><a href="index.php" class="nav__link active">Inicio</a></li>
                          <li class="nav__item"><a href="servicios.php" class="nav__link">Servicios</a></li>
                          <li class="nav__item"><a href="balatas.php" class="nav__link">Catálogo Balatas</a></li>
                          <li class="nav__item"><a href="nosotros.php" class="nav__link">Nosotros</a></li>
                          <li class="nav__item"><a href="contacto.php" class="nav__link">Contacto</a></li>
                        </ul>
                    </div>

                    <div class="nav__social">
                        <a href="https://www.facebook.com/bmexper" target="_blank" class="nav__social-icon"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="https://api.whatsapp.com/send?phone=5554108915&text=¿Qué servicios ofrecen?" target="_blank" class="nav__social-icon"><ion-icon name="logo-whatsapp"></ion-icon></a>
                        <a href="https://www.instagram.com/balatasmexper/" target="_blank" class="nav__social-icon"><ion-icon name="logo-instagram"></ion-icon></a>
                    </div>
                </div>
            </nav>
        </header>
  <main class="main">
            <!--<div class="container">
                <h1>Servicios</h1>
              <a href="servicio_balatas.html"> <p> Cambio de balatas </p> </a>
              <a href="servicio_aceite.html"> <p> Cambio de aceite </p> </a>
              <a href="servicio_afinacion.html"> <p> Afinación completa </p> </a>
              <a href="servicio_amortiguadores.html"> <p> Cambio de amortiguadores </p> </a>
            </div>-->

            <div class="container1">
            	<div class="card1">
            		<div class="imgBx" data-text="Cambio de balatas">
            			<img src="img/balatas.png" alt="">
            		</div>
            		<div class="content1">
            			<div>
            				<h3>Cambio de balatas</h3>
            				<p>Mantén las balatas de tu automóvil en excelente estado, ya que son un elemento clave del sistema de frenado para conducir con seguridad.<br><i><b>¡Mexper te ofrece el mejor servicio con los mejores productos!</i></b></p>
            				<a href="servicio_balatas.php">Leer más</a>
            			</div>
            		</div>
            	</div>

            	    <div class="card1">
            		<div class="imgBx" data-text="Cambio de aceite">
            		<img src="img/aceite.png" alt="">
            		</div>
            		<div class="content1">
            		<div>
            		<h3>Cambio de aceite</h3>
            		<p>El cambio de aceite previene el desgaste de su motor, limpia y reduce los contaminantes de combustión, el polvo y las filtraciones de vapor.<br><i><b>¡Venga con los expertos de Mexper a realizar su cambio!</i></b></p>
            		<a href="servicio_aceite.php">Leer más</a>
            		</div>
            		</div>
            	</div>

            	            	<div class="card1">
            		<div class="imgBx" data-text="Afinación completa">
            			<img src="img/afinacion.png" alt="">
            		</div>
            		<div class="content1">
            			<div>
            				<h3>Afinación Completa</h3>
            				<p>Una perfecta afinación determina el buen funcionamiento del motor y del vehículo en general aumentando el rendimiento de combustible<br><i><b>¡Adquiera este servicio con los especialistas de Mexper!</i></b></p>
            				<a href="servicio_afinacion.php">Leer más</a>
            			</div>
            		</div>
            	</div>

            	            	<div class="card1">
            		<div class="imgBx" data-text="Cambio de amortiguadores">
            			<img src="img/amortiguadores.png" alt="">
            		</div>
            		<div class="content1">
            			<div>
            				<h3>Cambio de amortiguadores</h3>
            				<p>Un amortiguador en excelente estado es valioso para su seguridad, otorga mayor adherencia para su vehículo.<br><i><b>¡Conozca el servicio que Mexper tiene para usted¡</i></b></p>
            				<a href="servicio_amortiguadores.php">Leer más</a>
            			</div>
            		</div>
            	</div>

            </div>

        </main>

        <footer class="footer">
            <div class="contanier-img">
              <img class="contanier_img"src="img/epoxemex.png" alt="contanier_img">
              <img class="contanier_img" src="img/dmd.png" alt="contanier_img">
              <img class="contanier_img"src="img/feno.png" alt="contanier_img">

              <p align=center href="#" class="bob"> <b> ® Mexper Friction - Todos los Derechos Reservados. </p>
              <p align=center href="#" class="bobi"> Términos y Condiciones </p>
              <p align=center href="#" class="bobs"> Política de Privacidad </p> </b>
            </div>
        </footer>

        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

        <!--===== MAIN JS =====-->
        <script src="js/main.js"></script>
    </body>
</html>
