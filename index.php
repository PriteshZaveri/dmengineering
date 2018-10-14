<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DM Emgineering Ahmedabad</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:Lato:300,400,700,300italic,400italic|Raleway:400,300,700"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="assets/lib/icomoon/icomoon.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/lib/owl/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/lib/owl/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">

    <!-- Main Stylesheet File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    Template Name: Shield
    Template URL: https://templatemag.com/shield-bootstrap-agency-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-offset="58" data-target="#navbar-main">
    <?php require 'header.php' ?>
    <!-- ==== HEADERWRAP ==== -->
    <div id="home"></div>
    <div id="headerwrap">
        <div class="hero-carousel owl-carousel">
            <div class="myslide owl-slide1">
                <div class="hero-wrap">
                    <div class="hero-inner">
                        <span class="top-left-border tlb-1"></span>
                        <p>Qualitative range of products</p>
                        <p>Positive record</p>
                        <span class="bottom-right-border brb-1"></span>
                    </div>
                </div>
            </div>
            <div class="myslide owl-slide2">
                <div class="hero-wrap">
                    <div class="hero-inner">
                        <span class="top-left-border tlb-2"></span>
                        <p>Excellent logistic facility</p>
                        <p>Timely delivery</p>
                        <span class="bottom-right-border brb-2"></span>
                    </div>
                </div>
            </div>
            <div class="myslide owl-slide3">
                <div class="hero-wrap">
                    <div class="hero-inner">
                        <span class="top-left-border tlb-3"></span>
                        <p>Client-centric approach</p>
                        <p>Highly experienced professionals</p>
                        <span class="bottom-right-border brb-3"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /headerwrap -->

    <!-- ==== ABOUT ==== -->
    <div class="container" id="about" name="about">
        <div class="white about-wrap">
            <br>
            <h1 class="centered">A LITTLE ABOUT OUR COMPANY</h1>
            <hr>
            <div>
                <p class="centered">Founded in the year 2012, we “D M Engineering” are a dependable and famous
                    manufacturer and trader of a broad range of Carton Printing Machine, Cap Sealing Machine, Liquid
                    Filling Machine, Powder Filling Machine, etc. We are a Sole Proprietorship company, which is
                    located in Ahmedabad (Gujarat, India). We provide these products in diverse specifications to
                    attain the complete satisfaction of the clients. Further, our strong logistic support makes sure
                    that these products are delivered within the promised time-frame. Under the supervision of “Mr.
                    Vimal Mevada” (Proprietor), we have gained huge clientele in our country.</p>
            </div>
            <!-- col-lg-6 -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->

    <!-- ==== GREYWRAP ==== -->
    <div class="container" id="services">
    <div id="greywrap">
            <h2 class="headings"><span>TOP SELLING MACHINES</span></h2>
            <div class="top-carousel owl-carousel">
                <?php  
                    $cardProduct = array($products["Cap Sealing Machine"]["product-1"], $products["Sticker Labeling Machine"]["product-2"], $products["Sticker Labeling Machine"]["product-3"], $products["Liquid Filling Machine"]["product-3"], $products["Washing Machine"]["product-1"],$products["Carton Coding Machine"]["product-1"], $products["Capping Machine"]["product-1"], $products["Powder Filling Machine"]["product-3"], $products["Label Coding Machine"]["product-1"]);
                    foreach($cardProduct as $product){
                       include 'card.php';
                    }
                ?>
            </div>
        <!-- row -->
    </div>

    <div id="greywrap">
            <h2 class="headings"><span>MACHINES UNDER 3 LAKHS</span></h2>
            <div class="top-carousel owl-carousel">
                <?php  
                    $cardProduct = array($products["Cap Sealing Machine"]["product-1"], $products["Sticker Labeling Machine"]["product-2"], $products["Sticker Labeling Machine"]["product-3"], $products["Liquid Filling Machine"]["product-3"], $products["Washing Machine"]["product-1"],$products["Carton Coding Machine"]["product-1"], $products["Capping Machine"]["product-1"], $products["Powder Filling Machine"]["product-3"], $products["Label Coding Machine"]["product-1"]);
                    foreach($cardProduct as $product){
                       include 'card.php';
                    }
                ?>
            </div>
        <!-- row -->
    </div>

    </div>
    <!-- greywrap -->

    <!-- ==== TEAM MEMBERS ==== -->
    <div class="container" id="team" name="team">
        <br>
        <div class="row white centered">
            <h1 class="centered">MEET OUR AWESOME TEAM</h1>
            <hr>
            <br>
            <br>
            <div class="col-lg-3 centered">
                <img class="img img-circle" src="img/team/team01.jpg" height="120px" width="120px" alt="">
                <br>
                <h4><b>Mike Arney</b></h4>
                <a href="#" class="icon icon-twitter"></a>
                <a href="#" class="icon icon-facebook"></a>
                <a href="#" class="icon icon-flickr"></a>
                <p>Mike combines an expert technical knowledge with a real eye for design. Working with clients from a
                    wide range of industries, he fully understands client objectives when working on a project, large
                    or small.</p>
            </div>
            <!-- col-lg-3 -->

            <div class="col-lg-3 centered">
                <img class="img img-circle" src="img/team/team02.jpg" height="120px" width="120px" alt="">
                <br>
                <h4><b>Tim Davies</b></h4>
                <a href="#" class="icon icon-twitter"></a>
                <a href="#" class="icon icon-facebook"></a>
                <a href="#" class="icon icon-flickr"></a>
                <p>Tim is an experienced marcoms practitioner and manages projects from inception to delivery. He
                    understands the synergy between great design and commercial effectiveness which shines through on
                    every project.</p>
            </div>
            <!-- col-lg-3 -->

            <div class="col-lg-3 centered">
                <img class="img img-circle" src="img/team/team03.jpg" height="120px" width="120px" alt="">
                <br>
                <h4><b>Michele Lampa</b></h4>
                <a href="#" class="icon icon-twitter"></a>
                <a href="#" class="icon icon-facebook"></a>
                <a href="#" class="icon icon-flickr"></a>
                <p>Be a creative director is a hard task, but Michele loves what she does. Her combination of knowledge
                    and expertise is an important pillar in our agency.</p>
            </div>
            <!-- col-lg-3 -->

            <div class="col-lg-3 centered">
                <img class="img img-circle" src="img/team/team04.jpg" height="120px" width="120px" alt="">
                <br>
                <h4><b>Jaye Smith</b></h4>
                <a href="#" class="icon icon-twitter"></a>
                <a href="#" class="icon icon-facebook"></a>
                <a href="#" class="icon icon-flickr"></a>
                <p>Jaye began making websites when animated logos and scrolling text were cool, but has since found a
                    love for simplicity, creating websites that are a pleasure to browse. Monkey Island Fan.</p>
            </div>
            <!-- col-lg-3 -->

        </div>
        <!-- row -->
    </div>

    <div class="container" id="contact" name="contact">
        <div class="row">
            <br>
            <h1 class="centered">THANKS FOR VISITING US</h1>
            <hr>
            <br>
            <br>

            <div class="col-lg-4">
                <h3>About Us</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>
            </div>
            <!-- col -->

            <div class="col-lg-3">
                <h3>Contact Information</h3>
                <p><span class="icon icon-home"></span> Some Address 987, NY<br />
                    <span class="icon icon-phone"></span> +34 9884 4893 <br />
                    <span class="icon icon-mobile"></span> +34 59855 9853 <br />
                    <span class="icon icon-envelop"></span> <a href="#"> example@example.com</a> <br />
                    <span class="icon icon-twitter"></span> <a href="#"> @TemplateMag </a> <br />
                    <span class="icon icon-facebook"></span> <a href="#"> TemplateMag </a> <br />
                </p>
            </div>
            <!-- col -->

            <div class="col-lg-5">
                <h3>Contact Form</h3>
                <p>Register to our newsletter and be updated with the latests information.</p>
                <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

                    <div class="form-group">
                        <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name"
                            data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email"
                            data-rule="email" data-msg="Please enter a valid email">
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject"
                            data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validate"></div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message"
                            rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                        <div class="validate"></div>
                    </div>

                    <div class="loading"><img src="assets/lib/php-mail-form/loading.gif"></div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>

                    <div class="form-send">
                        <button type="submit" class="btn btn-large">Send Message</button>
                    </div>

                </form>
            </div>
            <!-- col -->

        </div>
        <!-- row -->

    </div>
    <!-- container -->
    <?php require 'footer.php' ?>
    <!-- JavaScript Libraries -->
    <script src="assets/lib/jquery/jquery.min.js"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>

    <!-- Template Main Javascript File -->
    <script src="assets/lib/owl/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>