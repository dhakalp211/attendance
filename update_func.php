<?php
    include "./connect.php";
    if(isset($_POST['submit'])) {
        $lcid = $_GET['lcid'];
        $fname = $_POST['fname'];
        $address = $_POST['address'];
        $joinedDate = $_POST['joinedDate'];
        $password = $_POST['password'];
    
        $query = "UPDATE bit SET Name = '$fname', Address = '$address', JoinedDate = '$joinedDate', Password = '$password' WHERE LCID = '$lcid'";
        $run = mysqli_query($connection,$query);
        
        if($run) {
            echo ("success") ; 
        }else {
            echo ("error occured.") ; 
        }
    }

?>