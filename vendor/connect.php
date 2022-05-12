<?php

  $host = 'localhost'; // ჰოსტის სახელი MAMP სერვერზე
  $user = 'root'; // მომხმარებლის სახელი MAMP სერვერზე
  $pass = 'root'; // პაროლი MAMP სერვერზე
  $name = 'mydb16'; // მონაცემთა ბაზის სახელი phpMyAdmin-ში
  $link = mysqli_connect($host, $user, $pass, $name); /* ვუკავშირდებით მონაცემთა
  ბაზას, ვიყენებთ რა ჩვენს წვდომას */
  if (!$link) {
  die('Error connect to DataBase'); /* თუ ვერ დავუკავშირდებით მონაცემთა ბაზას,
  ეკრანზე გამოიტანს ამ შეტყობინებას და კოდის მუშაობა შეწყდება */
}

?>
