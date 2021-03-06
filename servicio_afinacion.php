<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/balata.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/safinacion.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Afinación completa</title>
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
                          <li class="nav__item"><a href="balatas.php" class="nav__link">Catalogo Balatas</a></li>
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
            <section class="acerca-de">
            <div class="contenedor">
                <h2 class="sobre-nosotros">Afinación Completa</h2>
                <h3 class="slogan">Mantenga el desempeño y la eficiencia original de su vehículo </h3>
                <div class="line-mf"></div> <br>
                <p class="parrafo">La afinación mayor consiste en evitar el desgaste temprano de los componentes del motor. Ayuda a reducir los consumos de gasolina, a mejorar el desempeño del motor, a que haya menos emisión de contaminantes y que el encendido en frío sea rápido.</p>
                <p class="parrafo">El objetivo principal de <i><b>MEXPER-FRICTION</b></i> para una afinación del motor es poder mantener el servicio y la eficiencia original de su vehículo. Esto se logra mediante la sustitución de partes que por su uso normal se
                desgastan o pierden su efectividad en su funcionamiento.<br> Parte de nuestro paquete incluye:<br> <br>• Lavado de motor (De acuerdo con el vehículo)<br>• Limpieza de inyectores<br>• Limpieza de filtro de aire<br></p>

                <i><h2>Servicio mayor para vehículos 4 cilindros</h2></i>
                <span class="money">desde $1,299 MXN</span>


                <div class="center">
                      <input type="checkbox" id="show">
                      <div class="btn-cotizar"><label for="show" class="show-btn">Cotizar</label></div>
                      <div class="container2">
                        <label for="show" class="close-btn fas fa-times" title="close"></label>
                        <div class="text"> Cotización</div>
                <form action="cotizacion_afinacion.php" method="POST">
                          <div class="data">
                            <label>Nombre</label>
                            <input type="text" name="fullname" id="fullname" placeholder="Nombre y Apellido" required="" pattern="[A-Z]+">
                          </div>
                          <div class="data">
                            <label>Email</label>
                            <input type="email" name="email" id="email" required>
                          </div>
                          <div class="data">
                            <label>Automóvil</label>
                            <input type="text" name="affair" id="affair" placeholder="Marca-Modelo-Año"  required>
                          </div>
                          <div class="data">
                            <label>Teléfono</label>
                            <input maxlength="10" minlength="8" type="cel" name="phone" id="phone" required="" pattern="[0-9]+">
                          </div>
                <textarea name="message" id="message" rows="8" cols="40" placeholder="Escriba su mensaje" required></textarea>
                <div class="btn">
                            <div class="inner">
                </div>
                <button type="submit">Enviar</button>
                          </div>
                    </form>
                </div>
            </div>
            </div>
        </section>
        <section class="galeria">
            <div class="sesgoarriba"></div>
            <div class="imagenes none">
                <img src="img/safinacion.jpg" alt="">
            </div>
            <div class="imagenes">
                <img src="img/1af.jpg" alt="">
            </div>
            <div class="imagenes">
                <img src="img/2af.png" alt="">
                <div class="encima">
                    <h2>MEXPER FRICTION</h2>
                    <div></div>
                </div>
            </div>
            <div class="imagenes">
                <img src="img/6af.jpg" alt="">

            </div>
            <div class="imagenes none">
                <img src="img/5af.jpg" alt="">
            </div>
            <div class="sesgoabajo"></div>
        </section>

        <section class="miembros">
            <div class="contenedor1">
                <h2 class="sobre-nosotros">Nuestro equipo</h2>
                <h3 class="slogan">Conoce a nuestro equipo de trabajo</h3>
                <div class="cards">
                    <div class="card">
                      <img src="img/tamayo.jpg" alt=""> <br><br>
                      <h3>Gerardo Tamayo</h3><br>
                      <h4 align = left>Especialista en:</h4>
                      <h5 align = left>• Cambio e instalación de balatas </h5> <h5 align = left>• Cambio de discos </h5>
                  </div>
                  <div class="card">
                    <img src="img/omar.jpg" alt=""><br><br>
                    <h3>Joshua Mercader</h3><br>
                    <h4 align = left>Especialista en:</h4>
                    <h5 align = left>• Cambio de aceite </h5> <h5 align = left>• Cambio de Filtros </h5><h5 align = left>• Cambio de Bujías </h5> <h5 align = left>• Cambio de cable de bujía </h5>
                  </div>
                  <div class="card">
                    <img src="img/rafa.jpg" alt=""><br><br>
                    <h3>Julio Cedillo</h3><br>
                    <h4 align = left>Especialista en:</h4>
                      <h5 align = left>• Revisión de suspensión </h5> <h5 align = left>• Cambio de amortiguadores </h5><h5 align = left>• Rectificado </h5>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Nuestro servicio</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="img/safinacion.jpg" alt="">
                        <h3>¿Qué incluye?</h3>
                        <p>• Cambio de aceite sintético <br> • Cambio de filtro de aceite<br>• Cambio de filtro de gasolina <br>• Lavado al cuerpo de aceleración <br>• Cambio de bujías <br>• Rotación de llantas <br>• Relleno de niveles hasta 500ml</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/garantia90.png" alt="">
                        <h3>Garantía</h3>
                        <p>• 3 meses o 3000 kilómetros<br>• Mayor suavidad al manejo<br> • Se prevendrán fallas futuras <br>• Un mejor rendimiento de combustible (de un 4% a un 12%) <br>•Se reducen las emisiones contaminantes</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/pago.png" alt="">
                        <h3>Tipo de pago</h3>
                        <p>Contamos con diferentes formas de pago:<br>• Efectivo<br>• Crédito<br>• Transferencia electrónica<br>



                        </p>
                    </div>
                </div>
            </div>
        </section>
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
