<?php

if (!isset($_SESSION["userid"])) {
    if (isset($_COOKIE['remember_me'])) {
        $remember_me = $_COOKIE['remember_me'];

        $query = "SELECT * FROM users WHERE remember_me= '$remember_me'";
        $result = mysqli_query($con, $query);
        if ($result == true) {

            $count = mysqli_num_rows($result);
            if($count = 1){
                $row = mysqli_fetch_assoc($result);
                $rememberId = $row['id'];
                $_SESSION["userid"] = $rememberId;
                $_SESSION["message"] = "Welcome back its good to see you";
            }
        }
    } 
}
?>