<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Title -->
  <title>Forgot Password? </title>

  <!-- CSS -->
  <link href="../../css/the_notice_board.css" rel="stylesheet" />
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

          <h2 class="mt-8 text-center text-4xl font-extrabold text-white">
            We are sorry, you forgot your password
          </h2>
          <p class="mt-4 text-center text-lg text-white/60">
            However, this ain't the end of your amazing Notice Board Journey.
            <span class="
                    font-medium
                    text-amber-300
                    transition-all
                    duration-300
                  ">
              Enter your email below, and we'll send you details on how to reset your password.
            </span>
          </p>
        </div>
        <form class="mt-8 space-y-6" action="forgot_action.php" method="POST">
          <input type="hidden" name="remember" value="true" />
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
                      rounded-b-md
                      focus:outline-none
                      focus:ring-amber-500
                      focus:border-amber-500
                      focus:z-10
                      sm:text-sm
                    " placeholder="Email address" />
            </div>

          </div>



          <div>
            <button type="submit" name="forgot_btn" class="
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
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send">
                  <path d="M22 10 L19 14 M20 10 L14 14 M22 6 L19 10 M20 6 L14 10" />

                </svg>
              </span>
              Send Email
            </button>
          </div>
        </form>
      </div>
    </main>

    <!-- Footer -->
    <?php require_once 'footer.php' ?>

  </section>
</body>

</html>