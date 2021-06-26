<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Fiscales</title>
	
</head><!--/head-->

<body id="home" class="homepage">


    <?php require 'assets/includes/header.php'; ?>



    
   



    <!-- CINTA INFORMATIVA -->

    <section id="cta2">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">Contactanos <span>Ahora</span></h2>
                <!-- <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">Somos empresa líder con más de 15 años de experiencia dedicada <br />a la distribución de soluciones electronicas para su negocio.</p>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"><a class="btn btn-primary btn-lg" href="#">Contactanos</a></p> -->
            </div>
        </div>
    </section>





<!-- CONTACTANOS -->

    <section id="contact-area">
    <div class="container">
        <div class="row">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible;">Envianos tu mensaje</h2>
                <p class="text-center wow fadeInDown animated" style="visibility: visible;">Escríbanos. Tu palabra es lo más importante para nosotros.</p>
            </div>
            <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                <div class="col-lg-6 animated animate-from-left" style="opacity: 1; left: 0px;">

                    <div class="form-group">
                            <label for="name">Nombre Completo</label>
                            <input id="name" type="text" name="name" class="form-control" placeholder="Nombre" required>
                        </div>
                    <div class="form-group">
                            <label for="email">Email - Correo</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                    <div class="form-group">
                        <label for="Tema">Tema</label>
                        <input type="text" id="Tema" name="Tema" class="form-control" placeholder="Tema" required>
                    </div>

                </div>
                <div class="col-lg-6 animated animate-from-right" style="opacity: 1; right: 0px;">
                    <div class="form-group">
                        <label for="message">Tu Mensaje</label>
                        <textarea name="message" id="message" class="form-control" rows="8" placeholder="Mensaje" required></textarea>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="text-center">

                      <button type="submit" class="btn btn-primary btn-lg btn-send-msg">Enviar</button>

                </div>

            </form>

        </div>
    </div>
            
</section><!--/#bottom-->









    <!-- <section id="cta2">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">YOU'VE MADE A brave DECISION, <span>WELCOME</span></h2>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">Mauris pretium auctor quam. Vestibulum et nunc id nisi fringilla <br />iaculis. Mauris pretium auctor quam.</p>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"><a class="btn btn-primary btn-lg" href="#">Get It Now</a></p>
            </div>
        </div>
    </section> -->

  
    <?php
    
    require 'assets/includes/footer.php'; 
     ?>
</body>
</html>