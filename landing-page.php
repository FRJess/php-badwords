<?php


if(isset($_POST['paragrafo'])){
  $text = $_POST['paragrafo'];
} else {
  $text = '';
};

if(isset($_POST['badword'])){
  $badword = $_POST ['badword'];
} else {
  $badword = '';
};


if(isset($_POST['badword'])){
  $text_censored = str_replace($_POST['badword'], '***', $_POST['paragrafo']);
} else{
  $text_censored = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- BOOTSTRAP -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>
  <title>Landing page</title>
</head>

<body>
  <div class="container my-5">

    <h1> Badword</h1>
    <p><?php echo $badword ?></p>

    <h2>Paragrafo originale</h2>
    <p><?php echo $text ?></p>
  
    <h2>Paragrafo modificato</h2>
    <p><?php echo $text_censored; ?></p>

    <h2>Lunghezza</h2>
    <p>Il tuo testo lungo <?php echo strlen($text)?> caratteri</p></br>

  </div>


</body>
</html>