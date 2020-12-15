<!DOCTYPE html>
<html lang="sv">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Är det text eller siffra? </title>
</head>

<body>
    <h2>Är det text eller siffra? Skriv decimaltal med punkt!</h2>

    <form method="post">
      <input type="text" name="text">
      <input type="submit" name="submit" value="Beräkna">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $text = $_POST["text"];

      if (is_numeric($text)) {
        echo "<p>Det är ett tal: {$text}</p>";
      } else {
        echo "<p>Det är text: {$text}</p>";
      }
    }
    ?>
</body>
</html>