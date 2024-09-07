<?php include_once 'includes/header.php';
include_once 'config/dal.php'; ?>

<?php  
include_once 'config/dal.php';
$result =get_vechile();
if(mysqli_num_rows($result)>0){

?>
<Link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css"/>
<div class="container">
<div class="row">
<table id="tablerecord" style="width:80% " cellpadding="7px" cellspacing="0" >
    <thead>
     <th>VECHILE ID </th>
     <th>OWNER</th>
     <th>VECHILE NO</th>
     <th>TYPE</th>
     <th>COLOR</th>
     
    </thead>
 
 <tbody>
    <?php 
    while($row=mysqli_fetch_assoc($result)){

    
    ?>
    <tr>
        <td><?php echo $row['vechile_id'] ;?></td>
        <td><?php echo $row['owner'] ;?></td>
        
        <td><?php echo $row['vechile_no'];?></td>
        <td><?php echo $row['type'];?></td>
        <td><?php echo $row['color'];?></td>
        
        
        
    </tr>
 </tbody>
 <?php
 }
 ?>

</table>
<?php



}

?>

</div>



</div>

<style>
    #tablerecord{
    border: 1px solid black;
    text-align:center;
}
th{
    background-color: black;
    color:aliceblue;
    padding: 10px;
    font-size: large;
    border: 1px solid black;
}
td{
    padding:10px;
    border: 1px solid black;
}


</style>

<!--




        if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
echo $row['owner'];
echo $row['type'];
echo $row['vechile_no'];
echo $row['color'];
echo $row['vechile_id']. '</br>';