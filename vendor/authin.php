<?php

  session_start();
  require_once 'connect.php';

  $login = $_POST['login'];
  $password = $_POST['password'];

  // შეკითხვა მონაცემთა ბაზასთან
  $check_user = mysqli_query($link, "SELECT * FROM users WHERE login='$login' AND password='$password'");
  if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = [
      "id" => $user['id'],
      "login" => $user['login'],
      "date_birth" => $user['date_birth'],
      "email" => $user['email']
    ];

    header('Location: ../main_profile.php');

  } else {
    $_SESSION['message'] = 'Incorrect login and password';
    header('Location: ../auth.php');
  }

  // require_once 'connect.php';
  // $check_user = mysqli_query($link, "SELECT * FROM users");
  // echo mysqli_num_rows($check_user); // ამ ეტაპზე მონაცემთა ბაზაში შევსებულია 3 სტრიქონი, რაც გამოდის ეკრანზე echo-თი

?>
