

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>poo 08</title>
</head>
<body>
  <form action="./index.php" method="post">
    <input type="date" name="date">
    <button type="submit">Envoyer</button>
  </form>
  <?php
  if(isset($_POST['date'])){
    $dt1 = new DateTime($_POST['date']);
    $dt = new DateTime('now', new DateTimeZone('Europe/Paris'));
    $di = $dt1->diff($dt);
    echo "<p>Vous avez: " . $di->format(' %y ') . " ans</p>";
  }
  ?>
</body>
</html>
