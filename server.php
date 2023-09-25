<?php

$word = $_GET ["word"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>
  La parola che hai scritto è: <?php echo $word ?>
  </p>
  <p>
    La parola è lunga: <?php  echo strlen($word) ?> lettere
  </p>
  <p>
    Parola censurata: <?php echo str_replace('a','***',$word) ?>
  </p>
</body>
</html> 