<?php include_once 'includes/header.php'; ?>





<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" media="screen" href="css/index.css">




<div class="container" id="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <h1>Register vechile</h1>
            <form id="regfrm" action="<?PHP $_SERVER['PHP_SELF'] ?>" method="POST">

                <div class="divfrm">
                    <strong for="owner">OWNER NAME </strong>
                    <input type="text" name="owner" required>
                </div>

                


                <div class="divfrm">
                    <strong for="owner">TYPE </strong>
                    <select name="type" required>
                        <option value="TWO WHEELER"> TWO WHEELER</option>
                        <option value="THREE WHEELER"> THREE WHEELER</option>
                        <option value="FOUR WHEELER">  FOUR WHEELER</option>
                    </select>
                </div>
                <div class="divfrm">
                    <strong for="vechileno">VECHILE NO </strong>
                    <input type="text" name="vechileno"  placeholder="HR 12 AG 1234" required>
                </div>

                <div class="divfrm">
                    <strong for="color">VECHILE COLOR </strong>
                    <select name="color" required>
                        <option value="WHITE"> WHITE</option>
                        <option value="BLACK"> BLACK</option>
                        <option value="GREEN">  GREEN</option>
                        <option value="YELLOW">  YELLOW</option>
                        <option value="GREY">  GREY</option>
                        <option value="RED">  RED</option>
                        <option value="BLUE">  BLUE</option>

                    </select>
                </div>


                <div class="divfrm">
                    <button type="submit" name="reg" id="reg">Register</button>
                </div>
            </form>
        </div>
    </div>

</div>
<?PHP

if(isset($_POST['reg'])){
    include_once 'config/dal.php';
     $owner=$_POST['owner'];
     $type=$_POST['type'];
     $number=$_POST['vechileno'];
     $color=$_POST['color'];

   $result=reg_vec($owner,$type,$number,$color);
}

?>