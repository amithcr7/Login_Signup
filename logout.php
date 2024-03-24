<?php

session_start();

if (isset($_SESSION['user_id'])) {  // if user is logged in, redirect to homepage.
   unset($_SESSION['user_id']);
}

header('Location:login.php');
die; // stop any further execution of code after this point.
