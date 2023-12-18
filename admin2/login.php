<?php
// Check if the request method is POST
require_once '../connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the email and password values from the request
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Perform any necessary validation or authentication logic here
  // ...
  $sql = "SELECT * FROM Admin_login WHERE Email = '$email' AND Password = '$password'";
  
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    
    $_SESSION['username'] = $email;
    $_SESSION['user_id'] = $password;

    echo '1';
    $_SESSION['is_Login'] = "yes";
  } else {
    echo "0";
  }

}
?>
