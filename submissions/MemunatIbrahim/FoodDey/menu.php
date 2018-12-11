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
                                <li><a href="./index.php">Home</a></li>
                                <li><a href="./menu.php">menu</a></li>
                                <li><a href="./login.php">login</a></li>
                                <li><a href="./about.php">about us</a></li>
                                <li><a href="./about.php#contact-us">contacts</a></li>
                                <li><a href="./about.php#subscribe">news</a></li>
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
    price start
    ============================ -->
    <section id="price">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        if(isset($_REQUEST['success'])){
                            echo "<div class='alert alert-success'>
                            <strong>Item successfully added to cart, view <a href='cartList.php'>your cart here</a>.
                          </div>";
                        }
                        if(isset($_REQUEST['failed'])){
                            echo "<div class='alert alert-danger'>
                            <strong>A problem was encountered while adding to cart.
                          </div>";
                        }
                    ?>
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">our <span>MENU</span> the <span>PRICE</span></h1>
                                <?php
                                    require 'db.php';
                                    $sql = "select * from category order by name";
                                    $result = mysqli_query($conn, $sql);
                                    while($row=mysqli_fetch_array($result,MYSQLI_NUM)){
                                        echo "
                            <div class='title'>
                                        <h3><span>$row[1]</span></h3>
                                        </div>
                                    <div class='pricing-list'>";
                                        $sqql = "select * from food where category_id=$row[0]";
                                        $rresult = mysqli_query($conn, $sqql);
                                        echo '
                                        <ul>';
                                        while($rrow=mysqli_fetch_array($rresult,MYSQLI_NUM)){
                                            echo "
                                            <li class='wow fadeInUp' data-wow-duration='300ms' data-wow-delay='300ms'>
                                                    <div class='row'>
                                                    <img src='data:image/jpag;base64,".base64_encode($rrow[4])."' class='col-md-2' style='width:150px; height:100px;'/>
                                                    <div class='item col-md-10'>
                                                        <div class='item-title'>
                                                            <h2>$rrow[1]</h2>
                                                            <b style='float:right; color: #ff530a; font-size:2rem'> ₦$rrow[5]
                                                            <a href='cart.php?id=$rrow[0]' style='border:2px solid #ff530a; color: #ff530a; margin:0 1rem' onclick='#' title='Add to Cart'>&plus; </a>
                                                            </b>
                                                        </div>
                                                    <p style='font-size:2rem'>$rrow[3]</p>
                                                    </div>
                                                </div>
                                            </li>";
                                        }
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #price close -->
    <!--
    footer-bottom  start
    ============================= -->
    <footer id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="block">
                        <p>Copyright &copy; 2018 - All Rights Reserved.Design and Developed By Memunat</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	</body>
</html>