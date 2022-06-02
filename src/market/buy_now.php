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
  <title>Buy Now | The Notice Board</title>

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
          bg-slate-900
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

          <p class="">The Notice Board Cart</p>
        </div>
      </a>

      <div></div>
    </nav>

    <main class="md:mt-20 lg:mt-20 sm:mt-60 p-4 space-y-4  max-w-4xl mx-auto">

      <!-- logo -->
      <?php


      // check wther out_of_stock session is set or not
      if (isset($_SESSION["out_of_stock"])) {
        echo '<div class="justify-center text-center text-red-900 items-center flex flex-col">
        <svg class="w-20 h-20 fill-current m-auto" width="24" height="24" viewBox="0 0 24 24">
          <path d="M17 11c0 .551-.448 1-1 1s-1-.449-1-1 .448-1 1-1 1 .449 1 1zm7-6v14c0 2.761-2.238 5-5 5h-14c-2.761 0-5-2.239-5-5v-14c0-2.761 2.239-5 5-5h14c2.762 0 5 2.239 5 5zm-9 1.101c.323-.066.657-.101 1-.101s.677.035 1 .101v-2.101c0-.552-.447-1-1-1s-1 .448-1 1v2.101zm-8 2c.323-.066.657-.101 1-.101s.677.035 1 .101v-4.101c0-.552-.447-1-1-1s-1 .448-1 1v4.101zm2 9.798c-.323.066-.657.101-1 .101s-.677-.035-1-.101v2.101c0 .552.447 1 1 1s1-.448 1-1v-2.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3zm6 2.899c-.323.066-.657.101-1 .101s-.677-.035-1-.101v4.101c0 .552.447 1 1 1s1-.448 1-1v-4.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3z" />
        </svg>

        <!-- check if item has been purchased, then show item purchased -->
        <h1 class=" text-5xl mt-4 font-extrabold tracking-tight">
          Sorry, you can\'t buy more than what we have in stock.
        </h1>
        <p class="text-2xl font-semibold">
          Your can still purchase more items from the Marketplace or this same page
        </p>
      </div>';
        unset($_SESSION['out_of_stock']);
      }

      // check if session  $_SESSION['purchased'] is set then echo the message else echo nothing
      elseif (isset($_SESSION['purchased'])) {
        echo '<div class="justify-center text-center text-blue-700 items-center flex flex-col">
        <svg class="w-20 h-20 fill-current m-auto" width="24" height="24" viewBox="0 0 24 24">
          <path d="M17 11c0 .551-.448 1-1 1s-1-.449-1-1 .448-1 1-1 1 .449 1 1zm7-6v14c0 2.761-2.238 5-5 5h-14c-2.761 0-5-2.239-5-5v-14c0-2.761 2.239-5 5-5h14c2.762 0 5 2.239 5 5zm-9 1.101c.323-.066.657-.101 1-.101s.677.035 1 .101v-2.101c0-.552-.447-1-1-1s-1 .448-1 1v2.101zm-8 2c.323-.066.657-.101 1-.101s.677.035 1 .101v-4.101c0-.552-.447-1-1-1s-1 .448-1 1v4.101zm2 9.798c-.323.066-.657.101-1 .101s-.677-.035-1-.101v2.101c0 .552.447 1 1 1s1-.448 1-1v-2.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3zm6 2.899c-.323.066-.657.101-1 .101s-.677-.035-1-.101v4.101c0 .552.447 1 1 1s1-.448 1-1v-4.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3z" />
        </svg>

        <!-- check if item has been purchased, then show item purchased -->
        <h1 class=" text-5xl mt-4 font-extrabold tracking-tight">
          Thanks for purchasing! from THE NOTICE BOARD
        </h1>
        <p class="text-2xl font-semibold">
          Your can still purchase more items from the Marketplace or this same page
        </p>
      </div>';
        unset($_SESSION['purchased']);
      } else {
        echo '<div class="justify-center text-center text-slate-900 items-center flex flex-col">
        <svg class="w-20 h-20 fill-current m-auto" width="24" height="24" viewBox="0 0 24 24">
          <path d="M17 11c0 .551-.448 1-1 1s-1-.449-1-1 .448-1 1-1 1 .449 1 1zm7-6v14c0 2.761-2.238 5-5 5h-14c-2.761 0-5-2.239-5-5v-14c0-2.761 2.239-5 5-5h14c2.762 0 5 2.239 5 5zm-9 1.101c.323-.066.657-.101 1-.101s.677.035 1 .101v-2.101c0-.552-.447-1-1-1s-1 .448-1 1v2.101zm-8 2c.323-.066.657-.101 1-.101s.677.035 1 .101v-4.101c0-.552-.447-1-1-1s-1 .448-1 1v4.101zm2 9.798c-.323.066-.657.101-1 .101s-.677-.035-1-.101v2.101c0 .552.447 1 1 1s1-.448 1-1v-2.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3zm6 2.899c-.323.066-.657.101-1 .101s-.677-.035-1-.101v4.101c0 .552.447 1 1 1s1-.448 1-1v-4.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3z" />
        </svg>

        <!-- check if item has been purchased, then show item purchased -->
        <h1 class=" text-5xl mt-4 font-extrabold tracking-tight">
          Would you like to
          <u>Purchase</u>
          this item?
        </h1>
      </div>';
      }

      ?>




      <!-- Item 1 -->
      <?php require 'clicked_item.php' ?>


    </main>

    <!-- Footer -->
    <?php require_once '../footer.php' ?>

  </section>
</body>

</html>