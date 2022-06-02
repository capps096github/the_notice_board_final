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
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Title -->
  <title>The Notice Board | Marketplace</title>

  <!-- CSS -->
  <link href="../../css/the_notice_board.css" rel="stylesheet" />


</head>

<body class="bg-amber-200">
  <section class="flex flex-col h-screen">
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
          bg-slate-900
        ">
      <a href="../home.php" class="
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

        <p class="text-sm font-bold">Back to Home</p>
      </a>

      <!-- Logo -->
      <a href="" class="space-x-2 flex justify-center items-center mt-4 md:mt-0" title="THE NOTICE BOARD Marketplace">
        <div class="
              flex
              text-amber-300
              font-bold
              hover:text-white hover:underline
              items-center
              space-x-2
            ">
          <svg class="fill-current w-10 h-10" width="24" height="24" viewBox="0 0 24 24">
            <path d="M17 11c0 .551-.448 1-1 1s-1-.449-1-1 .448-1 1-1 1 .449 1 1zm7-6v14c0 2.761-2.238 5-5 5h-14c-2.761 0-5-2.239-5-5v-14c0-2.761 2.239-5 5-5h14c2.762 0 5 2.239 5 5zm-9 1.101c.323-.066.657-.101 1-.101s.677.035 1 .101v-2.101c0-.552-.447-1-1-1s-1 .448-1 1v2.101zm-8 2c.323-.066.657-.101 1-.101s.677.035 1 .101v-4.101c0-.552-.447-1-1-1s-1 .448-1 1v4.101zm2 9.798c-.323.066-.657.101-1 .101s-.677-.035-1-.101v2.101c0 .552.447 1 1 1s1-.448 1-1v-2.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3zm6 2.899c-.323.066-.657.101-1 .101s-.677-.035-1-.101v4.101c0 .552.447 1 1 1s1-.448 1-1v-4.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3z" />
          </svg>

          <p class="">The Notice Board Marketplace

            <?php

            // get values from the sessions and print them out in signup.php
            echo "(" . $_SESSION['username'] . " - " . $_SESSION['email'] . ")";

            ?>
          </p>
        </div>
      </a>

      <!-- Actions -->
      <div class="space-x-4 flex justify-center items-center mt-4 md:mt-0">
        <!-- Add Item -->
        <a href="add_item.php" class="
              flex
              items-center
              rounded-md
               text-sm
              font-medium
              pl-2
              pr-3
              py-2
              shadow-sm
              text-slate-900 hover:bg-white hover:no-underline
              normal-case
              px-5
              bg-amber-300
              transition-colors
              duration-300
            ">
          <svg width="20" height="20" fill="currentColor" class="mr-2" aria-hidden="true">
            <path d="M10 5a1 1 0 0 1 1 1v3h3a1 1 0 1 1 0 2h-3v3a1 1 0 1 1-2 0v-3H6a1 1 0 1 1 0-2h3V6a1 1 0 0 1 1-1Z" />
          </svg>
          Add an Item
        </a>

        <!-- Log Out -->
        <a href="../logout/logout.php" class="text-orange-600 hover:text-white hover:bg-rose-700 rounded-md font-semibold normal-case px-5 py-2 text-sm bg-transparent transition-all duration-300">
          <span>Log Out</span>
        </a>
      </div>
    </nav>



    <!-- Main -->
    <main class="md:mt-20 lg:mt-20 mt-40 p-4 space-y-4 max-w-8xl mx-auto">
      <!-- div grid -->
      <div class="
            md:grid-cols-3
            lg:grid-cols-4
            sm:grid-cols-2
            grid
            space-y-2 space-x-2
          ">


        <?php
        require_once 'market_items.php';
        ?>


      </div>
    </main>

    <!-- Footer -->
    <?php require_once '../footer.php' ?>

  </section>
</body>

</html>