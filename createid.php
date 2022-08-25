<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>So you are a new student.Please fill in the provided form.</h1>
    <form action="./success.php" method="post">
        <label for="LCID">LCID</label><br>
        <input type="text" name="LCID" id="LCID"><br>
        <label for="fname">FullName</label><br>
        <input type="text" name="fname" id="fname"><br>
        <label for="address">Address</label><br>
        <input type="text" name="address" id="address"><br>
        <label for="joinedDate">Joined Date</label><br>
        <input type="date" name="joinedDate" id="joinedDate"><br>
        <label for="password">Create Password</label><br>
        <input type="password" name="password" id="password"><br>
        <label for="cpassword">Confirm Password</label><br>
        <input type="password" name="cpassword" id="cpassword"><br>
        <input type="submit" name="submit">
    </form>
</body>

</html>