<?php
// Start the session
session_start();


if (isset($_POST['signup_btn'])) {


  // check if the terms checkbox is checked
  if (isset($_POST['terms'])) {

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


    // check if a database called nb_shop exists
    $sql = "CREATE DATABASE IF NOT EXISTS nb_shop";

    if ($conn->query($sql) === TRUE) {
      // echo "Database created successfully";

      // prevent SQL injection
      $username = $conn->real_escape_string($_POST['username']);
      $passwordx = $conn->real_escape_string($_POST['password']);
      $email = $conn->real_escape_string($_POST['email']);


      //  use the nb_shop db
      $conn->select_db('nb_shop');


      // create table if it doesn't exist
      $sql_users = "CREATE TABLE IF NOT EXISTS nb_shop.users (
                      `user_id` int(8) NOT NULL AUTO_INCREMENT ,
                      `username` VARCHAR(30) NOT NULL,
                      `email` VARCHAR(30) NOT NULL,
                      `passwordx` VARCHAR(30) NOT NULL,
                      PRIMARY KEY (`user_id`)
                      );";


      // check if table sql_users exists then insert data
      if ($conn->query($sql_users) === TRUE) {
        // echo "Table students created successfully";

        // insert user in the table
        $sql_insert = "INSERT INTO nb_shop.users (username, email, passwordx)
                      VALUES ('$username', '$email', '$passwordx')";

        if ($conn->query($sql_insert) === TRUE) {
          // echo "New record created successfully";

          // set new session variables from the data in the database i.e username, email
          $_SESSION['username'] = $username;
          $_SESSION['email'] = $email;

          // go to Marketplace
          header("Location: ../market/market_place.php");
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;

          header("Location: signup.php");
        }
        exit();
      } else {
        echo "Error creating table: " . $conn->error;
      }
    } else {
      echo "Error creating database: " . $conn->error;
    }
    $conn->close();
  } else {
    echo "Please agree to the terms and conditions";

    header("Location: register.php");
  }
}
