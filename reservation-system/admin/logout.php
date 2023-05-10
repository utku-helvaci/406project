<?php
session_start();
unset($$_COOKIE["user"]);
header("location:../index.php");
?>