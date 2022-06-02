<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="This is an online shop developed by Mugisa Brian, using tailwind css and laravel" />
  <meta name="keywords" content="laravel, blog, sample, website" />

  <!-- Title -->
  <title>The Notice Board | Online Shop by Mugisa Brian</title>

  <!-- CSS -->
  <link href="../css/the_notice_board.css" rel="stylesheet" />
</head>

<body class="bg-amber-200">
  <!-- Section that has space between the items to fill up the whole screen -->

  <!-- Nav Bar -->
  <nav class="
          md:flex md:justify-between
          lg:flex lg:justify-between
          md:px-4
          px-2
          py-5
          sticky
          top-0
          left-0
          right-0
          bg-slate-900
        ">
    <!-- Logo -->
    <a href="index.php" class="space-x-2 flex justify-center items-center mt-4 md:mt-0" title="THE NOTICE BOARD HOME">
      <div class="
              flex
              text-amber-600
              font-bold
              hover:text-white hover:underline
              items-center
              space-x-2
            ">
        <svg class="fill-current w-10 h-10" width="24" height="24" viewBox="0 0 24 24">
          <path d="M17 11c0 .551-.448 1-1 1s-1-.449-1-1 .448-1 1-1 1 .449 1 1zm7-6v14c0 2.761-2.238 5-5 5h-14c-2.761 0-5-2.239-5-5v-14c0-2.761 2.239-5 5-5h14c2.762 0 5 2.239 5 5zm-9 1.101c.323-.066.657-.101 1-.101s.677.035 1 .101v-2.101c0-.552-.447-1-1-1s-1 .448-1 1v2.101zm-8 2c.323-.066.657-.101 1-.101s.677.035 1 .101v-4.101c0-.552-.447-1-1-1s-1 .448-1 1v4.101zm2 9.798c-.323.066-.657.101-1 .101s-.677-.035-1-.101v2.101c0 .552.447 1 1 1s1-.448 1-1v-2.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3zm6 2.899c-.323.066-.657.101-1 .101s-.677-.035-1-.101v4.101c0 .552.447 1 1 1s1-.448 1-1v-4.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3z" />
        </svg>

        <p class="">The Notice Board</p>
      </div>
    </a>

    <!-- Actions -->
    <div class="space-x-2 flex justify-center items-center mt-4 md:mt-0">
      <!-- Marketplace -->
      <a href="market/market_place.php" class="
              text-white
              hover:text-slate-900 hover:bg-amber-300 hover:no-underline
              rounded-full
              font-semibold
              normal-case
              px-5
              py-2
              text-sm
              bg-transparent
              transition-all
              duration-300
            ">
        <i class="fas fa-sign-in-alt"></i>
        <span>Marketplace</span>
      </a>


      <?php
      session_start();
      if (!isset($_SESSION["username"])) {
        // header("Location: ../login/login.php");
        // exit();

        echo '<!-- Login -->
      <a href="login/login.php" class="
              text-white
              hover:text-slate-900 hover:bg-amber-300 hover:no-underline
              rounded-full
              font-semibold
              normal-case
              px-5
              py-2
              text-sm
              bg-transparent
              transition-all
              duration-300
            ">
        <i class="fas fa-sign-in-alt"></i>
        <span>Login</span>
      </a>

      <!-- register -->
      <a href="register/register.php" class="
              text-white
              hover:text-slate-900 hover:bg-amber-300 hover:no-underline
              rounded-full
              font-semibold
              normal-case
              px-5
              py-2
              text-sm
              bg-amber-700
              transition-colors
              duration-300
            ">
        <i class="fas fa-user-plus"></i>
        <span>Get Started</span>
      </a>';
      }

      ?>


    </div>
  </nav>


  <!-- Nav bar -->
  <section class="flex flex-col justify-between h-screen space-y-10">

    <!-- Main Content -->
    <main class="
          mx-auto
          max-w-7xl
          px-4
          sm:mt-12 sm:px-6
          md:mt-16
          lg:mt-20 lg:px-8
          xl:mt-28
        ">
      <div class="sm:text-center text-center items-center transition-transform">
        <!-- Center Logo -->
        <div class="flex justify-center items-center mt-10 mb-10 text-amber-700">

          <!-- icon -->
          <svg class="fill-current w-20 h-20" viewBox="0 0 24 24">
            <path d="M17 11c0 .551-.448 1-1 1s-1-.449-1-1 .448-1 1-1 1 .449 1 1zm7-6v14c0 2.761-2.238 5-5 5h-14c-2.761 0-5-2.239-5-5v-14c0-2.761 2.239-5 5-5h14c2.762 0 5 2.239 5 5zm-9 1.101c.323-.066.657-.101 1-.101s.677.035 1 .101v-2.101c0-.552-.447-1-1-1s-1 .448-1 1v2.101zm-8 2c.323-.066.657-.101 1-.101s.677.035 1 .101v-4.101c0-.552-.447-1-1-1s-1 .448-1 1v4.101zm2 9.798c-.323.066-.657.101-1 .101s-.677-.035-1-.101v2.101c0 .552.447 1 1 1s1-.448 1-1v-2.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3zm6 2.899c-.323.066-.657.101-1 .101s-.677-.035-1-.101v4.101c0 .552.447 1 1 1s1-.448 1-1v-4.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3z" />
          </svg>

        </div>

        <!-- Heading and a little description -->
        <h1 class="
              text-4xl
              tracking-tight
              font-extrabold
              text-slate-900
              sm:text-5xl
              md:text-6xl
            ">
          <span class="block xl:inline">No.1 Online Shop</span>
          <span class="block text-amber-700 xl:inline">Made with you in mind.</span>
        </h1>
        <p class="
              mt-3
              text-base text-slate-700
              sm:mt-5 sm:text-lg 
              md:mt-5 md:text-xl
              lg:mx-0
              text-center
              font-bold
            ">
          Check out the latest products and services from the best vendors.
          Place your order and get the best deals.
        </p>

        <!-- Buttons -->
        <div class="mt-8">
          <!-- Get started button -->
          <a href="register/register.php" class="
                inline-flex
                items-center
                px-5
                py-3
                border border-transparent
                text-base
                leading-6
                font-medium
                rounded-md
                text-white
                bg-amber-700
                hover:bg-amber-600
                focus:outline-none
                transition-colors
                duration-300
                ease-in-out
              ">
            <span class="mr-3">Get Started</span>
            <svg class="h-5 w-5 text-white fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd" />
            </svg>
          </a>

          <!-- Marketplace button -->
          <a href="market/market_place.php" class="
                inline-flex
                items-center
                px-5
                py-3
                border border-transparent
                text-base
                leading-6
                font-medium
                rounded-md
                text-white
                hover:bg-slate-800
                bg-slate-900
                focus:outline-none
                transition-colors
                duration-300
                ease-in-out
              ">
            <span class="mr-3">Visit our Marketplace</span>

            <!-- icon -->
            <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24">
              <path d="M17 11c0 .551-.448 1-1 1s-1-.449-1-1 .448-1 1-1 1 .449 1 1zm7-6v14c0 2.761-2.238 5-5 5h-14c-2.761 0-5-2.239-5-5v-14c0-2.761 2.239-5 5-5h14c2.762 0 5 2.239 5 5zm-9 1.101c.323-.066.657-.101 1-.101s.677.035 1 .101v-2.101c0-.552-.447-1-1-1s-1 .448-1 1v2.101zm-8 2c.323-.066.657-.101 1-.101s.677.035 1 .101v-4.101c0-.552-.447-1-1-1s-1 .448-1 1v4.101zm2 9.798c-.323.066-.657.101-1 .101s-.677-.035-1-.101v2.101c0 .552.447 1 1 1s1-.448 1-1v-2.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3zm6 2.899c-.323.066-.657.101-1 .101s-.677-.035-1-.101v4.101c0 .552.447 1 1 1s1-.448 1-1v-4.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3z" />
            </svg>
          </a>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <?php require_once  'footer.php' ?>

  </section>
</body>

</html>