<?php
include("../connection.php");
include("../functions.php");

$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);
 $rememberMe = mysqli_real_escape_string($con, $_POST['remember_me']);



$query = "SELECT * FROM users WHERE username= '$username'";
$result = mysqli_query($con, $query);
if ($result == true) {

    $count = mysqli_num_rows($result);
    if ($count = 1) {
        $row = mysqli_fetch_assoc($result);

        $hash = $row['password'];
        if (password_verify($password, $hash)) {

            if($rememberMe == true){
                $usernamehash=md5($username);
                setcookie('remember_me', $usernamehash, time() + (86400 * 30), "/"); 
                $query = "UPDATE users SET remember_me='$usernamehash'  WHERE username='$username' ";
                $result = mysqli_query($con, $query);
            }
            $id = $row['id'];
            $_SESSION["userid"] = $id;
            $_SESSION["message"] = "thank you for logging in";
            header("LOCATION: ../index.php");

        } else {
            echo 'password is invalid';
        }
    } else {
        echo "username not found";
    }
}
