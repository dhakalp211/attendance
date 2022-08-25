<?php
    include "./connect.php";
    if(isset($_GET['lcid'])) {
        $lcid = $_GET['lcid'];

        $query = "DELETE FROM bit WHERE LCID = '$lcid'";

        $run = mysqli_query($connection, $query);

        if($run) {
            echo "Deleted";
        }else {
            echo "Error while deleting";
        }
    }
?>