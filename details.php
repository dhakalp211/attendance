<?php
    session_start();
    include "./connect.php";

    $lcid = $_POST['LCID'];
    $password = $_POST['password'];

    if(!empty($lcid) && !empty($password)) {
        $query = "SELECT * from bit WHERE LCID = '$lcid' AND Password = '$password'";
        $run = mysqli_query($connection,$query);
    
        if($run){
            $row = mysqli_num_rows($run);

            if($row > 0) {
                $data = mysqli_fetch_array($run);
                
                $_SESSION['lcid'] = $data['LCID'];

                header("Location:index.php");
            }
        }
    }

?>