<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "geniusparkle";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    // collect data
    $email = $_POST["email"];
    $pass = md5($_POST["password"]);

    // "SELECT * FROM `users` WHERE `email` = 'admin@gmail.com' AND `pass` = 'abf8d0d42ca87b36a685f2e638de473f' LIMIT 1";
    $sql = "SELECT * FROM `users` WHERE `email` = '{$email}' AND `pass` = '{$pass}' LIMIT 1";

    if ($result = mysqli_query($conn, $sql)) {
        if(mysqli_num_rows($result) == 1){
            session_start();
            while($row = $result->fetch_assoc()) {
                var_dump($row);
                $_SESSION["id"] = $row["id"];
                $_SESSION["name"] = $row["name"];
                $_SESSION["email"] = $row["email"];
              }
              setcookie("login_error", "", time()+3600, "/","", 0);
            header("Location: http://localhost/geniusparkle/dashboard.php");
        } else {
            setcookie("login_error", "User id or password combination does not match", time()+3600, "/","", 0);
            header("Location: http://localhost/geniusparkle/Sign-In.php");
          }
    } else {        
      echo "Error: " . $sql . "<br>" . $conn->error;
      echo "Error login your Account!";
    }
}



$conn->close();
?>