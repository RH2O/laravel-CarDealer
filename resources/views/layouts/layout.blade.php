<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Kurdsale</title>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/css/font-awesome.css">

    <link rel="stylesheet" href="/css/style.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo"><em> Kurdsale</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            
                            <li><a href="/" class="active">Home</a></li>
                            <li><a href="/cars">Cars</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                              
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/about">About Us</a>
                             
                                    <a class="dropdown-item" href="#">FAQ</a>
                                    <a class="dropdown-item" href="#">Terms</a>
                                </div>
                            </li>
                            <li><a href="/contact">Contact</a></li>
                            @auth
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Manage</a>
                              
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/cars/manage">Cars Posts</a>
                                    <a class="dropdown-item" href="#">Profile</a> 
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Create</a>
                              
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/cars/create">Car Post</a>
                                    <a class="dropdown-item" href="#">---</a> 
                                </div>
                            </li>
                            <li>
                                <a href="/logout">Logout</a>
                            </li>
                            @else
                            <li><a href="/login">Sign in</a></li>
                           @endauth
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    @yield('content')
 
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2021 Kurdsale
                        
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="/js/popper.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="/js/scrollreveal.min.js"></script>
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/imgfix.min.js"></script> 
    <script src="/js/mixitup.js"></script> 
    <script src="/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="/js/custom.js"></script>

  </body>
</html>