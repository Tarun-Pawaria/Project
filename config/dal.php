<?php include_once 'constant.php';

function getConnection(){
    $cn=mysqli_connect(SERVER,USER,PWD) OR die("could not connet to server");
    $db=mysqli_select_db($cn,DATABASE) OR die("could not find database");
    return($cn);
   }

/* vechile register */

function reg_vec($owner,$type,$number,$color){
    $cn=getConnection();
     $sql="SELECT * FROM registration WHERE vechile_no='$number' ";
        
     $result=mysqli_query($cn,$sql) or die("select query failed");
       
     if(mysqli_num_rows($result)>0){
        echo "<p style='color:red; margin-left:15px; text-align: center; margin:10px 0;' > vechile Already register</p>";
    }else{
  
      $sql="INSERT INTO registration (owner,type,vechile_no,color) value('$owner','$type','$number','$color') ";
       
      $result2=mysqli_query($cn,$sql) or die("registration query failed");
      
      header('location:allreg.php');
      return($result2);
      
    
     
   }
}

/*get vechile */

function get_vechile(){
    $cn=getConnection();
    $sql="SELECT * FROM registration  ";
        
     $result=mysqli_query($cn,$sql) or die("select query failed");

     
     return($result);

}


function get_vechile1(){
    $cn=getConnection();
    $sql="SELECT * FROM registration ORDER BY vechile_id DESC ";
        
     $result=mysqli_query($cn,$sql) or die("select query failed");

     
     return($result);

}

function get_records($id){
    $cn=getConnection();
    $sql="SELECT * FROM registration WHERE vechile_id='$id' ";
        
     $result=mysqli_query($cn,$sql) or die("select query failed");

     
     return($result);

}

/* UPDATE RECORD QUERY */

function reg_vec1($owner,$type,$number,$color,$id){
    $cn=getConnection();
    
         /*
      $sql="SELECT * FROM registration WHERE vechile_no='$number' ";
       
    $result=mysqli_query($cn,$sql) or die("select query failed");
      
    if(mysqli_num_rows($result)>0){
       echo "<p style='color:red; margin-left:15px; text-align: center; margin:10px 0;' > vechile Already register</p>";
   }else{
   */
    
    $sql="UPDATE registration SET owner='{$owner}',type='{$type}' ,  color='{$color}' WHERE vechile_id='{$id}'  ";
      
     $result2=mysqli_query($cn,$sql) or die("registration query failed");
     
     header('location:update.php');
     return($result2);
     
   
    
  }




/*delete records */
function del_record($id){
    $cn=getConnection();
    

    $sql="DELETE FROM registration WHERE vechile_id='$id' ";
     
  $result=mysqli_query($cn,$sql) or die("select query failed");

  header('location:update.php');
     return($result);

}











?>