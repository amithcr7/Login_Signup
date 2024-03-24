<?php

session_start();
 
    include ("connection.php");
    include ("functions.php");

    $user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>

    <!-- CSS only -->
    <style>
        p {
            text-align: center;
            margin-top: 10px;
            }
    </style>
</head>
<body>
    <p class="logout-link"></p><a href="logout.php" style="text-decoration:none" style="text-align:center" ><b>Logout</a>
    <h1 style="text-align:center">Login Successful</h1>

    Hello, <?php echo $user_data['user_name']; ?>

</body>
</html>