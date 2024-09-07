<?php 
include "config/dal.php";
session_start();

session_unset();

session_destroy();
header("location:project1/index.php");

 
?>