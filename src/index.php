<?php
require_once './db/db_init.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Title -->
  <title>The Notice Board Splash Screen</title>

  <!-- CSS -->
  <link href="../css/the_notice_board.css" rel="stylesheet" />

  <!-- JS -->
  <script src="notice_board.js"></script>


</head>

<body class="bg-slate-900" onload="goToHome()">
  <!-- Logo and Name -->
  <div class="flex flex-col space-y-4 items-center justify-center h-screen">
    <!-- logo -->
    <div>
      <svg class="w-20 h-20 fill-white m-auto" width="24" height="24" viewBox="0 0 24 24">
        <path d="M17 11c0 .551-.448 1-1 1s-1-.449-1-1 .448-1 1-1 1 .449 1 1zm7-6v14c0 2.761-2.238 5-5 5h-14c-2.761 0-5-2.239-5-5v-14c0-2.761 2.239-5 5-5h14c2.762 0 5 2.239 5 5zm-9 1.101c.323-.066.657-.101 1-.101s.677.035 1 .101v-2.101c0-.552-.447-1-1-1s-1 .448-1 1v2.101zm-8 2c.323-.066.657-.101 1-.101s.677.035 1 .101v-4.101c0-.552-.447-1-1-1s-1 .448-1 1v4.101zm2 9.798c-.323.066-.657.101-1 .101s-.677-.035-1-.101v2.101c0 .552.447 1 1 1s1-.448 1-1v-2.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3zm6 2.899c-.323.066-.657.101-1 .101s-.677-.035-1-.101v4.101c0 .552.447 1 1 1s1-.448 1-1v-4.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3z" />
      </svg>

      <h1 class="text-white text-5xl mt-4 font-extrabold tracking-tight">
        The Notice
        <span class="text-amber-300">Board</span>
      </h1>
    </div>

    <!-- name -->
    <div class="text-white/80 text-center space-y-4">

      <div>
        <p class="italic text-xl">by</p>

        <h2 class="underline font-bold text-xl">
          Mugisa Brian -
          <span class="text-amber-300 underline">20/U/7823/PS</span> -
          2000707823
        </h2>
      </div>
    </div>
  </div>
</body>

</html>