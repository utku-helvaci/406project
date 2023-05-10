<?php  
 session_start();  
 if(isset($_COOKIE["user"]))  
 {  
      if($_COOKIE["user"] == "admin"){      
        header("location: admin/home.php");
     }
     else{
        header("location: home.php");
     }
 }  
 
 ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Reservation System Admin</title>
  
  
     
      <link rel="stylesheet" href="css/style1.css">
      <link rel="stylesheet" href="css/font-awesome.css">

  
</head>

<body>
  

 <div class="container">


      <div id="login">

        <form method="post">

          <fieldset class="clearfix">

            <div class="col-md-12" style="display: inline-flex;">
                <div class="col-md-2" style="padding-top: 10px; padding-right: 20px ;"> <i style="font-size : 30px " class="fa fa-user" aria-hidden="true"></i></div>
                <div class="col-md-10"> <input type="text"  name="user" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required>
                </div>                
            </div> <!-- JS because of IE support; better: placeholder="Username" -->
             <div class="col-md-12" style="display: inline-flex;">
                <div class="col-md-2" style="padding-top: 10px;  padding-right: 25px ;"> <i style="font-size:30px " class="fa fa-lock" aria-hidden="true"></i></div>
                <div class="col-md-10"> <input type="password" name="pass"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required>
                </div>                
            </div>  <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" name="sub"  value="Login"></p>

          </fieldset>

        </form>

       

      </div> <!-- end login -->

    </div>
    <div class="bottom">  <h3><a href="index.php">Reservation System Login Page</a></h3></div>
  
  
</body>
</html>

<?php
   include('db.php');
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['user']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pass']); 
      
      $sql = "SELECT id FROM login WHERE usname = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_COOKIE['user'] = $myusername;

         if($myusername == "admin"){
            header("location: admin/home.php");
         }
         else{
            header("location: home.php");
         }
         
      }else {
         echo '<script>alert("Your Login Name or Password is invalid") </script>' ;
      }
   }
?>
