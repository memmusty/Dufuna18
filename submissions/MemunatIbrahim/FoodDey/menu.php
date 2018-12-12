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
                            <strong>Item successfully added to cart, view <a href='cartList.php'>your cart here</a> to checkout.
                          </div>";
                        }
                        if(isset($_REQUEST['failed'])){
                            echo "<div class='alert alert-danger'>
                            <strong>A problem was encountered while adding to cart.
                          </div>";
                        }
                        if(isset($_REQUEST['order_success'])){
                            echo "<div class='alert alert-success'>
                            <strong>Order successfully placed. Thank you for your patronage</a>.
                          </div>";
                        }
                    ?>
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">our <span>MENU</span> the <span>PRICE</span></h1>
                                <?php
                                    require 'db.php';
                                    //get foods from the DB and order them by their category
                                    $sql = "select * from category order by name"; 
                                    $result = mysqli_query($conn, $sql);
                                    while($row=mysqli_fetch_array($result,MYSQLI_NUM)){ //get each category
                                        echo "
                            <div class='title'>
                                        <h3><span>$row[1]</span></h3>
                                        </div>
                                    <div class='pricing-list'>";
                                        $sqql = "select * from food where category_id=$row[0]";
                                        $rresult = mysqli_query($conn, $sqql);
                                        echo '
                                        <ul>';
                                        while($rrow=mysqli_fetch_array($rresult,MYSQLI_NUM)){//get all foods under the category
                                            echo "
                                            <li class='wow fadeInUp' data-wow-duration='300ms' data-wow-delay='300ms'>
                                                    <div class='row'>
                                                    <img src='data:image/jpag;base64,".base64_encode($rrow[4])."' class='col-md-2' style='width:150px; height:100px;'/>
                                                    <div class='item col-md-10'>
                                                        <div class='item-title'>
                                                            <h2>$rrow[1]</h2>
                                                            <b style='float:right; color: #ff530a; font-size:2rem'> ₦$rrow[5]
                                                            <a href='cart.php?id=$rrow[0]' style='border:2px solid #ff530a; color: #ff530a; margin:0 1rem' onclick='#' title='Add to Cart. Click as much as the quantity you want'>&plus; </a>
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
                        <p>Copyright &copy; 2018 - All Rights Reserved.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	</body>
</html>