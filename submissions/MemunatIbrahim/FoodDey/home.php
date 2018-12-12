<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('Location:adlogin.php');
}
?>
<!DOCTYPE html>
<html class="no-js">
    <?php 
    require 'db.php';
    require 'head.php';?>
	<body>
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
                                <li><a href="./home.php">Home</a></li>
                                <?
                                    //check if user is logged in
                                    if(isset($_SESSION['admin'])){		
                                    echo "<li><a href='adlogout.php' title='Logout'> Logout</a></li>";	}
                                    else{			
                                    echo "<li><a href='adlogin.php'>Login</a></li>";}
                                ?>                                
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
    about-us start
    ============================== -->
    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms" ><span>Orders</span></h1>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #call-to-action close -->
<div class="container">
                    <?php
                        if(isset($_REQUEST['success'])){
                            echo "<div class='alert alert-success'>
                            <strong>Order Resolved</a>.
                          </div>";
                        }
                        if(isset($_REQUEST['failed'])){
                            echo "<div class='alert alert-danger'>
                            <strong>A problem was encountered while resolving order.
                          </div>";
                        }
                    ?>
                    <h1 class="heading wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms" ><span>Pending Orders</span></h1>
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:10%">Order Time</th>
							<th style="width:5%">Cus ID</th>
							<th style="width:10%">Phone Number</th>
							<th style="width:35%">Street</th>
							<th style="width:10%">City</th>
							<th style="width:10%">Country</th>
							<th style="width:10%" class="text-center">Total</th>
							<th style="width:10%">Resolve</th>
						</tr>
					</thead>
					<tbody>
                        <?php
                        $sql = "select * from orders where resolved=0 order by created_by"; //get orders from DB
                        $result = mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($result,MYSQLI_NUM)){
                                $id=$row[0];
                                echo"<tr>
                                    <td data-th='Order Time'>$row[1]</td>
                                    <td data-th='Cus ID'>$row[2]</td>
                                    <td data-th='Phone Number'>$row[3]</td>
                                    <td data-th='Street'>$row[4]</td>
                                    <td data-th='City'>$row[5]</td>
                                    <td data-th='Country'>$row[6]</td>
                                    <td data-th='Total' class='text-center'> ₦$row[7] </td>
                                    <td class='actions' data-th='Resolve'>
                                        <a href='resolve.php?id=$row[0]'  class='btn btn-success btn-sm title='Resolve Order'><i class='fa fa-check'></i></a>					
                                    </td>
                                </tr>";
                        }
                        ?>
					</tbody>
				</table>
</div>
<div class="container">
                    <h1 class="heading wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms" ><span>Resolved Orders</span></h1>
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:10%">Order Time</th>
							<th style="width:5%">Cus ID</th>
							<th style="width:10%">Phone Number</th>
							<th style="width:35%">Street</th>
							<th style="width:10%">City</th>
							<th style="width:10%">Country</th>
							<th style="width:10%" class="text-center">Total</th>
							<th style="width:10%">Resolved</th>
						</tr>
					</thead>
					<tbody>
                        <?php
                        $sql = "select * from orders where resolved=1 order by created_by"; //get orders from DB
                        $result = mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($result,MYSQLI_NUM)){
                                $id=$row[0];
                                echo"<tr>
                                    <td data-th='Order Time'>$row[1]</td>
                                    <td data-th='Cus ID'>$row[2]</td>
                                    <td data-th='Phone Number'>$row[3]</td>
                                    <td data-th='Street'>$row[4]</td>
                                    <td data-th='City'>$row[5]</td>
                                    <td data-th='Country'>$row[6]</td>
                                    <td data-th='Total' class='text-center'> ₦$row[7] </td>
                                    <td class='actions' data-th='Resolve'>
                                        <button  class='btn btn-info btn-sm title='Resolved'><i class='fa fa-check'></i></button>					
                                    </td>
                                </tr>";
                        }
                        ?>
					</tbody>
				</table>
</div>
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