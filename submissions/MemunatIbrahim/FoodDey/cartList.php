<?php
session_start();
require 'db.php';
?>
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
<div class="container">
                    <?php
                        if(isset($_REQUEST['success'])){
                            echo "<div class='alert alert-success'>
                            <strong>Item successfully removed from cart</a>.
                          </div>";
                        }
                        if(isset($_REQUEST['failed'])){
                            echo "<div class='alert alert-danger'>
                            <strong>A problem was encountered while removing from cart.
                          </div>";
                        }
                    ?>
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
                        <?php
                        $sql = "select * from food";
                        $result = mysqli_query($conn, $sql);
                        $count=array_count_values( $_SESSION['cart']);
                        $sum=0;
                        while($row=mysqli_fetch_array($result,MYSQLI_NUM)){
                            if (in_array($row[0], $_SESSION['cart'])) {
                                $id=$row[0];
                                echo"<tr>
                                    <td data-th='Product'>
                                        <div class='row'>
                                            <div class='col-sm-2 hidden-xs'><img src='data:image/jpag;base64,".base64_encode($row[4])."' class='img-responsive' style='width:150px; height:60px;'/></div>
                                            
                                            <div class='col-sm-10'>
                                                <h4 class='nomargin'>$row[1]</h4>
                                                <p>$row[3]</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-th='Price'>₦$row[5]</td>
                                    <td data-th='Quantity'>$count[$id]</td>
                                    <td data-th='Subtotal' class='text-center'> ₦"; echo $price=$row[5]*$count[$id]; $sum+=$price;echo "</td>
                                    <td class='actions' data-th=''>
                                        <a href='remove.php?id=$row[0]'  class='btn btn-danger btn-sm title='Remove from Cart'><i class='fa fa-trash-o'></i></a>					
                                    </td>
                                </tr>";
                            }
                        }
                        ?>
					</tbody>
					<tfoot>
						<tr>
							<td><a href="menu.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total ₦<?php echo $sum?></strong></td>
							<td><a href="checout.php" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>
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