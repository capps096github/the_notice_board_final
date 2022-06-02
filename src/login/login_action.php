<?php
// Start the session
session_start();


if (isset($_POST['login_btn'])) {

  // sql
  $servername = "localhost";
  $username = "root";
  $password = "";


  // Create connection
  $conn = new mysqli($servername, $username, $password);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  // prevent SQL injection
  $email = $conn->real_escape_string($_POST['email']);
  $login_password = $conn->real_escape_string($_POST['login_password']);


  //  use the nb_shop db
  if ($conn->select_db('nb_shop') === TRUE) {
    // echo "Database selected";

    // check if a user with the email and password exists
    $sql = "SELECT * FROM nb_shop.users WHERE users.email = '$email' AND users.passwordx = '$login_password';";


    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        $db_username = $row["username"];
        $db_email = $row["email"];
        $db_password = $row["passwordx"];
      }
    } else {
      echo "Create an account first";
      // redirect to the login page
      // require 'login.php';
      header("Location: login.php");
    }

    // check if the student number and password matches
    if ($email == $db_email && $login_password == $db_password) {
      // echo "Login Successful";

      // set the session variables
      $_SESSION['username'] = $db_username;
      $_SESSION['email'] = $db_email;

      // go to Marketplace
      header("Location: ../market/market_place.php");

      exit();
    } else {
      echo "Login Failed";

      // redirect to the login page
      header("Location: login.php");
    }


    $conn->close();
  } else {
    echo "Database not found";


    // redirect to the register page
    header("Location: ../register/register.php");
  }
}
