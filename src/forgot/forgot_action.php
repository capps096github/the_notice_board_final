

<?php
// Start the session
session_start();

// forgot_btn email

if (isset($_POST['forgot_btn'])) {

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

  // capture email variablle and username from session and then send an email to the user
  $email = $_POST['email'];

  // get username that matches the email in the users db
  $sql = "SELECT username FROM nb_shop.users WHERE email = '$email'";
  // run query if successful 
  $result = $conn->query($sql);

  // if the result is greater than 0 get username

  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $username = $row['username'];
    }


    // send an email
    $to = $email;
    $subject = "Password Reset";
    $message = "Hello, $username, we are sorry about the loss of your password. Click the link below to reset your password. http://localhost/nb_shop/reset_password.php \n If you haven't requested to reset your passsword, please ignore this email.";

    $headers = "From: noreply@nb_shop.com";

    if (mail(
      $to,
      $subject,
      $message,
      $headers
    )) {
      echo "Email sent successfully";

      // go to home
      header("Location: ../index.php");
    } else {
      echo "Email sending failed";

      // go to home
      header("Location: ../index.php");
    }
  } else {
    echo "0 results";
  }
}
