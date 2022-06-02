// ?Auto Splash Function
function goToHome() {
  setTimeout(function () {
    location.href = "home.php";
  }, 1000);
}



// THis toggles to show the password
function togglePassword() {
  const passwordField = document.getElementById("password");
  if (passwordField.type === "password") {
    passwordField.type = "text";
  } else {
    passwordField.type = "password";
  }
}

