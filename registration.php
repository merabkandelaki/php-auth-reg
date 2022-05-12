<?php
  session_start();
?>
<!doctype html>
<html lang="en">

<?php require_once 'head.php' ?>

<body>

  <form action="vendor/respup.php" method="post" enctype="multipart/form-data">

    <label>login</label>
    <input type="text" name="login" placeholder="enter the login">
    <label>date_birth</label>
    <input type="date" name="date_birth" placeholder="enter the date_birth">
    <label>email</label>
    <input type="email" name="email" placeholder="enter the email address">
    <label>password</label>
    <input type="password" name="password" placeholder="enter the password">
    <label>password confirmation</label>
    <input type="password" name="password_confirm" placeholder="confirm the password">
    <button type="submit">sign in</button>
    <p>
      do you already have an account? - <a href="auth.php">make in authorization</a>!
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
