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

//  use the nb_shop db
if ($conn->select_db('nb_shop') === TRUE) {

  $item_id = $_GET['item_id'];


  // get the item qty and stauts info from market table in the data base, basing on the id
  $sql = "SELECT * FROM nb_shop.market WHERE market.item_id = '$item_id';";
  $result = $conn->query($sql);

  // check if query was successful and then get qty and status
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $db_item_qty = $row["item_qty"];
      $db_item_name = $row['item_name'];
      $db_item_price = $row['item_price'];
    }
  } else {
    echo "0 results";
  }

  $qty = $db_item_qty;
  $name = $db_item_name;
  $price = $db_item_price;



  echo '
      <article class="
            bg-slate-900
              rounded-lg
              max-w-6xl
              hover:border-slate-900 hover:border hover:border-opacity-40
              border-slate-900 border border-opacity-20
              transition-all
              duration-300
            ">
            
          <div class="m-4 ">
            <!-- Name and Price flex -->
            <div class="text-center justify-center md:justify-between">
              <div class="flex flex-col justify-center space-y-4">
                <h1 class="text-5xl font-extrabold  pb-6
                  border-b border-amber-400 text-amber-300" name="item_name">' . $name . ' </h1>
                <p class="text-3xl font-extrabold text-amber-300 " name="item_price">
                  $' . $price . '
                </p>
              </div>

            </div>

            <!-- status -->
            <div class="text-center justify-center  pb-6
                  border-b border-amber-400 md:justify-between">';

  // status
  if ($db_item_qty > 0) {

    echo '<div class="
                   mx-auto
                    mt-8
                   px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-amber-300 text-slate-900
                  ">
               
                In stock
              </div>';
  } else {
    echo '  <div class="
                   mx-auto
                    mt-2
                   px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-red-300 text-red-900
                  ">
                Out Of stock
              </div>
            </div>';
  }

  // quantity left
  echo ' <h3 class=" mt-8 text-amber-300 text-xl text-center font-extrabold pb-6
                  border-b border-amber-400">
            Quantity Left: ' . $qty . '
          </h3>';

  // status
  if ($db_item_qty > 0) {
    // form with post method and confirm purchase action
    // item_id is hidden but gives us access to the item id
    echo '<form action="confirm_purchase.php" method="post">
                <input type="hidden" name="item_id" value="' . $item_id . '">';

    // get quantity user wants to buy
    echo ' <div class="m-8">
              <label class="block mt-4">
                <span class="block text-sm mb-2 font-bold text-white">Enter Quantity you want to buy below</span>
                <input type="number" name="qty_purchased" id="quantity" value="1" placeholder="Quantity e.g 50, 4, 3"
                  class="text-gray-900 mt-2  w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm shadow-sm placeholder-gray-400 focus:outline-none focus:border-orange-300 focus:ring-1 focus:ring-orange-300"
                  required />
              </label>
            </div>';

    // this is a param to pass to the web link
    // $item_string = "id=" . $item_id;
    // <a href="confirm_purchase.php?' . $item_string . '"   type="submit" class="

    // buy button
    echo '<div class="items-center mt-4  justify-center flex">
              <button name="confirm_purchase"  type="submit" class="
                  mx-auto
                  px-6
                  w-full
                  py-2
                  text-center
                  font-semibold
                  rounded-md
                  transition-colors
                  duration-300
                  hover:bg-green-700
                  hover:text-white
                  text-slate-900 bg-amber-400 
                ">
               Confirm Purchase
              </button>
            </div>';

    // close form
    echo '</form>';
  }
  // close
  echo '
          </div>
        </article>
       ';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
