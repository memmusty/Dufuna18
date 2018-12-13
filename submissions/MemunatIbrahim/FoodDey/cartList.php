<?php
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
    <?php include 'nav.php';?>
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
							<th style="width:50%">Food</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
                        <?php
                        $sql = "select * from food"; //get food list from DB
                        $result = mysqli_query($conn, $sql);
                        $count=array_count_values( $_SESSION['cart']); //get the foods in the cart and the quantity of each food ordered
                        $sum=0; //gets the total price of order
                        while($row=mysqli_fetch_array($result,MYSQLI_NUM)){
                            if (in_array($row[0], $_SESSION['cart'])) { //check if a particular food is in the cart and display it on the cartlist if it is
                                $id=$row[0];
                                echo"<tr>
                                    <td data-th='Food'>
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
							<td><a href="check.php" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
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
                        <p>Copyright &copy; 2018 - All Rights Reserved.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	</body>
</html>