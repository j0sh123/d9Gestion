<!doctype html>
<html lang="es">
  <head>
    <title>Contactanos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    <?php include('header-temp.html');?>

    <div class="container-sm my-5 pt-5">
        <div class="p-4">
            <div class="row">
                <div class="col-md-3 mt-5 info text-center align-self-center">
                    <div class="col-sm-12 row mb-3">
                        <i class="fa-solid fa-mobile-screen-button text-center"></i>
                        <div class="caption mt-3">
                            <div class="text">
                                <!-- <div class="text-sub">Llamanos:</div> -->
                                +51 979144033 </br>
                                <!-- +51 9785646 -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 row mb-3">
                        <i class="fa-solid fa-envelope  text-center"></i>
                        <div class="caption mt-3">
                            <div class="text">
                                <!-- <div class="text-sub">Correo:</div> -->
                                administracion@d9gestion.com
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 row">
                        <i class="fa-solid fa-location-dot text-center"></i>
                        <div class="caption mt-3">
                            <div class="text">
                                <!-- <div class="text-sub">Ubicación:</div> -->
                                Calle Los Tulipanes 218 </br>
                                Lince</br>
                                Lima - Peru
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="col-md text-center">
                        <div class="dp-sb-title h2">CONTACTANOS</div>
                        <p>Completa el formulario, y enseguida nos comunicaremos contigo.</p>
                    </div>
                    <div class="col-md">
                        <form id="form">
                            <div class="contact-form text-center">
                                <div class="input-content">
                                    <div class="input-div input-div-normal">
                                        <div class="div">
                                            <div class="h5">Nombre y Apellido</div>
                                            <input type="text" class="input" id="name" name="name">
                                        </div>
                                    </div>
                                    <div class="input-div input-div-normal">
                                        <div class="div">
                                            <div class="h5">Email</div>
                                            <input type="text" class="input" id="email" name="email">
                                        </div>
                                    </div>
                                    <div class="input-div input-div-normal">
                                        <div class="div">
                                            <div class="h5">Teléfono</div>
                                            <input type="text" class="input" id="phone" name="phone">
                                        </div>
                                    </div>
                                    <div class="input-div input-div-normal">
                                        <div class="div">
                                            <div class="h5">Empresa</div>
                                            <input type="text" class="input" id="company" name="company">
                                        </div>
                                    </div>
                                    <div class="input-div input-div-max">
                                        <div class="div-max">
                                            <div class="h5">Mensaje</div>
                                            <textarea class="text-comment input" cols="30" rows="10"
                                                        id="message" name="message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="btn" value="ENVIAR" id="btnSend">
                                <div class="error"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="map p-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1950.674868432131!2d-77.0283571!3d-12.0881928!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c95e2953c15f%3A0x8fde6a74416070d4!2sD9%20Gesti%C3%B3n%20de%20Consultor%C3%ADa%20e%20Importaciones%20SAC!5e0!3m2!1ses-419!2spe!4v1644960208597!5m2!1ses-419!2spe"
                width="100%" height="100%" frameborder="0" style="border:0;"
                allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>

    <?php include('footer-temp.html');?>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <script src="js/input.js"></script>
   </body>
</html>