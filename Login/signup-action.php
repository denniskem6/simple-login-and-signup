
 <?php
  session_start();

  include("connection.php");
  include("functions.php");


  if ($_SERVER['request_method'] =  "POST")

  // the if is to check if some data was sent to the database
  {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $pass = password_hash($password, PASSWORD_DEFAULT);

    // if the values are not empty we save the data to the database
    $id = random_num(30);
        $usernamehash = md5($username);

    $query = "insert into users(id, name, username, password, remember_me) values ('$id', '$name', '$username', '$pass', '$usernamehash')";
    $result = mysqli_query($con, $query);
    if ($result == true) {
      setcookie('remember_me', $usernamehash, time() + (86400 * 30), "/");
      $_SESSION["userid"] = $id;
      header("LOCATION: ../index.php");
    } else  //header("LOCATION: login.php");s
    {
      echo "please enter the correct data!";
    }
    // die;

  }

  ?>