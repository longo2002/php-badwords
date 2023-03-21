<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Censura</title>
</head>

<body>

  <form action="./censura.php" method="GET">
    <input require type="text" name="parola" placeholder="Scrivi una parola da censurare">
    <textarea required name="paragrafo" cols="10" rows="5" placeholder="Incolla il testo da censurare"></textarea>
    <input type="submit" value="Invia">
  </form>

</body>

</html>