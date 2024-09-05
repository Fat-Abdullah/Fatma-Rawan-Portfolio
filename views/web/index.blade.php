
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


<title>@yield('title')</title>
<!--
Elegance Template
https://templatemo.com/tm-528-elegance
-->
<!-- Additional CSS Files -->
<style>
        body {
            height: 100vh; /* لجعل الصفحة طويلة بما يكفي للتمرير */
        }
    </style>

<link rel="stylesheet" type="text/css" href="{{asset("web/css/bootstrap.min.css")}}">

<link rel="stylesheet" type="text/css" href="{{asset("web/css/font-awesome.css")}}">

<link rel="stylesheet" type="text/css" href="{{asset("web/css/fullpage.min.css")}}">

<link rel="stylesheet" type="text/css" href="{{asset("web/css/owl.carousel.css")}}">

<link rel="stylesheet" href="{{asset("web/css/animate.css")}}">

<link rel="stylesheet" href="{{asset("web/css/templatemo-style.css")}}">

<link rel="stylesheet" href="{{asset("web/css/responsive.css")}}">
</head>



<body>
<div id="video">
    <div class="preloader">
        <div class="preloader-bounce">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>


    <header id="header">
        <div class="container-fluid">
            <div class="navbar">
                <a href="/", id="logo" ,title="Elegance by TemplateMo">
                    portfolio
                </a>
                <div class="navigation-row">
                    <nav id="navigation">
                        <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
                        <div class="nav-box navbar-collapse">
                            <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                                <li data-menuanchor="home"><a href="/">Home</a></li>
                                <li data-menuanchor="about" ><a href="about">About Us</a></li>
                                <li data-menuanchor="courses"><a href="courses">Courses</a></li>
                                <li data-menuanchor="skills"><a href="skills">Our Skills</a></li>
                                <li data-menuanchor="projects"><a href="projects">Our Projects</a></li>
                                <!-- <li data-menuanchor="contact"><a href="contact">Contact Us</a></li> -->
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    
    <video autoplay muted loop id="myVideo">
      <!-- <source src="{{asset("web/images/video-bg.mp4")}}" type="video/mp4"> -->
      <source src="{{asset("web/images/labtop.mp4")}}" type="video/mp4">

    </video>
    
 <div id="fullpage" class="fullpage-default"> 
    @yield('content')
    </div>
</div>

<div id="social-icons">
            <div class="text-right">
                <ul class="social-icons">
                    RAWAN
                    <li><a href="mailto:rawanswydan204@gmail.com" title="Gmail"><i class="fa fa-envelope-o"></i></a></li>
                    <li><a href="https://wa.me/770216208" title="WhatsApp"><i class="fa fa-Whatsapp"></i></a></li>
                    <li><a href="https://t.me/ra12wa3n" title="Telegram"><i class="fab fa-telegram"></i></a></li>
                    <li><a href="https://github.com/rawanswydan/" title="Github"><i class="fa fa-GitHub"></i></a></li>

                    <br>FATMA
                    <li><a href="mailto:rawanswydan204@gmail.com" title="Gmail"><i class="fa fa-envelope-o"></i></a></li>
                    <li><a href="https://wa.me/770216208" title="WhatsApp"><i class="fa fa-Whatsapp"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/fatma-abdullah-921415293" title="LinkedIn"><i class="fa fa-LinkedIn"></i></a></li>
                    <li><a href="https://github.com/Fat-Abdullah/" title="Github"><i class="fa fa-GitHub"></i></a></li>
                </ul>
            </div>
        </div>
</div>
 <script src="{{asset("web/js/jquery.js")}}"></script>

    <script src="{{asset("web/js/bootstrap.min.js")}}"></script>

    <script src="{{asset("web/js/fullpage.min.js")}}"></script>

    <script src="{{asset("web/js/scrolloverflow.js")}}"></script>

    <script src="{{asset("web/js/owl.carousel.min.js")}}"></script>

    <script src="{{asset("web/js/jquery.inview.min.js")}}"></script>

    <script src="{{asset("web/js/form.js")}}"></script>

    <script src="{{asset("web/js/custom.js")}}"></script>

</body>

    

</html>
    