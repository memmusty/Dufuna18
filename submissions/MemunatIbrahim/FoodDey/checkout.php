<!DOCTYPE html>
<html class="no-js">
    <?php require 'head.php';
        require 'db.php';
    ?>
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
    <!--
    check out  start
    ============================= -->
    <section id="check-out">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1 class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms"><span>Your Order</span></h1>
	            <table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
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
                                    <td data-th='Product'>
                                        <div class='row'>
                                            <div class='col-sm-10'>
                                                <h4 class='nomargin'>$row[1]</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-th='Quantity'>$count[$id]</td>
                                    <td data-th='Subtotal' class='text-center'> ₦"; echo $price=$row[5]*$count[$id]; $sum+=$price;echo "</td>
                                </tr>";
                            }
                        }
                        ?>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center" colspam=3><strong>Total ₦<?php echo $sum;?></strong></td>
						</tr>
					</tfoot>
				</table>
                </div><!-- .col-md-12 close -->
                <div class="col-md-5 col-md-push-2">
                        <h1 class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms"><span>Check Out</span></h1>
                        <form method="POST" action="order.php">
                            <div class="form-group">
                                <label for="fname">Phone Number</label>
                                <input type="tel" class="form-control" id="number" name="number" placeholder="Write your phone number here..." required>
                            </div>
                            <div class="form-group">
                                <label for="fname">Street Address</label>
                                <input type="text" class="form-control" id="street" name="street" placeholder="Write your Street Address here..." required>
                            </div>
                            <div class="form-group">
                                <label for="lname">Town/City</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="Write your Town/City here..." required>
                            </div>
                            <div class="form-group">
                                <label for="email">Country</label>
                                <input type="text" class="form-control" id="country" name="country"  placeholder="Write your Country here..." required>
                            </div>
                            <input type="hidden" class="form-control" id="total" name="total"  value="<?php echo $sum;?>" required>                            
                            <?php 
                            //check if the cart is empty
                                session_start();
                                if($sum>0){
                                    echo "     
                                    <div>
                                    <button class='mybtn' type='submit' id='checkout' name='checkout' color='#ff530a'>Check Out</button>
                                    </div>";
                                }
                            ?>
                        </form>
                </div><!-- .col-md-12 close -->
                
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- #check out close -->
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