<?php
    include "./connect.php";
    if(isset($_GET['lcid'])) {
        $lcid = $_GET['lcid'];

        $query = "SELECT * FROM bit WHERE LCID = '$lcid'";

        $run = mysqli_query($connection, $query);

        if($run) {
            $row = mysqli_fetch_array($run);
            
            ?>
                <form action="update_func.php?lcid=<?php echo $row['LCID'];?>" method="post">
                         <label for="fname">FullName</label><br>
                         <input type="text" value="<?php echo $row['Name'] ?>" name="fname" id="fname" required><br>
                         <label for="address">Address</label><br>
                         <input type="text" value="<?php echo $row['Address'] ?>"  name="address" id="address" required><br>
                         <label for="joinedDate">Joined Date</label><br>
                         <input type="date" value="<?php echo $row['JoinedDate'] ?>"  name="joinedDate" id="joinedDate" required><br>
                         <label for="password">Create Password</label><br>
                         <input type="password" value="<?php echo $row['Password'] ?>"  name="password" id="password" required><br>
                         <input type="submit" name="submit">
                </form>
            <?php
        }
    }
?>