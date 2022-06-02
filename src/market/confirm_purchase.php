<?php
session_start();

if (isset($_POST['confirm_purchase'])) {


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

  // get the values from the form post
  $item_id = $_POST['item_id'];
  $qty_purchased = $_POST['qty_purchased'];



  // print these
  // echo $item_id;
  // echo $qty_purchased;


  //  use the nb_shop db
  if ($conn->select_db('nb_shop') === TRUE) {

    // get the current qty of the item basing on its id
    $sql_qty = "SELECT item_qty FROM nb_shop.market WHERE market.item_id = '$item_id';";
    $result = $conn->query($sql_qty);

    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        $db_item_qty = $row["item_qty"];
      }

      if ($db_item_qty >= $qty_purchased) {

        // get new qty
        $new_item_qty = $db_item_qty - $qty_purchased;

        // print new qty
        // echo $new_item_qty;

        // update the item qty
        $sql_update = "UPDATE nb_shop.market SET market.item_qty =  '$new_item_qty' WHERE market.item_id = '$item_id';";


        if ($conn->query($sql_update) === TRUE) {
          // echo "Record updated successfully";

          // go to buy_now and set a session variable purchased
          $_SESSION['purchased'] = "purchased";
          header("Location: buy_now.php?item_id=$item_id");
          exit();
        } else {
          echo "Error updating record: " . $conn->error;
        }
      } else {
        // echo "Not enough items in stock";
        $_SESSION['out_of_stock'] = "out_of_stock";
        header("Location: buy_now.php?item_id=$item_id");
        exit();
      }
    }
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
