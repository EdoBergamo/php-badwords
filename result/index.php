<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Risultato</h1>

  <?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      $paragraph = $_GET['paragraph'];
      $badword = $_GET['badword'];

      echo "<p>Paragrafo Originale: $paragraph</p>";

      $censored = str_ireplace($badword, '***', $paragraph);

      echo "<p>Paragrafo censurato: $censored</p>";
    } else {
      echo "<h1>Request Method not allowed</h1>";
    }
  ?>
</body>
</html>