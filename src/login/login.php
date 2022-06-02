<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Title -->
  <title>Login to The Notice Board</title>

  <!-- CSS -->
  <link href="../../css/the_notice_board.css" rel="stylesheet" />

  <!-- JS -->
  <script src="../notice_board.js"></script>

</head>

<body class="bg-slate-900">
  <section class="flex flex-col justify-between h-screen space-y-10">
    <!-- Main body -->
    <main class="
            min-h-full
            flex
            items-center
            justify-center
            py-12
            px-4
            sm:px-6
            lg:px-8
          ">
      <div class="max-w-2xl w-full space-y-8">
        <div>
          <!-- logo -->
          <a href="../home.php" class="text-amber-300 hover:text-amber-500" title="The Notice Board">
            <div class="justify-center items-center flex flex-col">
              <svg class="w-20 h-20 fill-current m-auto" width="24" height="24" viewBox="0 0 24 24">
                <path d="M17 11c0 .551-.448 1-1 1s-1-.449-1-1 .448-1 1-1 1 .449 1 1zm7-6v14c0 2.761-2.238 5-5 5h-14c-2.761 0-5-2.239-5-5v-14c0-2.761 2.239-5 5-5h14c2.762 0 5 2.239 5 5zm-9 1.101c.323-.066.657-.101 1-.101s.677.035 1 .101v-2.101c0-.552-.447-1-1-1s-1 .448-1 1v2.101zm-8 2c.323-.066.657-.101 1-.101s.677.035 1 .101v-4.101c0-.552-.447-1-1-1s-1 .448-1 1v4.101zm2 9.798c-.323.066-.657.101-1 .101s-.677-.035-1-.101v2.101c0 .552.447 1 1 1s1-.448 1-1v-2.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3zm6 2.899c-.323.066-.657.101-1 .101s-.677-.035-1-.101v4.101c0 .552.447 1 1 1s1-.448 1-1v-4.101zm2-4.899c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3z" />
              </svg>

              <h1 class=" text-5xl mt-4 font-extrabold tracking-tight">
                The Notice
                <span>Board</span>
              </h1>
            </div>

          </a>

          <h2 class="mt-6 text-center text-4xl font-extrabold text-white">
            Sign in to your account
          </h2>

          <p class="mt-4 text-center text-lg text-slate-100/70">
            Don't have an account?
            <a href="../register/register.php" class="
                    font-medium
                    ml-2
                    text-amber-300
                    hover:text-amber-500 hover:underline
                    transition-colors
                    duration-300
                  " title="Sign In to your Account">
              Sign Up instead.
            </a>
          </p>

        </div>
        <form class="mt-8 space-y-6" action="login_action.php" method="POST">
          <div class="rounded-md shadow-sm -space-y-px">
            <div>
              <label for="email-address" class="sr-only">Email address</label>
              <input id="email-address" name="email" type="email" autocomplete="email" required class="
                      appearance-none
                      rounded-none
                      relative
                      block
                      w-full
                      px-3
                      py-2
                      border border-slate-300
                      placeholder-slate-500
                      text-slate-900
                      rounded-t-md
                      focus:outline-none
                      focus:ring-amber-500
                      focus:border-amber-500
                      focus:z-10
                      sm:text-sm
                    " placeholder="Email address" />
            </div>
            <div>
              <label for="password" class="sr-only">Password</label>
              <input id="password" name="login_password" type="password" autocomplete="current-password" required class="
                      appearance-none
                      rounded-none
                      relative
                      block
                      w-full
                      px-3
                      py-2
                      border border-slate-300
                      placeholder-slate-500
                      text-slate-900
                      rounded-b-md
                      focus:outline-none
                      focus:ring-amber-500
                      focus:border-amber-500
                      focus:z-10
                      sm:text-sm
                    " placeholder="Password" />
            </div>
          </div>

          <div class="flex items-center justify-between">


            <!-- show -->
            <div class="flex items-center">
              <input id="show-me" name="show-me" type="checkbox" onclick="togglePassword()" class="h-4 w-4 text-amber-600 focus:ring-amber-500 border-slate-300 rounded" />
              <label for="show-me" class="ml-2 block  text-white">
                Show Password
              </label>
            </div>

            <div>
              <a href="../forgot/forgot.php" class="
                      font-medium
                      text-amber-300
                      hover:text-amber-500 hover:underline
                      transition-colors
                    " title="Forgot Password">
                Forgot your password?
              </a>
            </div>
          </div>



          <!-- sign in -->
          <div class="mt-8">
            <button type="submit" name="login_btn" class="
                    group
                    relative
                    w-full
                    flex
                    justify-center
                    py-2
                    px-4
                    border border-transparent
                    text-sm
                    rounded-md
                    font-bold
                    text-slate-900
                    bg-amber-300
                    hover:bg-amber-500
                    transition-colors
                    duration-300
                  ">
              <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                <svg class="
                        h-5
                        w-5
                        fill-current
                      " viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                </svg>
              </span>
              Sign In
            </button>
          </div>

        </form>
      </div>
    </main>

    <!-- Footer -->
    <?php require_once '../footer.php' ?>

  </section>
</body>

</html>