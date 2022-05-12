<?php
  session_start();
  if (!$_SESSION['user']) {
    header('Location: auth.php');
  }
?>
<!doctype html>
<html lang="en">

<?php require_once 'head.php' ?>

<body>

  <form>
    <h4 style="margin: 10px 0; color: #2596be;">You have been redirected to the profile page</h4>
    <h2 style="margin: 10px 0; color: Tomato;"><?= $_SESSION['user']['login'] ?></h2>
    <a href="#"><?= $_SESSION['user']['email'] ?></a>
    <a href="vendor/out.php" class="logout">logout</a>
  </form>

</body>
</html>
