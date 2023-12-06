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
   <link rel="icon" href="{{ asset('assets/icon/AdNinja.ico') }}" type="image/gif" />
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
                              Sign Up
                           </li>
                          </a>

                           <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">Sign In</a>
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
                  <span>The best link shortener that pays you for sharing content online.</span>
                  <a href="{{ route('register') }}">Register Now</a>
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
                  <span>About Us</span>
                  <h2>Online Link Shortener That Lets You Earn Money</h2>
                  <p>
                     At <strong>AdNinja</strong>, we are dedicated to simplifying the experience of sharing links online. Our passion for technological innovation and efficiency has led us to create a platform that allows you to shorten and manage your links quickly and easily.</p>
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
                     <h2>Contact Us</h2>
                  </div>
                  <p>We are here to assist you with anything you need. If you have any questions, comments, or concerns, feel free to get in touch with our team. We are available to provide assistance and guidance at any time. Your feedback is important to us, and we are committed to offering you the best possible service. You can reach out to us through the form provided below. We would be delighted to assist you.</p>
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
                  <p>© 2023 All Rights Reserved.</p>
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