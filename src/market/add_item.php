<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location: ../login/login.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Title -->
  <title>Add Item to the Marketplace</title>

  <!-- CSS -->
  <link href="../../css/the_notice_board.css" rel="stylesheet" />
</head>

<body class="bg-amber-200">



  <section class="flex flex-col h-screen justify-between">

    <!-- Nav Bar -->
    <nav class="
          md:flex md:justify-between
          lg:flex lg:justify-between
          md:px-4
          px-2
          py-5
          fixed
          top-0
          left-0
          right-0
          bg-blue-900
        ">
      <a href="market_place.php" class="
            duration-300
            transition-colors
            flex
            md:justify-start
            lg:justify-start
            justify-center
            items-center
            space-x-2
            text-white
            hover:text-amber-300 hover:no-underline
          ">
        <svg width="24" height="24" viewBox="0 0 24 24" class="fill-current w-5 h-5">
          <path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z" />
        </svg>

        <p class="text-sm font-bold">Back to Marketplace</p>
      </a>

      <!-- Logo -->
      <a href="" class="space-x-2 flex justify-center items-center mt-4 md:mt-0" title="THE NOTICE BOARD">
        <div class="
              flex
              text-amber-300
              font-bold
              hover:text-white hover:underline
              items-center
              space-x-2
              duration-300
              transition-colors
            ">
          <svg class="fill-current w-10 h-10" width="24" height="24" viewBox="0 0 24 24">
            <path d="M17 11c0 .551-.448 1-1 1s-1-.449-1-1 .448-1 1-1 1 .449 1 1zm7-6v14c0 2.761-2.238 5-5 5h-14c-2.761 0-5-2.239-5-5v-14c0-2.761 2.239-5 5-5h14c2.762 0 5 2.239 5 5zm-9 1.101c.323-.066.657-.101 1-.101s.677.035 1 .101v-2.101c0-.552-.447-1-1-1s-1 .448-1 1v2.101zm-8 2c.323-.066.657-.101 1-.101s.677.035 1 .101v-4.101c0-.552-.447-1-1-1s-1 .448-1 1v4.101zm2 9.798c-.323.066-.657.101-1 .101s-.677-.035-1-.101v2.101c0 .552.447 1 1 1s1-.448 1-1v-2.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3zm6 2.899c-.323.066-.657.101-1 .101s-.677-.035-1-.101v4.101c0 .552.447 1 1 1s1-.448 1-1v-4.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3z" />
          </svg>

          <p class="">Add Item to The Notice Board</p>
        </div>
      </a>

      <!-- User Info -->
      <p class="text-white font-bold text-sm items-center flex justify-center  text-center">
        <?php
        echo "(" . $_SESSION["username"] . "  -  " . $_SESSION["email"] . ")";
        ?>

      </p>
    </nav>

    <main class="md:mt-20 lg:mt-20 mt-60 p-4 space-y-4 max-w-5xl mx-auto">

      <div>

        <?php

        // check if  $_SESSION['item_added'] is set
        if (isset($_SESSION['item_added'])) {

          echo '<a href="../home.php" class="text-slate-900 " title="The Notice Board">
          <div class="justify-center items-center text-center flex flex-col">
            <svg class="w-20 h-20 fill-current m-auto" width="24" height="24" viewBox="0 0 24 24">
              <path d="M17 11c0 .551-.448 1-1 1s-1-.449-1-1 .448-1 1-1 1 .449 1 1zm7-6v14c0 2.761-2.238 5-5 5h-14c-2.761 0-5-2.239-5-5v-14c0-2.761 2.239-5 5-5h14c2.762 0 5 2.239 5 5zm-9 1.101c.323-.066.657-.101 1-.101s.677.035 1 .101v-2.101c0-.552-.447-1-1-1s-1 .448-1 1v2.101zm-8 2c.323-.066.657-.101 1-.101s.677.035 1 .101v-4.101c0-.552-.447-1-1-1s-1 .448-1 1v4.101zm2 9.798c-.323.066-.657.101-1 .101s-.677-.035-1-.101v2.101c0 .552.447 1 1 1s1-.448 1-1v-2.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3zm6 2.899c-.323.066-.657.101-1 .101s-.677-.035-1-.101v4.101c0 .552.447 1 1 1s1-.448 1-1v-4.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3z" />
            </svg>

            <h1 class=" text-5xl mt-4 font-extrabold tracking-tight">
            <strong>Item Added Successfully!</strong> to The Notice Board
            </h1>

            <p class="text-lg font-semibold tracking-tight">
            It\'s now time to make some cash... Feel free to add another Item for sale too
            </p>

          </div>

        </a>';
          unset($_SESSION['item_added']);
        } elseif (isset($_SESSION['terms_error'])) {

          echo '<a href="../home.php" class="text-red-900 " title="The Notice Board">
          <div class="justify-center items-center text-center flex flex-col">
            <svg class="w-20 h-20 fill-current m-auto" width="24" height="24" viewBox="0 0 24 24">
              <path d="M17 11c0 .551-.448 1-1 1s-1-.449-1-1 .448-1 1-1 1 .449 1 1zm7-6v14c0 2.761-2.238 5-5 5h-14c-2.761 0-5-2.239-5-5v-14c0-2.761 2.239-5 5-5h14c2.762 0 5 2.239 5 5zm-9 1.101c.323-.066.657-.101 1-.101s.677.035 1 .101v-2.101c0-.552-.447-1-1-1s-1 .448-1 1v2.101zm-8 2c.323-.066.657-.101 1-.101s.677.035 1 .101v-4.101c0-.552-.447-1-1-1s-1 .448-1 1v4.101zm2 9.798c-.323.066-.657.101-1 .101s-.677-.035-1-.101v2.101c0 .552.447 1 1 1s1-.448 1-1v-2.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3zm6 2.899c-.323.066-.657.101-1 .101s-.677-.035-1-.101v4.101c0 .552.447 1 1 1s1-.448 1-1v-4.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3z" />
            </svg>

            <h1 class=" text-5xl mt-4 font-extrabold tracking-tight">
            <strong>Please check the terms and conditions</strong> of The Notice Board
            </h1>
          </div>
        </a>';
          unset($_SESSION['terms_error']);
        } else {

          echo '<!-- logo -->
        <a href="../home.php" class="text-blue-900 " title="The Notice Board">
          <div class="justify-center items-center flex flex-col">
            <svg class="w-20 h-20 fill-current m-auto" width="24" height="24" viewBox="0 0 24 24">
              <path d="M17 11c0 .551-.448 1-1 1s-1-.449-1-1 .448-1 1-1 1 .449 1 1zm7-6v14c0 2.761-2.238 5-5 5h-14c-2.761 0-5-2.239-5-5v-14c0-2.761 2.239-5 5-5h14c2.762 0 5 2.239 5 5zm-9 1.101c.323-.066.657-.101 1-.101s.677.035 1 .101v-2.101c0-.552-.447-1-1-1s-1 .448-1 1v2.101zm-8 2c.323-.066.657-.101 1-.101s.677.035 1 .101v-4.101c0-.552-.447-1-1-1s-1 .448-1 1v4.101zm2 9.798c-.323.066-.657.101-1 .101s-.677-.035-1-.101v2.101c0 .552.447 1 1 1s1-.448 1-1v-2.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3zm6 2.899c-.323.066-.657.101-1 .101s-.677-.035-1-.101v4.101c0 .552.447 1 1 1s1-.448 1-1v-4.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3z" />
            </svg>

            <h1 class=" text-5xl mt-4 font-extrabold tracking-tight">
              The Notice
              <span>Board</span>
            </h1>
          </div>

        </a>';
        }

        ?>

        <h2 class="mt-10 text-center text-4xl font-extrabold text-slate-900">
          Add an Item for sale
        </h2>



        <p class="mt-4 text-center text-sm font-bold text-amber-600">
          All * fields are required
        </p>
      </div>

      <form action="new_item.php" method="post">
        <!-- Name -->
        <div>
          <label for="name" class="block text-sm font-bold text-blue-700">Item Name *</label>
          <div class="mt-1 relative rounded-md shadow-sm">

            <input type="text" name="add_name" id="name" class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-4 pr-12 sm:text-sm border-slate-800
              rounded-md" placeholder="Shirt">

          </div>
        </div>


        <!-- Cost -->
        <div>
          <label for="cost" class="block text-sm font-bold text-blue-700">Cost *</label>
          <div class="mt-1 relative rounded-md shadow-sm">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
              <span class="text-slate-500 sm:text-sm ">
                $
              </span>
            </div>
            <input type="text" name="add_cost" id="cost" class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-7 pr-12 sm:text-sm border-slate-800
              rounded-md" placeholder="0.00">

          </div>
        </div>

        <!-- Quantity -->
        <div>


          <label for="qty" class="block text-sm font-bold text-blue-700">Quantity *</label>
          <div class="mt-1 relative rounded-md shadow-sm">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none mr-6">
              <span class="text-slate-500 sm:text-sm">
                Qty:
              </span>
            </div>
            <input type="text" name="add_qty" id="qty" class="focus:ring-blue-500  focus:border-blue-500 block w-full pl-12 pr-12 sm:text-sm border-slate-800 rounded-md" placeholder="5">

          </div>
        </div>

        <div class="flex items-center m-4">
          <input id="agree" name="agree" type="checkbox" class="
                      h-4
                      w-4
                      text-slate-900
                      focus:ring-slate-900
                      border-slate-300
                      rounded
                    " />
          <label for="agree" class="ml-2 font-bold block text-sm text-slate-900">
            By continuing I agree to The Notice Board <a href="" class="text-blue-900 hover:text-blue-600">Terms of
              Service</a> and <a href="" class="text-blue-900 hover:text-blue-600">Privacy Policy</a>.
            I also approve that the Item am adding to The Notice Board Exists and is Available for sale.
          </label>
        </div>

        <!-- Add Item Button -->
        <div class="mt-6">
          <button type="submit" name="add_item" class="w-full  bg-blue-900  text-white font-bold py-2 px-4 rounded-md">
            Add Item
          </button>
        </div>
      </form>
    </main>

    <!-- Footer -->

    <footer class="
          w-full
          bg-blue-900
          max-w-container
          mx-auto
          py-4
          text-center
          space-y-2
          items-center
          justify-center
          text-sm text-amber-600 font-bold
        ">
      <p>&copy; 2021 The Notice Board - Online Shop</p>

      <div class="flex items-center text-amber-300   justify-center text-center mt-2">
        <p class="mr-3 border-r border-gray-200 pr-3">
          Mugisa Brian - 20/U/7823/PS - 2000707823
        </p>
        <p>All rights reserved.</p>
      </div>

      <p>
        <a class="hover:text-gray-300 hover:underline" href="https://twitter.com/xephas_official" title="Follow Me on Twitter @xephas_official">Follow me on Twitter</a>
      </p>
    </footer>

  </section>


</body>

</html>