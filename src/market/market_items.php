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

  // get a list of all items in the market table sorted by item_id in ascending order
  $sql = "SELECT * FROM nb_shop.market ORDER BY market.item_id ASC";
  $result = $conn->query($sql);

  // check if query was successful 
  if ($result->num_rows > 0) {


    // get the item_name, item_qty,  item_price from the result above using foreach loop
    foreach ($result as $row) {
      $db_item_name = $row["item_name"];
      $db_item_qty = $row["item_qty"];
      $db_item_price = $row["item_price"];
      $db_item_id = $row["item_id"];

      // printf("%s (%s) - %s)\n", $db_item_name, $db_item_qty, $db_item_price);

      echo ' <article class="
            bg-slate-900
              rounded-lg
              max-w-6xl
              hover:border-slate-900 hover:border hover:border-opacity-40
              border-slate-900 border border-opacity-20
              transition-all
              duration-300
            ">
            
          <div class="m-4">
            <!-- Name and Price flex -->
            <div class="text-center justify-center md:justify-between">
              <div class="flex flex-col justify-center space-y-4">
                <h1 class="text-5xl font-extrabold  pb-6
                  border-b border-amber-400 text-amber-300" name="item_name">' . $db_item_name . ' </h1>
                <p class="text-3xl font-extrabold text-amber-300 " name="item_price">
                  $' . $db_item_price . '
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
                <strong name="item_qty">(' . $db_item_qty . ')  ' . '</strong>
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

      // item id used in get
      $item_id = "item_id=" . $db_item_id;


      // buy button
      echo '<div class="items-center mt-4  justify-center flex">
              <a href="buy_now.php?' . $item_id . '"   type="submit" class="
                  mx-auto
                  px-6
                  w-full
                  py-2
                  text-center
                  font-semibold
                  rounded-md
                  text-slate-900 bg-amber-300 hover:bg-amber-400
                  transition-colors
                  duration-300
                ">
                Buy now
              </a>
            </div>

          </div>

        
        </article>';
    }
  } else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    //        No results
    echo '<div class="space-x-2 flex justify-center items-center mt-4 md:mt-0" title="NOIS | Student\'s Dashboard">
    <div class="flex  font-bold text-gray-900 hover:underline items-center space-x-2">
        <svg class="fill-current w-10 h-10" width="24" height="24" viewBox="0 0 24 24">
            <path d="M22.856 6.912c-1.36 5.26-6.115 9.959-12.541 12.443.977 1.273 4.071 3.382 5.837 3.892 4.578-1.691 7.848-6.081 7.848-11.247 0-1.821-.418-3.542-1.144-5.088m-15.224 6.699c.119 1.538.613 2.921 1.355 4.094 6.817-2.445 11.584-7.587 12.474-13.067-.824-1.058-1.818-1.975-2.946-2.706-1.437 6.91-7.647 10.345-10.883 11.679m-2.045-1.045c-1.216-1.41-2.604-2.484-5.347-2.96-.157.774-.24 1.574-.24 2.394 0 6.628 5.372 12 12 12 .496 0 .981-.039 1.461-.097-3.253-1.323-8.032-5.669-7.874-11.337m1.78-1.022c1.209-.534 2.74-1.34 4.222-2.485-2.185-2.84-5.239-4.997-8.252-5.349-1.085 1.133-1.946 2.478-2.522 3.968 3.384.647 5.127 2.152 6.552 3.866m-2.356-9.285c1.969-1.416 4.378-2.259 6.989-2.259 1.647 0 3.216.333 4.645.934-.45 2.861-1.835 5.102-3.537 6.793-2.105-2.675-5.203-4.78-8.097-5.468"/>
        </svg>

        <p class="">' . $_SESSION["username"] . ',' .
      'You have not made any complaints as yet.</p>
    </div>
</div>';
  }
} else {
  echo "Database not selected";
}
