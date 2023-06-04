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
                        <a  href="settings.php"><i class="fa fa-dashboard"></i>Rooms Status</a>
                    </li>
					<li>
                        <a  class="active-menu" href="room.php"><i class="fa fa-plus-circle"></i>Add Room</a>
                    </li>
                    <li>
                        <a  href="roomdel.php"><i class="fa fa-desktop"></i> Delete Room</a>
                    </li>
                   <!--  <li>
                        <a  href="addpayment.php"><i class="fa fa-plus-circle"></i>Add Payment</a>
                    </li> -->
                    
                </ul>   
					

                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
       
        
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           NEW ROOM <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            ADD NEW ROOM
                        </div>
                        <div class="panel-body">
    						<form name="form" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Type Of Room *</label>
                                    <?php 
                                        include ('db.php');
                                        $sql = "SELECT  DISTINCT type FROM room " ;
                                        $re = mysqli_query($con,$sql) ;
                                        $id = 0 ;
                                    ?>
                                    <select name="troom"  class="form-control" required>
                                        <?php 
                                            while($row= mysqli_fetch_array($re))
                                            {
                                                $type = $row['type'];
                                                $id ++ ;
                                        ?>
                                        <option value="<?php echo $type ;?>"><?php echo $type ;?></option>
                                        <?php 
                                            }
                                        ?>
                                    </select>
                                </div>
    							  
    							<div class="form-group">
                                    <label>Bedding Type</label>
                                    <select name="bed" class="form-control" required>
    									<option value selected ></option>
                                        <option value="Single">Single</option>
                                        <option value="Double">Double</option>
    									<option value="Triple">Triple</option>
                                        <option value="Quad">Quad</option>          
                                    </select>                                        
                                </div>
                                <div class="form-group">
                                    <label for="upload_img" class="lab">Upolad Image</label>
                                    <input type="file" name="upload_img" id="file" value="" >
                                    <div id="uploadIMG" ></div>                                      
                                </div>
                                <div class="form-group">
                                    <label>Comment</label>
                                    <textarea class="room_comment col-md-12" id="room_comment" name="room_comment"></textarea>                                       
                                </div>
                                <div class="form-group">
                                    <label>Abbreviation Of RoomType *</label>
                                    <?php 
                                        include ('db.php');
                                        $sql = "SELECT  DISTINCT type_s FROM room " ;
                                        $re = mysqli_query($con,$sql) ;
                                        $id = 0 ;
                                    ?>
                                    <select name="tsroom"  class="form-control" required>
                                        <?php 
                                            while($row= mysqli_fetch_array($re))
                                            {
                                                $type = $row['type_s'];
                                                $id ++ ;
                                        ?>
                                        <option value="<?php echo $type ;?>"><?php echo $type ;?></option>
                                        <?php 
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group" style="padding-bottom: 20px ;">
                                    <label>Price</label> <label style="float: right;">Per Night/Per Day</label>
                                    <input type=""  class="room_price col-md-12" id="room_price" name="room_price" value="60" />                                       
                                </div>
    							<input type="submit" name="add" value="Add New" class="btn btn-primary"> 
    						</form>
							<?php
							include('db.php');
							if(isset($_POST['add']))
							{

                                extract($_POST);

                                $imageFileType = strtolower(pathinfo($_FILES["upload_img"]["name"],PATHINFO_EXTENSION)) ;
                                // echo $imageFileType ;
                                $fname=date('Ymd').time() ;
                                $filename=$fname.".".$imageFileType ;
                                $tempname=$_FILES['upload_img']['tmp_name'] ;
                                $folder="images/".$filename ;

                                $path ="../".$folder ;
                                // echo $tempname ;
                                // echo $folder ;
                                move_uploaded_file($tempname,$path) ;

								$room = $_POST['troom'] ; 
								$bed = $_POST['bed'] ;
								$place = 'Free' ;

                                $comment = $_POST['room_comment'] ;
                                $room_ts = $_POST['tsroom'] ; 
                                $price = $_POST['room_price'] ; 

								
								$check="SELECT * FROM room WHERE type = '$room' AND bedding = '$bed'  AND place = 'Free'";
								$rs = mysqli_query($con,$check);
								$data = mysqli_fetch_array($rs, MYSQLI_NUM);
								if($date[0]) {
									echo "<script type='text/javascript'> alert('Room Already in Exists')</script>";
									
								}

								else
								{
                                	$sql ="INSERT INTO `room`( `type`, `bedding`,`place`, `img_url`,`comment`, `type_s`, 'price') VALUES ('$room','$bed','$place','$folder','$comment','$room_ts','$price')" ;
								    if(mysqli_query($con,$sql))
    								{
    								    echo '<script>alert("New Room Added") </script>' ;
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
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            ROOMS INFORMATION
                        </div>
                        <div class="panel-body">
								<!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <?php
						$sql = "select * from room ";
						$re = mysqli_query($con,$sql)
						?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Room ID</th>
                                            <th>Room Type</th>
											<th>Bedding</th>
                                            <th>Price</th>
                                            
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
													<td>".$row['id']."</td>
													<td>".$row['type']."</td>
												   <th>".$row['bedding']."</th>
                                                   <th>".$row['price']."</th>
												</tr>";
											}
											else
											{
												echo"<tr class=even gradeC>
													<td>".$row['id']."</td>
													<td>".$row['type']."</td>
												   <th>".$row['bedding']."</th>
                                                   <th>".$row['price']."</th>
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
