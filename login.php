<?php
session_start();

include ("connection.php");
include ("functions.php");

if($_SERVER['REQUEST_METHOD'] == 'POST') //checks the request method is POST or not
{
    $user_name = $_POST['user_name']; 
    $password  = md5($_POST['password']);  

    if(!empty($user_name)  && !empty($password) && !is_numeric($user_name))
    {
        
        $query="select * from users WHERE user_name = '$user_name' limit 1"; 
        $result=mysqli_query($con,$query);
        
        if ($result){
            if ($result && mysqli_num_rows($result)>0)
            {
                $user_data = mysqli_fetch_assoc($result);
                if ($user_data['password']==$password)
                {   //login successful
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
        }

       echo "Wrong username or password! Please try again.";

    }else{
        echo "Please enter valid details";
    }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    
    <div class="container">
        <form action="" method="post"  class="signup-form">
            <h2 style="text-align:center">Login Form</h2>
            <label for="username">Username: </label><br />
            <input type="text" name="user_name" ><br>
            <label for="password">Password: </label><br />
            <input type="password" name="password"> <br>
            <input type="submit" name="submit" value="Login" class="submitBtn"><br>

           <p class= "signup-link">Don't have an account? <a href="signup.php" style="text-decoration:none"><b> Signup</a><br></p>
        </form>
    </div>

</body>
</html>