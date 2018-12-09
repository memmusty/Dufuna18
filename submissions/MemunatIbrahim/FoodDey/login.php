<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Restaurant One Page HTML5 Template</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS
        ================================================ -->
        <!-- Owl Carousel -->
		<link rel="stylesheet" href="css/owl.carousel.css">
        <!-- bootstrap.min css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Font-awesome.min css -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/animate.min.css">

		<link rel="stylesheet" href="css/main.css">
        <!-- Responsive Stylesheet -->
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/style.css">
        <style>
            
        </style>
		<!-- Js -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
	</head>
	<body>
	<!--
	header-img start 
	============================== -->
    <section id="hero-area">
      <img class="img-responsive" src="images/banner.png" alt="">
    </section>
	<!--
    Header start 
	============================== -->
	<nav id="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <nav class="navbar navbar-default">
                          <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                                  <a class="navbar-brand" href="index.php">
                                    <!--<img src="images/logo.png" alt="Logo">-->
                                    <h1>FoodDey</h1>
                                  </a>

                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav navbar-right" id="top-nav">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="menu.php">menu</a></li>
                                <li><a href="login.php">login</a></li>
                                <li><a href="about.php">about us</a></li>
                                <li><a href="about.php#contact-us">contacts</a></li>
                                <li><a href="about.php#subscribe">news</a></li>
                              </ul>
                            </div><!-- /.navbar-collapse -->
                          </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
	</nav><!-- header close -->
    <!--
    CONTACT US  start
    ============================= -->
    <section id="login">
        <div class="container">
            <?php
            if(isset($_REQUEST["success"])){
                echo "<script>alert('success')</script>";
            }
            ?>
            <div class="row">
                <div class="col-md-5">
                        <h1 class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms"><span>JOIN US</span></h1>
                        <form method="POST" action="submit.php">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="Write your first name here..." required>
                            </div>
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Write your last name here..." required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="text" class="form-control" placeholder="Write your email address here..." required>
                            </div>
                            <div class="form-group">
                                <label for="uname">Username</label>
                                <input type="text" class="form-control" id="uname" name="uname" placeholder="Write your username here..." required>
                            </div>
                            <div class=form-group>
                                <label for="pword">Password</label>
                                <input type="password"  class="form-control" name="pword" id="pword" placeholder="Write your password here..." required>
                            </div>
                            <div class=form-group>
                                <label for="cpword">Confirm Password</label>
                                <input type="password" class="form-control" name="cpword" id="cpword" placeholder="Retype your password here..." required>
                            </div>
                            <div>
                                <button class="mybtn" type="submit" id="register" name="register" color="#ff530a">JOIN US</button>
                            </div>
                        </form>
                </div><!-- .col-md-12 close -->
                
                <div class="col-md-5 col-md-push-2">
                        <h1 class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms"><span>LOG IN</span></h1>
                        <form method="POST" action="submit.php">
                            <div class="form-group">
                                <label for="uname">Username</label>
                                <input type="text" class="form-control" id="uname" name="uname" placeholder="Write your username here..." required>
                            </div>
                            <div class=form-group>
                                <label for="pword">Password</label>
                                <input type="password"  class="form-control" name="pword" id="pword" placeholder="Write your password here..." required>
                            </div>
                            <div>
                                <button class="mybtn" type="submit" id="login" name="login" color="#ff530a">LOGIN</button>
                            </div>
                        </form>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- #contact-us close -->
    <!--
    footer  start
    ============================= -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="1100ms">
                        <div class="social-media-link">
                            <h3>Follow <span>US</span></h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="200ms">
                        <h3>CONTACT <span>INFO</span></h3>
                        <div class="info">
                            <ul>
                                <li>
                                  <h4><i class="fa fa-phone"></i>Telephone</h4>
                                  <p>(+234) 817 5873 064</p>
                                    
                                </li>
                                <li>
                                  <h4><i class="fa fa-map-marker"></i>Address</h4>
                                  <p>233 Herbert Macaulay Way, Sabo yaba, Lagos</p>
                                </li>
                                <li>
                                  <h4><i class="fa fa-envelope"></i>E-mail</h4>
                                  <p>memunati@gmail.com</p>
                                  
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
                <div class="col-md-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d333.44014562208054!2d3.379083979855607!3d6.497224003103006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8c58bd8680c1%3A0xd87bbee7c3358342!2sHerbert+Macaulay+Library+(You+Read)!5e0!3m2!1sen!2sng!4v1543856169802" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <!-- .col-md-4 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #footer close -->
    <!--
    subscribe start
    ============================ -->
    <section id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class=" heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms"> SUBSCRIBE <span>to our</span> NEWSLETTER</h1>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                        <form class="form-inline">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="Enter your email to subscribe...">
                                    <div class="input-group-addon">
                                        <button class="btn btn-default" type="submit">subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #subscribe close -->
    <!--
    footer-bottom  start
    ============================= -->
    <footer id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="block">
                        <p>Copyright &copy; 2014 - All Rights Reserved.Design and Developed By <a href="http://www.themefisher.com">Themefisher</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	</body>
</html>