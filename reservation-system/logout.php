<?php
session_destroy();
// unset($_COOKIE["user"]);
setcookie ("user", "", time()-3600);
header("location: index.php");
?>