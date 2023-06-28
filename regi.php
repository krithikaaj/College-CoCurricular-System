<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $fname = $_POST['fname'];
    $mname  = $_POST['mname'];
    $lname = $_POST['lname'];
    $faname = $_POST['faname'];
    $moname = $_POST['moname'];
    $cutoff = $_POST['cutoff'];
    $department = $_POST['department'];
    $state = $_POST['state'];
    $address = $_POST['address'];
    $emailid = $_POST['emailid'];
    $contactno =$_POST['contactno'];
    $gender= $_POST['gender'];
}
$con=new mysqli('localhost','root','','enrollment form');
if($con){
    //echo "Connection successful";
    $sql="INSERT INTO enrollment (fname,mname,lname,faname,moname,cutoff,department,state,address,emailid,contactno,gender)     VALUES('$fname','$mname','$lname','$faname','$moname','$cutoff','$department','$state','$address','$emailid','$contactno','$gender')";
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