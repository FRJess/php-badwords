<?php

$text = $_POST['paragrafo'];
$badword = $_POST['badword'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing page</title>
</head>

<body>

  <div>
    Il tuo testo è il seguente: </br>
    <?php echo $text ?>
  </div></br>
  <div>
    La tua parola da censurare è: </br>
    <?php echo $badword ?>
  </div></br>

  <div>
    Il tuo testo è il seguente: </br>
    <?php echo str_replace($badword, '***', $text); ?>
  </div></br>
  <div>
    Il tuo testo lungo: 
    <?php echo strlen($text)?> caratteri
  </div></br>

</body>
</html>