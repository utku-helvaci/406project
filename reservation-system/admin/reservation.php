<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reservation  System</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a   href="../index.php"><i class="fa fa-home"></i> Homepage</a>
                    </li>
                    
				</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            RESERVATION <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
                <div class="row">
                    
                    <div class="col-md-5 col-sm-5">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                PERSONAL INFORMATION
                            </div>
                            <div class="panel-body">
                                <form name="form" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Title*</label>
                                        <select name="title" class="form-control" required >
                                            <option value selected ></option>
                                            <option value="Dr.">Dr.</option>
                                            <option value="Miss.">Miss.</option>
                                            <option value="Mr.">Mr.</option>
                                            <option value="Mrs.">Mrs.</option>
                                            <option value="Prof.">Prof.</option>
                                            <option value="Rev .">Rev .</option>
                                            <option value="Rev . Fr">Rev . Fr .</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                                    <label>First Name</label>
                                                    <input name="fname" class="form-control" required>
                                                    
                                    </div>
                                    <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input name="lname" class="form-control" required>
                                                    
                                    </div>
                                    <div class="form-group">
                                                    <label>Email</label>
                                                    <input name="email" type="email" class="form-control" required>
                                                    
                                    </div>
                                    <div class="form-group">
                                                    <label>Nationality*</label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="nation"  value="Turkish" checked="">Turkish
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="nation"  value="Non Turkish">Non Turkish
                                                    </label>
                                 
                                    </div>
                                        <?php

                                        $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

                                        ?>
                                    <div class="form-group">
                                                    <label>Passport Country*</label>
                                                    <select name="country" class="form-control" required>
                                                        <option value selected ></option>
                                                        <?php
                                                        foreach($countries as $key => $value):
                                                        echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
                                                        endforeach;
                                                        ?>
                                                    </select>
                                    </div>
                                    <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input name="phone" type ="text" class="form-control" required>
                                                    
                                    </div>
                                   
                            </div>
                            
                        </div>
                    </div>
                    
                      
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    RESERVATION INFORMATION
                                </div>
                                <div class="panel-body">

                                    <div class="form-group">
                                                <label>Check-In</label>
                                                <input name="cin"  id="cin" type ="date" class="cin form-control">
                                                
                                    </div>
                                    <div class="form-group">
                                                <label>Check-Out</label>
                                                <input name="cout"  id="cout" type ="date" class="cout form-control">
                                                
                                    </div>
                                    <div class="form-group">
                                                <label>Type Of Room *</label>
                                                <?php 
                                                $sql1 = "SELECT DISTINCT room.type FROM room WHERE place = 'Free' " ;
                                                $result1 = mysqli_query($con,$sql1) ;
                                                ?>

                                                <select name="troom"  class="troom form-control" required>
                                                    <option value selected ></option>
                                                <?php
                                                while($row= mysqli_fetch_array($result1))
                                                {
                                                    echo "<option value='".$row['type']."'>".$row['type']."</option>" ;
                                                }
                                                ?>
                                                </select>
                                    </div>
                                    <div class="form-group">
                                                <label>Bedding Type</label>
                                                <?php 
                                                $sql2 = "SELECT DISTINCT room.bedding FROM room WHERE place = 'Free' " ;
                                                $result2 = mysqli_query($con,$sql2) ;
                                                ?>
                                                
                                                <select name="bed" class="bed form-control" required>
                                                    <option value selected ></option>
                                                    <?php
                                                        while($row= mysqli_fetch_array($result2))
                                                        {
                                                            echo "<option value='".$row['bedding']."'>".$row['bedding']."</option>" ;
                                                        }
                                                    ?>                                                   
                                                 
                                                </select>
                                    </div>
                                    <div class="form-group">
                                                <label>No.of Rooms *</label>
                                                <select name="nroom" class="nroom form-control" required>
                                                    <script type="text/javascript">
                                                        jQuery(document).ready(function($){
                                                            $('.bed').change(function(){
                                                                var troom_val = $('.troom').val() ;
                                                                var bed = $('.bed').val() ;
                                                                // alert(troom_val) ;
                                                                $.ajax({
                                                                    type: 'POST',
                                                                    url:  'post.php',
                                                                    dataType: 'json',
                                                                    data: {
                                                                        'flag' : 1 ,
                                                                       'troom' : troom_val,
                                                                       'bed'   : bed     
                                                                    },
                                                                    success: function (data) {
                                                                        var res = JSON.parse(data) ;
                                                                        // console.log(res);
                                                                        var i = 1 ;
                                                                        var HTML ;
                                                                        while( i <= res){
                                                                            HTML =  HTML + "<option value='" + i + "'> " + i + "</option>" ;     
                                                                            i ++ ; 
                                                                        }
                                                                        HTML = "<option value selected ></option>" + HTML ;
                                                                        $('.nroom').html(HTML) ;
                                                                    }
                                                                })
                                                                
                                                            })
                                                        });
                                                    </script>
                                                    
                                                    <?php
                                                    
                                                    ?>
                                                </select>
                                    </div>
                                 
                                 
                                    <div class="form-group">
                                                <label>Meal Plan</label>
                                                <select name="meal" class="meal form-control"required>
                                                    <option value selected ></option>
                                                    <option value="Room only">Room only</option>
                                                    <option value="Breakfast">Breakfast</option>
                                                    <option value="Half Board">Half Board</option>
                                                    <option value="Full Board">Full Board</option>
                                                </select>
                                    </div>
                               </div>
                                
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <h1 class="page-header">
                               NEW PAYMENT <small></small>
                            </h1>
                            <?php if($_COOKIE['user'] != "admin") {?>
                    
                            <div class="col-md-5 col-sm-5">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        ADD NEW PAYMENT
                                    </div>
                                    <div class="panel-body">
                                        <!-- <form name="form" method="post" enctype="multipart/form-data"> -->
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
                                                <input name="ext_date" required type ="date" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label>CVV *</label>
                                                <input name="cvv" required type ="text" class="form-control" />
                                            </div>
                                            
                                            <!-- <input type="submit" name="add" value="Add New" class="btn btn-primary">  -->
                                        <!-- </form> -->
                                        <?php
                                        include('db.php');
                                        
                                        
                                        ?>
                                    </div>
                                    
                                </div>
                            </div>
                            <?php } ?>

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
                        
                        
                        <div class="col-md-12 col-sm-12">
                            <div class="well">
                                <h4>HUMAN VERIFICATION</h4>
                                <p>Type Below this code <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
                                <p>Enter the random code<br /></p>
                                    <input  type="text" name="code1" title="random code" />
                                    <input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
                                <input type="submit" name="submit" class="btn btn-primary">
                                <?php
                                    if(isset($_POST['submit']))
                                    {
                                        $code1=$_POST['code1'];
                                        $code=$_POST['code']; 
                                        if($code1!="$code")
                                        {
                                            $msg="Invalide code"; 
                                        }
                                        else
                                        {
                                                                                    
                                            $check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
                                            $rs = mysqli_query($con,$check);
                                            $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                                            if($data) {
                                                echo "<script type='text/javascript'> alert('User Already in Exists')</script>";
                                                
                                            }

                                            else
                                            {
                                                $new ="Not Conform";
                                                $sql = "SELECT  room.free_number FROM room WHERE TYPE = '$_POST[troom]' AND bedding = '$_POST[bed]'" ;
                                                $result = mysqli_query($con, $sql) ;
                                                $data = mysqli_fetch_array($result, MYSQLI_NUM);
                                                // var_dump($data[0]) ;

                                                $rest = $data[0] - $_POST['nroom'] ;
                                                if($rest == 0){
                                                    $sql1 =  "UPDATE room SET free_number = '$rest', place = 'Full'  WHERE type = '$_POST[troom]' AND bedding = '$_POST[bed]'" ;
                                                }
                                                else{
                                                    $sql1 =  "UPDATE room SET free_number = '$rest'  WHERE type = '$_POST[troom]' AND bedding = '$_POST[bed]'" ;
                                                }                                                
                                                $result1 = mysqli_query($con, $sql1) ;

                                                $newUser="INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[country]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',DATEDIFF('$_POST[cout]','$_POST[cin]'))";
                                                if (mysqli_query($con,$newUser))
                                                {
                                                    echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
                                                    
                                                }
                                                else
                                                {
                                                    echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
                                                    
                                                }
                                            }

                                            $fname = $_POST['first_name'] ; 
                                            $lname = $_POST['last_name'] ;
                                            $cardnum = $_POST['card_num'] ;
                                            $exdate = $_POST['ext_date'] ;
                                            $cvv = $_POST['cvv'] ; 
                                            $price = $_POST['price'] ; 

                                            
                                            $check="SELECT * FROM payment_list WHERE fName = '$fname' AND lName = '$lname'  AND card_id = '$cardnum' AND  cvv = '$cvv' AND  price = '$price'  ";
                                            $rs = mysqli_query($con,$check);
                                            $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                                            if($data) {
                                                echo "<script type='text/javascript'> alert('Payment Already in Exists')</script>";
                                                
                                            }

                                            else
                                            {
                                                $sql ="INSERT INTO `payment_list`( `fName`, `lName`,`card_id`, `expire_date`, `cvv`,`price`) VALUES ('$fname','$lname','$cardnum','$exdate','$cvv','$price')" ;
                                                if(mysqli_query($con,$sql))
                                                {
                                                    echo '<script>alert("New Payment Added") </script>' ;
                                                }
                                                else {
                                                    echo '<script>alert("Sorry ! Check The System") </script>' ;
                                                }
                                            }

                                            $msg="Your code is correct";
                                        }


                                    }
                                    ?>
                                </form>
                                    
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
    
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <!-- <script src="assets/js/custom-scripts.js"></script> -->
    
    
   
</body>
</html>
