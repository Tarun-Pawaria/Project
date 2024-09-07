<?php 
include_once 'includes/header.php';
include_once 'config/dal.php';

 $id=$_GET['id'];
 $result=get_records($id);
 if(mysqli_num_rows($result)>0){

    while($row=mysqli_fetch_assoc($result)){

 

?>

<link rel="stylesheet" type="text/css" href="css/index.css">
<div class="container" id="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">

            <h1>Register vechile update</h1>


            <form id="regfrm" action="<?PHP $_SERVER['PHP_SELF'] ?>" method="POST">

                <div class="divfrm">
                    <input type="hidden" value="<?php echo $row['vechile_id'];?>"/>
                    <strong for="owner">OWNER NAME </strong>
                    <input type="text" name="owner" value="<?php echo $row['owner'];?>">
                </div>

                


                <div class="divfrm">
                    <strong for="type">TYPE </strong>
                    <select name="type">
                        <option value="<?php echo $row['type'];?>"><?php echo $row['type'];?> </option>
                        <option value="TWO WHEELER"> TWO WHEELER</option>
                        <option value="THREE WHEELER"> THREE WHEELER</option>
                        <option value="FOUR WHEELER">  FOUR WHEELER</option>
                        
                    </select>
                </div>
                <div class="divfrm">
                    <strong for="vechileno">VECHILE NO </strong>
                    <input type="" disabled name="vechileno"   value="<?php echo $row['vechile_no'];?>">
                </div>

                <div class="divfrm">
                    <strong for="color">VECHILE COLOR </strong>
                    <select name="color" required>
                        <option value="<?php echo $row['color'];?>"><?php echo $row['color'];?></option>
                        <option value="WHITE"> WHITE</option>
                        <option value="BLACK"> BLACK</option>
                        <option value="GREEN">  GREEN</option>
                        <option value="YELLOW">  YELLOW</option>
                        <option value="GREY">  GREY</option>
                        <option value="RED">  RED</option>
                        <option value="BLUE">  BLUE</option>

                    </select>
                </div>
              <?php 

                  }
                  }
                ?>

                <div class="divfrm">
                    <button type="submit" name="reg1" id="reg">Update</button>
                </div>
            </form>
        </div>
    </div>

</div>

<?php 
if(isset($_POST['reg1'])){
    include_once 'config/dal.php';
   $owner=$_POST['owner'];
   $type=$_POST['type'];
   $number=$_POST['vechileno'];
   $color=$_POST['color'];

   $result=reg_vec1($owner,$type,$number,$color,$id);
}



?>