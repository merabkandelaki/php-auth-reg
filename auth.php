<?php
  session_start();
  if ($_SESSION['user']) {
    header('Location: main_profile.php');
  }
?>

<!doctype html>
<html lang="en">

<?php require_once 'head.php' ?>

<body>

  <form action="vendor/authin.php" method="post">

    <label>login</label>
    <input type="text" name="login" placeholder="enter the login">
    <label>password</label>
    <input type="password" name="password" placeholder="enter the password">
    <button type="submit">sign in</button>
    <p>
      you do not have an account? - <a href="registration.php">register</a>!
    </p>
    <?php
      if ($_SESSION['message']) {
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
      }
      unset($_SESSION['message']); // unset ემსახურება მესიჯის გაქრობას
    ?>

  </form>

</body>
</html>
