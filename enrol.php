<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $fname = $_POST['fname'];
    $dept = $_POST['dept'];
    $email = $_POST['email'];
    $phn =$_POST['phn'];
    $dh=$_POST['dh'];
    $gender= $_POST['gender'];
}
$con=new mysqli('localhost','root','','registration');
if($con){
    //echo "Connection successful";
    $sql="INSERT INTO form(fname,dept,email,phn,dh,gender)     VALUES('$fname','$dept','$email','$phn','$dh','$gender')";
    $result=mysqli_query($con,$sql);
     if($result){
         echo "Data instered successfully";
     }else{
        die(mysqli_error($con));

     }
}else{
    die(mysqli_error($con));
}
?>