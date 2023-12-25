<?php

include 'db.php';
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    
    <!-- aos animation -->
    <link rel="stylesheet" href="css/aos.css" />
    
    <link rel="stylesheet" href="css/flash.css">
    <title>Reservation System</title>
</head>

<body>
    <!--  carousel -->


    <!-- main section -->

    <div class="middler">

    <section id="auth_section">

        <div class="logo">
            <img class="bluebirdlogo" src="images/-191.png" alt="logo">
            <p>Reservation System</p>
        </div>

        <div class="auth_container">
            <!--============ login =============-->

            <div id="Log_in">
                <h2>Log In</h2>

                <!-- // ==userlogin== -->
                <?php 
                if (isset($_POST['user_login_submit'])) {
                    $usname = $_POST['Username'];
                    $psword = $_POST['Password'];

                    $sql = "SELECT * FROM login WHERE usname = '$usname' AND pass = '$psword'";
                    $result = mysqli_query($con, $sql);

                    if ($result->num_rows > 0) {
                        setcookie('user', $usname) ;
                        if($usname == "admin"){
                            header("location: admin/home.php");
                         }
                         else{
                            header("location: home.php");
                         }
                    } else {
                        echo "<script>swal({
                            title: 'Something went wrong',
                            icon: 'error',
                        });
                        </script>";
                    }
                }
                ?>
                <form class="user_login authsection active" id="userlogin" action="" method="POST">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="Username" placeholder=" ">
                        <label for="Username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="Password" placeholder=" ">
                        <label for="Password">Password</label>
                    </div>
                    <button type="submit" name="user_login_submit" class="auth_btn">Log in</button>

                    <div class="footer_line">
                        <h6>Don't have an account? <span class="page_move_btn" onclick="signuppage()">sign up</span></h6>
                    </div>
                </form>
                
                
                
            </div>

            <!--============ signup =============-->
            <?php       
                if (isset($_POST['user_signup_submit'])) {
                    $Username = $_POST['Username'];
                    $Email = $_POST['Email'];
                    $Password = $_POST['Password'];
                    $CPassword = $_POST['CPassword'];

                    if($Username == "" || $Email == "" || $Password == ""){
                        echo "<script>swal({
                            title: 'Fill the proper details',
                            icon: 'error',
                        });
                        </script>";
                    }
                    else{
                        if ($Password == $CPassword) {
                            $sql = "SELECT * FROM login WHERE emailaddress = '$Email'";
                            $result = mysqli_query($con, $sql);
    
                            if ($result->num_rows > 0) {
                                echo "<script>swal({
                                    title: 'Email already exits',
                                    icon: 'error',
                                });
                                </script>";
                            } else {
                                $sql = "INSERT INTO login (usname,emailaddress,pass) VALUES ('$Username', '$Email', '$Password')";
                                $result = mysqli_query($con, $sql);
    
                                if ($result) {
                                    // setcookie('user', $Username) ;
                                    $Username = "";
                                    $Email = "";
                                    $Password = "";
                                    $CPassword = "";
                                    header("Location: index.php");
                                } else {
                                    echo "<script>swal({
                                        title: 'Something went wrong',
                                        icon: 'error',
                                    });
                                    </script>";
                                }
                            }
                        } else {
                            echo "<script>swal({
                                title: 'Password does not matched',
                                icon: 'error',
                            });
                            </script>";
                        }
                    }
                    
                }
            ?>
            <div id="sign_up">
                <h2>Sign Up</h2>

                <form class="user_signup" id="usersignup" action="" method="POST">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="Username" placeholder=" ">
                        <label for="Username">Username *</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" name="Email" placeholder=" ">
                        <label for="Email">Email *</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="Password" placeholder=" ">
                        <label for="Password">Password *</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="CPassword" placeholder=" ">
                        <label for="CPassword">Confirm Password *</label>
                    </div>

                    <button type="submit" name="user_signup_submit" class="auth_btn">Sign up</button>

                    <div class="footer_line">
                        <h6>Already have an account? <span class="page_move_btn" onclick="loginpage()">Log in</span></h6>
                    </div>
                </form>
            </div>
    </section>
</body>


<script src="js/index.js"></script>

<script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<!-- sweet alert -->
<script src="js/sweetalert.min.js"></script>
<!-- loading bar -->
<script src="js/pace.min.js"></script>

<!-- aos animation-->
<script src="js/aos.js"></script>
<script>
    AOS.init();
</script>
</html>

