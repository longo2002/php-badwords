<?php


$data = $_GET;


$paragrafo = isset($_GET['paragrafo']) ? $_GET['paragrafo'] : '';;
$parola = $_GET['parola'] ?? '';

$paragrafo_censurato = str_replace($parola, '***', $paragrafo);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Censura</title>
</head>

<body>

  <?php
  if (strlen($paragrafo) > 0) {
  ?>
    <div>
      <p>
        <?php echo $paragrafo; ?>
      </p>
      <p>
        Il paragrafo originale è di: <strong> <?php echo strlen($paragrafo); ?></strong> parole!
      </p>
    </div>
  <?php
  } else {

    echo 'Niente censura';
  }



  if (strlen($parola) > 0) {
  ?>
    <div>
      <p>
        <?php echo $paragrafo_censurato; ?>
      </p>
      <p>
        <strong> <?php echo 'Il paragrafo censurato è di: ' . strlen($paragrafo_censurato) . ' parole!' ?></strong> 
      </p>
    </div>
  <?php
  } else {
  ?>
    <p>Niente censura.</p>
  <?php
  }

  ?>
</body>

</html>