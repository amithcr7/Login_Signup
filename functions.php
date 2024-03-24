<?php

function check_login($con) // returns true if the user is logged in, false otherwise.
{
    
    if(isset($_SESSION['user_id']))  // returns the user identity if it exists or null if not.
    {
        
        $id = $_SESSION['user_id'];  // return the user identity to be used by other functions.

        $query = "select * from users where user_id = '$id' limit 1"; // returns the query string for the SQL command.

        $result = mysqli_query($con,$query); // returns the result of a query on the database.

		if($result && mysqli_num_rows($result) > 0) // returns the number of rows returned from the last query.
		{

			$user_data = mysqli_fetch_assoc($result); // returns the user data as an associative array.
			return $user_data; // returns the user data as an array.
		}
        
    }

    header("Location: login.php");
    die;
}

function random_num($length) // returns the number of characters specified by parameter length.
{ 
    $text = "";
    if($length < 5){
        $length = 5;
    }

    $len = rand(4,$length); // random number generator between 4 and the value passed through the parameter

    for ($i = 0; $i<$len; $i++) // random number looper between 4 and the value passed through the variable len parameter
    {
        $text .= rand(0,9);
    }
    return $text;
}