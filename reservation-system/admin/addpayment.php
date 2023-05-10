<?php  
session_start();  
// if(isset($_COOKIE["user"]))  
//  {  
//     if($_COOKIE["user"] == "admin"){        
//         header("location: admin/home.php");
//      }
//      else{
//         header("location: home.php");
//      }
//  }  
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reservation System</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">MAIN MENU </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
			
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
					
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i> Homepage</a>
                    </li>
                    <li>
                        <a class="active-menu"  href="addpayment.php"><i class="fa fa-plus-circle"></i>Add Payment</a>
                    </li>
                </ul>                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
       
        
       
        <div id="page-wrapper" >
            <div id="page-inner">
			    <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           NEW PAYMENT <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
                <div class="row">

                    <?php if($_COOKIE['user'] != "admin") {?>
                    
                    <div class="col-md-5 col-sm-5">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                ADD NEW PAYMENT
                            </div>
                            <div class="panel-body">
        						<form name="form" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>First Name *</label>
                                        <input type="text" required name="first_name" class="first_name col-md-12" id="first_name" />
                                    </div>
        							  
        							<div class="form-group">
                                        <label>Last Name *</label>
                                        <input type="text" required name="last_name" class="last_name col-md-12" id="last_name" />
                                    </div>
                                    <div class="form-group">
                                        <label>Card Number *</label>
                                        <input type="text" required name="card_num" class="card_num col-md-12" id="card_num" />
                                    </div>
                                    <div class="form-group">
                                        <label>Price *</label>
                                        <input type="text" required name="price" class="price col-md-12" id="price" />
                                    </div>
                                    <div class="form-group">
                                        <label>Expire Date *</label>
                                        <input name="cin" required type ="date" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label>CVV *</label>
                                        <input name="cout" required type ="text" class="form-control" />
                                    </div>
                                    
        							<input type="submit" name="add" value="Add New" class="btn btn-primary"> 
        						</form>
    							<?php
    							include('db.php');
    							if(isset($_POST['add']))
    							{

                                    extract($_POST);                                

    								$fname = $_POST['first_name'] ; 
    								$lname = $_POST['last_name'] ;
                                    $cardnum = $_POST['card_num'] ;
                                    $exdate = $_POST['cin'] ;
                                    $cvv = $_POST['cout'] ; 
                                    $price = $_POST['price'] ; 

    								
    								$check="SELECT * FROM payment_list WHERE fName = '$fname' AND lName = '$lname'  AND card_id = '$cardnum' AND  cvv = '$cvv' AND  price = '$price'  ";
    								$rs = mysqli_query($con,$check);
    								$data = mysqli_fetch_array($rs, MYSQLI_NUM);
    								if($data) {
    									echo "<script type='text/javascript'> alert('Payment Already in Exists')</script>";
    									
    								}

    								else
    								{
                                    	$sql ="INSERT INTO `payment_list`( `fName`, `lName`,`card_id`, `expire_date`,`cvv`,`price`) VALUES ('$fname','$lname','$cardnum','$exdate','$cvv',`$price`)" ;
    								    if(mysqli_query($con,$sql))
        								{
        								    echo '<script>alert("New Payment Added") </script>' ;
        								}
                                        else {
        									echo '<script>alert("Sorry ! Check The System") </script>' ;
        								}
    							    }
    							}
    							
    							?>
                            </div>
                            
                        </div>
                    </div>
                    <?php } ?>
                    
                      
                    <div class="row">
                        <?php if($_COOKIE['user'] == "admin") {?>
                        <div class="col-md-6 col-sm-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    PAYMENT INFORMATION
                                </div>
                                <div class="panel-body">
        								<!-- Advanced Tables -->
                                    <div class="panel panel-default">
                                        <?php
                						$sql = "select * from payment_list ";
                						$re = mysqli_query($con,$sql)
                						?>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                    <thead>
                                                        <tr>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>Card Number</th>
                											<th>Expire Date</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                									
                									<?php
                										while($row= mysqli_fetch_array($re))
                										{
                											$id = $row['id'];
                											if($id % 2 == 0) 
                											{
                												echo "<tr class=odd gradeX>
                													<td>".$row['fName']."</td>
                													<td>".$row['lName']."</td>
                												   <th>".$row['card_id']."</th>
                                                                   <th>".$row['expire_date']."</th>
                												</tr>";
                											}
                											else
                											{
                												echo"<tr class=even gradeC>
                													<td>".$row['fName']."</td>
                                                                    <td>".$row['lName']."</td>
                                                                   <th>".$row['card_id']."</th>
                                                                   <th>".$row['expire_date']."</th>
                												</tr>";
                											
                											}
                										}
                									?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!--End Advanced Tables -->      
        							   
                               </div>
                                
                            </div>
                        </div>
                        <?php } ?>                       
                       
                    </div>      
    				
    			</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <!-- <script src="assets/js/custom-scripts.js"></script> -->
    
   
</body>
</html>
