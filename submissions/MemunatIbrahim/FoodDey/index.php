<!DOCTYPE html>
<html class="no-js">
    <?php require 'head.php';?>
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
                                <li><a href='index.php'>Home</a></li>
                                <li><a href='menu.php'>menu</a></li>
                                <li><a href='login.php'>login</a></li>
                                <li><a href='about.php'>about us</a></li>
                                <li><a href='about.php#contact-us'>contacts</a></li>
                                <li><a href='about.php#subscribe'>subscribe</a></li>
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
    Slider start
    ============================== -->
    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="title">
                            <h3>Featured <span>Works</span></h3>
                        </div>
                        <div id="owl-example" class="owl-carousel">
                            <?php
                                require 'db.php';
                                        $sqql = "select * from food where category_id=4 or category_id=3";
                                        $rresult = mysqli_query($conn, $sqql);
                                        while($rrow=mysqli_fetch_array($rresult,MYSQLI_NUM)){
                                            echo "
                                            <div>
                                                <img class='img-responsive' src='data:image/jpag;base64,".base64_encode($rrow[4])."' alt=$rrow[1]>
                                            </div>";
                                        }
                            ?>                        
                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- slider close -->
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
                                    <a href="https://twitter.com/_memunat_">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://web.facebook.com/memunatj">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/memmunat">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/memunat-ajoke-ibrahim">
                                        <i class="fa fa-linkedin"></i>
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
    footer-bottom  start
    ============================= -->
    <footer id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="block">
                        <p>Copyright &copy; 2018 - All Rights Reserved. Design and Developed By Memunat</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	</body>
</html>