<?php

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
$sql_db = "CREATE DATABASE IF NOT EXISTS nb_shop;";

// create users table
$sql_users = "CREATE TABLE IF NOT EXISTS nb_shop.users (
                      `user_id` int(8) NOT NULL AUTO_INCREMENT ,
                      `username` VARCHAR(30) NOT NULL,
                      `email` VARCHAR(30) NOT NULL,
                      `passwordx` VARCHAR(30) NOT NULL,
                      PRIMARY KEY (`user_id`)
                      );";


// create market table
$sql_market = "CREATE TABLE IF NOT EXISTS nb_shop.market (
                      `item_id` int(8) NOT NULL AUTO_INCREMENT,
                      `item_name` VARCHAR(30) NOT NULL,
                      `item_qty` VARCHAR(30) NOT NULL,
                      `item_price` INT(10) NOT NULL,
                      PRIMARY KEY (`item_id`)
                      );";



// insert items into market table items can be fri=uits, bags,machijnes, etc
$sql_market_items = "INSERT INTO nb_shop.market (item_name, item_qty,  item_price)
                      VALUES ('Apple','10','10'),
                             ('Orange','10','10'),
                             ('Banana','10','10'),
                             ('Cherry','10','10'),
                             ('Grape','10','10'),
                             ('Strawberry','10','10'),
                             ('Watermelon','10','10'),
                             ('Pineapple','10','10'),
                             ('Pear','10','10'),
                             ('Peach','10','10'),
                             ('Mango','10','10'),
                          ('Toyota','10','200'),
                          ('Honda','10','200'),
                          ('Nissan','10','200'),
                          ('Audi','10','200'),
                          ('BMW','10','200'),
                          ('Mercedes','10','200'),
                          ('Volkswagen','10','200'),
                          ('Ferrari','10','200'),
                          ('Lamborghini','10','200'),
                          ('Porsche','10','200'),
                          ('Bugatti','10','200'),
                          ('Rolls Royce','10','200'),
                          ('Bentley','10','200'),
                          ('Aston Martin','10','200'),
                          ('Jaguar','10','200'),
                          ('Lamborghini','10','200'),
                          ('Porsche','10','200'),
                           ('Rolls Royce','10','200'),
                          ('Bentley','10','200'),
                          ('Aston Martin','10','200');";






// check db
if ($conn->query($sql_db) === TRUE) {

  //  use the nb_shop db
  $conn->select_db('nb_shop');

  //  create tables

  // users table
  if ($conn->query($sql_users) === TRUE) {
    // echo "Users table created successfully";
  } else {
    // echo "Error creating users table: " . $conn->error;
  }


  // market table
  if ($conn->query($sql_market) === TRUE) {
    // echo "Market table created successfully";
  } else {
    // echo "Error creating market table: " . $conn->error;
  }




  // insert items into market table
  if ($conn->query($sql_market_items) === TRUE) {
    // echo "Market items inserted successfully";
  } else {
    // echo "Error inserting market items: " . $conn->error;
  }



  //  close connection
  $conn->close();
} else {
  echo "Error creating database: " . $conn->error;
}
