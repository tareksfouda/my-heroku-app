<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tarek Fouda, a Software Engineer</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons
        ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet
        ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">


    <link rel=”stylesheet” id=”font-awesome-css” href=”//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css” type=”text/css” media=”screen”>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Header -->
<header id="header">
    <div class="intro">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <div class="intro-text">
                            <h1>Tarek Fouda</h1>
                            <p>Software Engineer</p>
                            <a href="#portfolio" class="btn btn-custom btn-lg page-scroll">Portfolio</a>
                            <a href="#education" class="btn btn-custom btn-lg page-scroll">Education</a>
                            <a href="#skills" class="btn btn-custom btn-lg page-scroll">Skills</a>
                            <a href="#contact" class="btn btn-custom btn-lg page-scroll">About Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Portfolio Section -->
<div id="portfolio">
    <div class="container">
        <div class="section-title">
            <h2>Portfolio</h2>
        </div>
        <div class="categories">
            <ul class="cat">
                <li>
                    <ol class="type">
                        <li><a href="#" data-filter="*" class="active">All</a></li>
                        <li><a href="#" data-filter=".de">Dominion Enterprises</a></li>
                        <li><a href="#" data-filter=".ti">Trader Interactive</a></li>
                        <li><a href="#" data-filter=".shgh">Shoghlanah</a></li>
                        <li><a href="#" data-filter=".other">Other</a></li>
                    </ol>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="portfolio-items">
                <div class="col-sm-6 col-md-4 other">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a target="_blank" href="img/portfolio/Insider.png" title="Insider App" data-lightbox-gallery="gallery1">
                                <div class="hover-text">
                                    <div class="overlay-caption">
                                        <div class="overlay-content">
                                            <h4>German University's newspaper</h4>
                                        </div>
                                    </div>
                                </div>
                                <img src="img/portfolio/Insider.png" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 de">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a target="_blank"  href="img/portfolio/de.png" title="DE" data-lightbox-gallery="gallery1">
                                <div class="hover-text">
                                    <div class="overlay-caption">
                                        <div class="overlay-content">
                                            <h4>Dominion Enterprises</h4>
                                        </div>
                                    </div>
                                </div>
                                <img src="img/portfolio/de.png" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 de">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a target="_blank"  href="img/portfolio/de-main.png" title="DE" data-lightbox-gallery="gallery1">
                                <div class="hover-text">
                                    <div class="overlay-caption">
                                        <div class="overlay-content">
                                            <h4>Dominion Enterprises Platform</h4>
                                        </div>
                                    </div>
                                </div>
                                <img src="img/portfolio/de-main.png" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 de">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a target="_blank"  href="img/portfolio/ditch-witch.png" title="DE" data-lightbox-gallery="gallery1">
                                <div class="hover-text">
                                    <div class="overlay-caption">
                                        <div class="overlay-content">
                                            <h4>Dealers WebServices</h4>
                                        </div>
                                    </div>
                                </div>
                                <img src="img/portfolio/ditch-witch.png" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 other">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a target="_blank"  href="img/portfolio/odu.png" title="odu" data-lightbox-gallery="gallery1">
                                <div class="hover-text">
                                    <div class="overlay-caption">
                                        <div class="overlay-content">
                                            <h4>Old Dominion University Portal App</h4>
                                        </div>
                                    </div>
                                </div>
                                <img src="img/portfolio/odu.png" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 shgh">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a target="_blank" href="img/portfolio/Shoghlanah.png" title="Shoghlanah Inc." data-lightbox-gallery="gallery1">
                                <div class="hover-text">
                                    <div class="overlay-caption">
                                        <div class="overlay-content">
                                            <h4>Shoghlanah</h4>
                                        </div>
                                    </div>
                                </div>
                                <img src="img/portfolio/Shoghlanah.png" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 other">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a target="_blank" href="img/portfolio/statistics.png" title="JavaScript Libraries" data-lightbox-gallery="gallery1">
                                <div class="hover-text">
                                    <div class="overlay-caption">
                                        <div class="overlay-content">
                                            <h4>D3.js</h4>
                                        </div>
                                    </div>
                                </div>
                                <img src="img/portfolio/statistics.png" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 other">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a target="_blank" href="img/portfolio/Saludable.png" title="Saludable" data-lightbox-gallery="gallery1">
                                <div class="hover-text">
                                    <div class="overlay-caption">
                                        <div class="overlay-content">
                                            <h4>Saludable</h4>
                                        </div>
                                    </div>
                                </div>
                                <img src="img/portfolio/Saludable.png" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 ti">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a target="_blank" href="img/portfolio/ti.png" title="Project Title" data-lightbox-gallery="gallery1">
                                <div class="hover-text">
                                    <div class="overlay-caption">
                                        <div class="overlay-content">
                                            <h4>TI API/Platform</h4>
                                        </div>
                                    </div>
                                </div>
                                <img src="img/portfolio/ti.png" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 other">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a target="_blank" href="img/portfolio/connect4.jpeg" title="Connect Four" data-lightbox-gallery="gallery1">
                                <div class="hover-text">
                                    <div class="overlay-caption">
                                        <div class="overlay-content">
                                            <h4>Connect Four using Minimax algorithm</h4>
                                        </div>
                                    </div>
                                </div>
                                <img src="img/portfolio/connect4.jpeg" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
    <example-component></example-component>
