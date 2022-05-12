<?php
  session_start();
  require_once 'connect.php';
  $login = $_POST['login'];
  $date_birth = $_POST['date_birth'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password_confirm = $_POST['password_confirm'];

  if (!empty($password) and !empty($password_confirm) and !empty($login)) {

    if ($password == $password_confirm) {
      $query = "SELECT * FROM users WHERE login='$login'";
      $user = mysqli_fetch_assoc(mysqli_query($link, $query));
      if (empty($user)) {
        $query = "INSERT INTO users SET login='$login', date_birth='$date_birth', email='$email', password='$password'";
        mysqli_query($link, $query);
        header('Location: ../auth.php');
      }
      else {
        $_SESSION['message'] = 'login is busy';
        header('Location: ../registration.php');
      }
    }
    else {
      $_SESSION['message'] = 'passwords do not match';
      header('Location: ../registration.php');
    }
  }
  else {
    $_SESSION['message'] = 'fields are not filled';
    header('Location: ../registration.php');
  }
?>
