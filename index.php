<?php
    session_start();
    if(!isset($_SESSION['lcid'])) header("Location:login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo $_SESSION['lcid'];
    ?>

    
    <a href="./signout.php">signout</a>
    <h1>If you are new go to <a href="./createid.php"><strong>Create Id page</strong></a>

    <form action="" method="POST">
        <input type="searchbar" name="keyword" placeholder="Search">
        <button name="searchbtn">Search</button>
    </form>

    <hr>

    <table width="50%" border="1">
        <tr>
            <th>sn</th>
            <th>LCID</th>
            <th>Name</th>
            <th>Address</th>
            <th>JoinedDate</th>
            <th>Password</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
            include "./connect.php";
            if(isset($_POST['searchbtn'])) {
                $keyword = $_POST['keyword'];
                $query = "SELECT * FROM bit WHERE Name LIKE '%$keyword%' OR Address LIKE '%$keyword%' OR LCID LIKE '%$keyword%'";
            }else {
                $query = "SELECT * FROM bit";
            }
            $run = mysqli_query($connection, $query);

            if($run) {
                while($row = mysqli_fetch_array($run)) {
                    ?>
                        <tr>
                            <td>1</td>
                            <td><?php echo $row['LCID']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Address']; ?></td>
                            <td><?php echo $row['JoinedDate']; ?></td>
                            <td><?php echo $row['Password']; ?></td>
                            <td><a href="delete.php?lcid=<?php echo $row['LCID'] ?>">Delete</a></td>
                            <td><a href="update.php?lcid=<?php echo $row['LCID'] ?>">Update</a></td>
                        </tr>
                    <?php
                }
            }
        ?>
    </table>
</body>
</html>