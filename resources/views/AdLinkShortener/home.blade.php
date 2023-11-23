<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>AdNinja</title>
   <meta name="keywords" content="Acortador de URL, Acortador de enlaces, Acortador de enlaces publicitarios, Reducción de URL, Enlaces cortos, Optimización de enlaces, Publicidad en línea, Marketing digital, Redes sociales, Estadísticas de clics, UrlShortener">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
   <!-- style css -->
   <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
   <!-- Responsive-->
   <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
   <!-- header -->
   <header>
      <!-- header inner -->
      <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo">
                           <a href="{{ route('home') }}">AdNinja</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <nav class="navigation navbar navbar-expand-md navbar-dark ">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto">

                          <a href="{{ route('register') }}">
                           <li class="login_btn nav-link"  href="#">
                              Registrarse
                           </li>
                          </a>

                           <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">Iniciar Sesion</a>
                           </li>

                        </ul>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end header inner -->
   <!-- end header -->
   <!-- banner -->
   <section class="banner_main">
      <div class="container-fluid">
         <div class="row d_flex">
            <div class="col-xl-6 col-lg-6 col-md-6 ">
               <div class="text-bg">
                  <h1>AdNinja</h1>
                  <span>El mejor acortador de links que te paga por compartir contenido por inernet</span>
                  <a href="{{ route('register') }}">Registrarse</a>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 padding_lert2">

               <div class="text-img">
                  <figure><img src="{{ asset('assets/images/pc.png') }}" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end banner -->
   <!-- about -->
   <div class="about">
      <div class="container">
         <div class="row">
            <div class="col-md-10 offset-md-1">
               <div class="titlepage">
                  <span>Sobre Nosotros</span>
                  <h2>Acortador de enlaces en linea</h2>
                  <p>En <strong>AdNinja</strong>, estamos dedicados a simplificar la experiencia de compartir enlaces en línea. Nuestra pasión por la innovación tecnológica y la eficiencia nos ha llevado a crear una plataforma que te permite acortar y administrar tus enlaces de manera rápida y sencilla.</p>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="ccol-md-10 offset-md-1">
               <div class="about_box">
                  <figure><img src="{{ asset('assets/images/about.png') }}" alt="#" /></figure>

               </div>
            </div>


         </div>

      </div>
   </div>

   <!-- end about -->
   

   <!-- end classified -->



   <!-- contact -->
   <div id="contact" class="contact">
      <div class="container">
         <div class="row d_flex">
            <div class="col-md-6">
               <div class="contact_box">
                  <div class="titlepage">
                     <h2>Contactanos</h2>
                  </div>
                  <p>Estamos aquí para ayudarte en todo lo que necesites. Si tienes alguna pregunta, comentario o inquietud, no dudes en ponerte en contacto con nuestro equipo. Estamos disponibles para brindarte asistencia y orientación en cualquier momento. Tu opinión es importante para nosotros y estamos comprometidos a proporcionarte el mejor servicio posible. Puedes comunicarte con nosotros a través del formulario que se te indica a continuación, estaremos encantados de atenderte</p>
               </div>
            </div>
            <div class="col-md-6">
               <form id="contact" class="main_form">
                  <div class="row">
                     <div class="col-md-12 ">
                        <input class="contactus" placeholder="Name" type="type" name="Name">
                     </div>
                     <div class="col-md-12">
                        <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">
                     </div>
                     <div class="col-md-12">
                        <input class="contactus" placeholder="Email" type="type" name="Email">
                     </div>
                     <div class="col-md-12">
                        <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message </textarea>
                     </div>
                     <div class="col-sm-12">
                        <button class="send_btn">Enviar</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <!-- end contact -->


   <!--  footer -->
   <footer>

      <div class="copyright">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <p>© 2019 All Rights Reserved.</p>
               </div>
            </div>
         </div>
      </div>
      </div>
   </footer>
   <!-- end footer -->
   <!-- Javascript files-->

   <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
   <script src="{{ asset('assets/js/popper.min.js') }}"></script>
   <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('assets/js/jquery-3.0.0.min.js') }}"></script>
   <script src="{{ asset('assets/js/plugin.js') }}"></script>

   <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
   <script src="{{ asset('assets/js/custom.js') }}"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

</body>

</html>