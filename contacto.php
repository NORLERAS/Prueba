<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/balata.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/contacto.css">
    <!-- SWEET ALERT -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- GOOGLE FONTs -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Contactanos</title>
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
      <div class="content">

          <h1 class="contactanos">Contactanos</h1>

          <div class="contact-wrapper animated bounceInUp">
              <div class="contact-form">
                  <h3>AGENDA TU CITA:</h3>
                    <form action="citas.php" method="POST">
                      <center>  <select class="como" name="ayuda" id="ayuda">
                           <option selected value="0"> ¿Cómo podemos ayudarte?</option>
                             <optgroup class="mex" label="MEXPER FRICTION">
                               <option class="mexi" value="balatas">Cambio de Balatas</option>
                               <option class="mexi" class="mexi" value="acaite">Cambio de Acaite</option>
                               <option class="mexi" value="afinacion">Afinación Completa</option>
                               <option class="mexi" value="amotiguadores">Cambio de amortiguadores</option>

                          </select>   </center> <br><br><br>

                            <p>
                                <label>Fecha</label>
                                 <input class="date" type="datetime-local" name="datetime" id="datetime" required>
                            </p>

                            <p>
                                <label>Correo</label>
                                <input type="email" name="email" id="email" required>
                            </p>

                      <p>
                          <label>Nombre(s)</label>
                          <input type="text" name="fullname" id="fullname" required>
                      </p>
                      <p>
                          <label>Apellido(s)</label>
                          <input type="text" name="lastname" id="lastname" required>
                      </p>

                      <p>
                          <label>Teléfono</label>
                          <input type="cel" name="phone" id="phone" required>
                      </p>

                        <p>
                          <label>Otro Asunto</label>
                          <input type="text" name="affair" id="affair" placeholder="¿Cuál es tu duda?">
                      </p>

                      <p class="block">
                         <label>Mensaje</label>
                         <textarea name="message" rows="3" id="message" required></textarea>
                      </p>

                      <p class="block">
                          <button onclick="boton()" id="open" type="submit">Enviar</button>
                          </p>
                  </form>
              </div>
              <div class="contact-info">
                  <h4 class="hehe">MÁS INFORMACIÓN</h4>
                  <ul class="hehe">
                      <li><i class="fas fa-map-marker-alt"></i> Emiliano Zapata Núm. 34, Col. Santa María Aztahuacan, Alcaldía Iztapalapa, C.P 09570, CDMX, México. </li> <br>
                      <li><i class="fas fa-phone"></i> 55 5410 8915 </li> <br>
                      <li><i class="fas fa-envelope-open"></i> balatas_mexper@hotmail.com </li> <br>
                 </ul>
                  <p><center> <a href="https://listado.mercadolibre.com.mx/balatas-mexper#D[A:balatas%20mexper]" target="_blank" class="nav__social-icon"> mercadolibre/balatamexper <ion-icon name="pricetags"></ion-icon></a></center></p> <br><br><br><br>


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

        <!-- SWEET ALERT -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

        <!--===== MAIN JS =====-->
        <script src="js/main.js"></script>
        <script src="js/app.js"></script>
        <script src="js/sweetalert.js"></script>
    </body>
</html>
