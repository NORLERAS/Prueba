<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/balata.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/samortiguador.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Cambio de amortiguadores</title>
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
                        <a href="https://api.whatsapp.com/send?phone=5554108915&text=??Qu?? servicios ofrecen?" target="_blank" class="nav__social-icon"><ion-icon name="logo-whatsapp"></ion-icon></a>
                        <a href="https://www.instagram.com/balatasmexper/" target="_blank" class="nav__social-icon"><ion-icon name="logo-instagram"></ion-icon></a>
                    </div>
                </div>
            </nav>
        </header>
  <main class="main">

           <section class="acerca-de">
            <div class="contenedor">
                <h2 class="sobre-nosotros">Cambio de amortiguador</h2>
                <h3 class="slogan">Un elemento fundamental en la seguridad de su veh??culo</h3>
                <div class="line-mf"></div> <br>
                <p class="parrafo">Los amortiguadores tienen la funci??n de proporcionar confort para la suspensi??n del veh??culo  durante la marcha, pero tambi??n evitan la transmisi??n de vibraciones ya que absorben la energ??a cin??tica propia del movimiento y la que se origina debido a los golpes.</p>
                <p class="parrafo">Como nota importante los amortiguadores de un coche est??n dise??ados para durar entre 65,000 y 100,000 Kil??metros dependiendo del tipo y uso del veh??culo, por ello <i><b>MEXPER-FRICTION</b></i> le presenta los indicadores de cuando debe cambiar sus amortiguadores. <br>??? Vibraci??n en el volante<br>??? Exceso de consumo de combustible <br>??? Desgaste irregular de los neum??ticos<br>??? Perdida de estabilidad en curvas<br></p>
                <i><h2>Cambio par de amortiguadores</h2></i>
                <span class="money">desde $3,100 MXN</span>

                <div class="center">
                      <input type="checkbox" id="show">
                      <div class="btn-cotizar"><label for="show" class="show-btn">Cotizar</label></div>
                      <div class="container2">
                        <label for="show" class="close-btn fas fa-times" title="close"></label>
                        <div class="text"> Cotizaci??n</div>
                <form action="cotizacion_amortiguadores.php" method="POST">
                          <div class="data">
                            <label>Nombre</label>
                            <input type="text" name="fullname" id="fullname" placeholder="Nombre y Apellido" required="" pattern="[A-Z]+">
                          </div>
                          <div class="data">
                            <label>Email</label>
                            <input type="email" name="email" id="email" required>
                          </div>
                          <div class="data">
                            <label>Autom??vil</label>
                            <input type="text" name="affair" id="affair" placeholder="Marca-Modelo-A??o"  required>
                          </div>
                          <div class="data">
                            <label>Tel??fono</label>
                            <input  maxlength="10" minlength="8" type="cel" name="phone" id="phone" required="" pattern="[0-9]+">
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
                <img src="img/6am.jpg" alt="">
            </div>
            <div class="imagenes">
                <img src="img/2am.jpg" alt="">
            </div>
            <div class="imagenes">
                <img src="img/3am.jpg" alt="">
                <div class="encima">
                    <h2>MEXPER FRICTION</h2>
                    <div></div>
                </div>
            </div>
            <div class="imagenes">
                <img src="img/4am.jpg" alt="">

            </div>
            <div class="imagenes none">
                <img src="img/5am.jpg" alt="">
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
                      <h5 align = left>??? Cambio e instalaci??n de balatas </h5> <h5 align = left>??? Cambio de discos </h5>
                  </div>
                  <div class="card">
                    <img src="img/omar.jpg" alt=""><br><br>
                    <h3>Joshua Mercader</h3><br>
                    <h4 align = left>Especialista en:</h4>
                    <h5 align = left>??? Cambio de aceite </h5> <h5 align = left>??? Cambio de Filtros </h5><h5 align = left>??? Cambio de Buj??as </h5> <h5 align = left>??? Cambio de cable de buj??a </h5>
                  </div>
                  <div class="card">
                    <img src="img/rafa.jpg" alt=""><br><br>
                    <h3>Julio Cedillo</h3><br>
                    <h4 align = left>Especialista en:</h4>
                      <h5 align = left>??? Revisi??n de suspensi??n </h5> <h5 align = left>??? Cambio de amortiguadores </h5><h5 align = left>??? Rectificado </h5>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Nuestro servicio</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="img/5am.jpg" alt="">
                        <h3>??Qu?? incluye?</h3>
                        <p>??? Limpieza de chasis <br> ??? Inspecci??n de suspensi??n<br>??? Remplazo de amortiguadores en caso de ser necesario<br>??? Inflado de nitr??geno en las 4 ruedas</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/garantia.png" alt="">
                        <h3>Garant??a</h3>
                        <p>??? 30 d??as o 3000 kil??metros<br>??? Incrementar la suavidad al manejo<br> ??? Prevenci??n de fallas futuras <br>??? Reducci??n en el desgaste de las llantas</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/pago.png" alt="">
                        <h3>Tipo de pago</h3>
                        <p>Contamos con diferentes formas de pago:<br>??? Efectivo<br>??? Cr??dito<br>??? Transferencia electr??nica<br>

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

              <p align=center href="#" class="bob"> <b> ?? Mexper Friction - Todos los Derechos Reservados. </p>
              <p align=center href="#" class="bobi"> T??rminos y Condiciones </p>
              <p align=center href="#" class="bobs"> Pol??tica de Privacidad </p> </b>
            </div>
        </footer>

        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

        <!--===== MAIN JS =====-->
        <script src="js/main.js"></script>
    </body>
</html>