</div>
<!-- Education Section -->
<div id="education">
    <div class="container">
        <h2>Education</h2>
        <div class="jumbotron">
            <div class="container">
                <h2 style="font-size: 24px;" class="display-3">German University In Cairo <strong>2014</strong></h2>
                <h3 class="display-3">Bachelor's in Computer Engineering</h3>
                <img style="width: 20%; float: right;" src="img/guc.png" class="img-responsive" alt="Project Title">
                <p>Bachelor Project
                    Implemented a tool that works as a pseudocode Interpreter for beginners to Computer Science. It was implemented in Java and I used Antlr which is Java parser generator. That tool was under the supervision of professor Georg Jung, Hof University, Germany.</p>
                <p><a class="btn btn-primary btn-lg" href="http://guc.edu.eg/" role="button">Visit Website &raquo;</a></p>
            </div>
        </div>

        <div class="jumbotron">
            <div class="container">
                <h2 style="font-size: 24px;" class="display-3">Old Dominion University <strong>2017</strong></h2>
                <h3 class="display-3">Master's in Computer Science</h3>

                <img style="width: 20%; float: right;" src="img/odu-logo.png" class="img-responsive" alt="Project Title">
                <p>Took extensive classes in web programming, Artificial Intelligence and Cloud Computing. Along with dealing with several frontend frameworks such as Vue.js, Angular.js, D3.js and bootstrap.</p>
                <p><a class="btn btn-primary btn-lg" href="https://www.odu.edu/" role="button">Visit Website &raquo;</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Skills -->
<div id="skills">
    <div class="container">
        <div style="padding-bottom: 5%; padding-top: 5%;">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="title-small">
                        <span>Skills</span>
                    </h3>
                    <p class="content-detail">
                        Some of the programming languages and frameworks that I have experience working with, in addition to others as well.
                    </p>
                </div>
                <div class="col-md-9 content-right">
                    <!--SKILLST-->
                    <div class="skillst">
                        <div class="skillbar" data-percent="98%">
                            <div class="title head-sm">
                                PHP
                            </div>
                            <div class="count-bar" style="width: 98%;">
                                <div class="count"><span>98%</span></div>
                            </div>
                        </div>

                        <div class="skillbar" data-percent="75%">
                                <div class="title head-sm">
                                    Docker
                                </div>
                                <div class="count-bar" style="width: 75%;">
                                    <div class="count"><span>75%</span></div>
                                </div>
                            </div>
                        <div class="skillbar" data-percent="91%">
                            <div class="title head-sm">
                                Java
                            </div>
                            <div class="count-bar" style="width: 91%;">
                                <div class="count"><span>91%</span></div>
                            </div>
                        </div>
                        <div class="skillbar" data-percent="75%">
                            <div class="title head-sm">
                                Python
                            </div>
                            <div class="count-bar" style="width: 75%;">
                                <div class="count"><span>75%</span></div>
                            </div>
                        </div>
                        <div class="skillbar" data-percent="90%">
                            <div class="title head-sm">
                                Jquery/Javascript
                            </div>
                            <div class="count-bar" style="width: 90%;">
                                <div class="count"><span>90%</span></div>
                            </div>
                        </div>
                        <div class="skillbar" data-percent="40%">
                            <div class="title head-sm">
                                Photoshop
                            </div>
                            <div class="count-bar" style="width: 40%;">
                                <div class="count"><span>40%</span></div>
                            </div>
                        </div>
                        <div class="skillbar" data-percent="85%">
                            <div class="title head-sm">
                                PL/SQL
                            </div>
                            <div class="count-bar" style="width: 85%;">
                                <div class="count"><span>85%</span></div>
                            </div>
                        </div>
                        <div class="skillbar" data-percent="80%">
                            <div class="title head-sm">
                                Vue.js
                            </div>
                            <div class="count-bar" style="width: 80%;">
                                <div class="count"><span>80%</span></div>
                            </div>
                        </div>
                        <div class="skillbar" data-percent="60%">
                            <div class="title head-sm">
                                Angular
                            </div>
                            <div class="count-bar" style="width: 60%;">
                                <div class="count"><span>60%</span></div>
                            </div>
                        </div>
                        <div class="skillbar" data-percent="85%">
                            <div class="title head-sm">
                                HTML 5 and CSS
                            </div>
                            <div class="count-bar" style="width: 85%;">
                                <div class="count"><span>85%</span></div>
                            </div>
                        </div>
                    </div>
                    <!--/.SKILLST END-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Section -->
