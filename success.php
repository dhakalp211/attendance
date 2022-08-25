<?php
    include "./connect.php";

$lcid = $_POST['LCID'];
$fname = $_POST['fname'];
$address = $_POST['address'];
$joinedDate = $_POST['joinedDate'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if($password == $cpassword) {
    $query = "INSERT INTO bit(LCID,Name,Address,JoinedDate,Password) VALUES('$lcid','$fname','$address','$joinedDate','$password')";
    $run = mysqli_query($connection,$query);
    
    echo ("Id created successfuly.") ; 
    
}else {
    echo ("Please type password correctly.");
    
}

?>