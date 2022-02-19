<!doctype html>
<html lang="es">

<head>
  <title>Nuestros servicios</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  <!-- locomotive -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.1/dist/locomotive-scroll.min.css">
  
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/service.css">

</head>

<body>
  <?php include('header-temp.html'); ?>
  <div class="container-fluid p-0" data-scroll-container>
    <!-- <div class="row"> -->
      <div class="row dp-cont-main" data-scroll-section>
        <div class="row dp-bg">
          <div class="cont-text">
            <div class="p">Lorem ipsum, dolor sit amet consectetur adipisicing
              elit.alias amet possimus tenetur iste illo sit aut.
            </div>
          </div>
        </div>
      </div>
  
      <div class="container dp-cont-pt1" data-scroll-section>
        <!-- <div class="row"> -->
          <div class="col-md align-self-center">
            <div class="h6 dp-sb-title">BRINDAMOS LOS MEJORES SERVICIOS</div>
            <div class="h5 dp-sb-title">CONOCE LO QUE TE OFRECEMOS</div>
            <div class="p">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, laboriosam ratione accusamus libero quasi perferendis debitis earum dolorem officiis a accusantium provident aliquam voluptas ad fuga deleniti? Debitis, possimus tempore?
            </div>
          </div>
          <div class="col-md dp-cont-img">
            <img src="https://images.pexels.com/photos/3184436/pexels-photo-3184436.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" srcset="">
          </div>
        <!-- </div> -->
      </div>
  
      <div class="container dp-cont-pt2" data-scroll-section>
        <div class="col-md-12 row">
          <div class="col-md-6 dp-block" id="cont-serv">
            <div class="col-md">
              <div class="h5 dp-sb-title">Gestión de importaciones y aduanas</div>
              <div class="cont-text">
                <div class="p">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat quod facere laboriosam ducimus iste quisquam dolores molestiae harum, sit minus sint architecto fuga, eveniet explicabo maxime quaerat aliquam rem consequatur.</div>
              </div>
            </div>
            <div class="col-md">
              <div class="h5 dp-sb-title">Servicio 2 </div>
              <div class="p">Lorem ipsum dolor sit amet consectetur adipisicing elit. In ex deserunt sunt cupiditate expedita non unde, molestias mollitia porro explicabo aut, necessitatibus beatae quo minus ipsa! Non, expedita. Blanditiis, libero.</div>
            </div>
            <div class="col-md">
              <div class="h5 dp-sb-title">Servicio 3</div>
              <div class="p">Lorem ipsum dolor sit amet consectetur adipisicing elit. In ex deserunt sunt cupiditate expedita non unde, molestias mollitia porro explicabo aut, necessitatibus beatae quo minus ipsa! Non, expedita. Blanditiis, libero.</div>
            </div>
            <div class="col-md">
              <div class="h5 dp-sb-title">Servicio 4 </div>
              <div class="p">Lorem ipsum dolor sit amet consectetur adipisicing elit. In ex deserunt sunt cupiditate expedita non unde, molestias mollitia porro explicabo aut, necessitatibus beatae quo minus ipsa! Non, expedita. Blanditiis, libero.</div>
            </div>
          </div>
          <div class="col-md-6 dp-block ">
            <div class="col-md block-img"
                data-scroll data-scroll-sticky data-scroll-target="#cont-serv" data-scroll-speed="1">
              <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjd8fGJ1c2luZXNzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" srcset="">
            </div>
          <!--  <div class="col-md">
              <img src="https://media.istockphoto.com/photos/fountain-pen-signature-picture-id485827074?k=20&m=485827074&s=612x612&w=0&h=3E1wvSupDtQMuwHn2beoOvYhUhm2z9KjGKgkeaMoG14=" alt="" srcset="">
            </div>
            <div class="col-md">
              <img src="https://us.123rf.com/450wm/rastudio/rastudio1604/rastudio160406624/55076297-cohete-mano-dibujada-en-tiza-vector-icono-aislado-para-web-m%C3%B3vil-e-infograf%C3%ADa-.jpg?ver=6" alt="" srcset="">
            </div> -->
          </div>
        </div>
      </div>
  
      <?php include('footer-temp.html'); ?>
    <!-- </div> -->
  </div>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <!-- locomotive -->
  <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.1/dist/locomotive-scroll.min.js"></script>
  <script>
    const scroll = new LocomotiveScroll({
      el: document.querySelector('[data-scroll-container]'),
      smooth:true,
      tablet: {smooth:true},
      smartphone: {smooth:true}
    })
  </script>

</body>

</html>