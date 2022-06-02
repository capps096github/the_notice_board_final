<?php

// Start the session
session_start();

// connect to the database, and then add students marks to the results table
// check if the terms checkbox is checked
if (isset($_POST['add_item']) && isset($_POST['agree'])) {


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
  $add_name = $conn->real_escape_string($_POST['add_name']);
  $add_cost = $conn->real_escape_string($_POST['add_cost']);
  $add_qty = $conn->real_escape_string($_POST['add_qty']);


  //  use the nb_shop db
  if ($conn->select_db('nb_shop') === TRUE) {
    // echo "Database selected";

    // insert the new item into the market table
    $sql = "INSERT INTO nb_shop.market (item_name, item_price, item_qty) VALUES ('$add_name', '$add_cost', '$add_qty')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";

      // set session for the item added
      $_SESSION['item_added'] = $add_name;

      header("Location: add_item.php");
      exit();
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  } else {
    echo "Database not selected";
  }
} else {

  // echo "Please check the terms and conditions";
   $_SESSION['terms_error'] = "Please check the terms and conditions";
  header("Location: add_item.php");
  exit();
}
