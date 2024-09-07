<?php 
include_once 'config/dal.php'; 

$id=$_GET['id'];
$result=del_record($id);
?>