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
                        <h1 class="heading wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms" >Order <span> <?php echo $o_id=$_GET['id']?> Details</span></h1>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #call-to-action close -->
<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:30%">Food ID</th>
							<th style="width:30%">Food Name</th>
							<th style="width:30%">Quantity</th>
							<th style="width:20%" class="text-center">Sub-total</th>
						</tr>
					</thead>
					<tbody>
                        <?php
                            $id=$_GET['id'];
                            $sql = "select * from order_details where order_id='$id'"; //get orders from DB
                            $result = mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($result,MYSQLI_NUM)){
                                $id=$row[0];
                                echo"<tr>
                                    <td data-th='Food ID'>$row[2]</td>";
                                    $food_id=$row[2];
                                    $getfood = mysqli_query($conn,"select * from food where id='$food_id'"); //get orders from DB
                                    $food=mysqli_fetch_array($getfood,MYSQLI_NUM);
                                echo"<td data-th='Food Name'>$food[1]</td>
                                    <td data-th='Quantity'>$row[3]</td>
                                    <td data-th='Sub-total' class='text-center'> ₦$row[4] </td>
                                    </td>
                                </tr>";
                            }
                        ?>
					</tbody>
				</table>
                <div>
                <?php echo"
                    <a href='resolved.php?id=$o_id'  class='btn btn-success btn-lg' title='Resolve Order' style='display:block; width:8rem;margin:2rem auto'><i class='fa fa-check'></i></a>";
                ?>
                </div>
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