<div id="contact">
    <div class="container">
        <h2>About Me</h2>
        <div class="col-md-6">
            <div class="section-title">
                <div class="row"> <img src="img/tarek-red.png" class="img-responsive pull-left" alt="">
                    <p>Raised in Cairo, Egypt. I moved to Germany and went to Stuttgart University where I got my bachelors degree in Computer Engineering. After that I came to the states and continued my Master's degree at Old Dominion University and graduated May, 2017. I've always been into programming and coding in general, always been able to attend hackathons and ACM conferences. </p>
                    <p>In fact, Just came back from WAVE PHP, 2018 conference in SanDiego. I love soccer and used to play it professionally but decided to give up on it for education because I could not do both. I love traveling and meeting new people with different cultures and backgrounds. My hobbies include horse riding as well due to the fact that pretty much every Egyptian gets trained to ride horses since early ages..</p>
                    <div class="social">
                        <ul>
                            <li><a href="https://facebook.com/tarek.samy.fouda"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/tareksfouda"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/tarek-fouda/"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-md-offset-1">
            <div class="section-title">
                <p>For inquiries or collaborations please contact me by email at <strong>tareksfouda@gmail.com</strong> or fill out the form below.</p>
            </div>
            <form method="POST" action="/mail" name="sentMessage" id="contactForm" novalidate>
                {{--  @csrf  --}}
                <meta name="csrf-token" content="{{ csrf_token() }}">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input name="name" type="text" id="name" class="form-control" placeholder="Name" required="required">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input name= "email" type="email" id="email" class="form-control" placeholder="Email" required="required">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                    <p class="help-block text-danger"></p>
                </div>
                <div id="success"></div>
                <button type="submit" class="btn btn-default btn-lg">Send Message</button>
            </form>
        </div>
    </div>
</div>
<style>
    /* Style the back-to-top floating button */
    .sf-back-to-top {
        background-color: #50A1CB; /* button color */
        color: white; /* text/arrow color */
        display: none;
        z-index: 999;
        /* float in bottom right corner */
        /* 20 pixels from edge */
        position: fixed;
        right: 20px;
        bottom: 20px;
        /* size of button is 50 pixels*/
        width: 50px;
        height: 50px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        /* round button */
        -webkit-border-radius: 50%;
        border-radius: 50%;
    }

    a.sf-back-to-top {
        font-weight: 600;
        letter-spacing: 2px;
        font-size: 12px;
        text-transform: uppercase;
        text-align: center;
        line-height: 1.6;
        padding-left: 2px;
        padding-top: 4px;
    }

    a.sf-back-to-top .arrow:before {
        content: "\e02d";
        font-family: 'squarespace-ui-font';
        font-style: normal;
        font-weight: 600;
        font-size: 18px;
        line-height: 1;
        speak: none;
        -webkit-font-smoothing: antialiased;
        content: "\e02d";
        text-align: center;
        display: block;
        vertical-align: middle;
        transform: rotate(-90deg);
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        cursor: pointer;
        margin-left: -4px;
    }
</style>

<a href="#" class="sf-back-to-top"><span class="arrow"></span>Top</a>


<div id="footer">
    <div class="container">
        <p>&copy; 2018 Tarek Fouda. All rights reserved.</p>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script src="/js/jquery.appear.js" type="text/javascript"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/nivo-lightbox.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/contact_me.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
