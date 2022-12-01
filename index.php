<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- BOOTSTRAP -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>
  <title>Badwords</title>
</head>

<!-- Inizio Body -->

<body>
  <div class="container my-5">

    <form action="./landing-page.php" method="POST">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Testo</label>
        <textarea class="form-control" name="paragrafo" rows="3" ></textarea><br>
        <label for="exampleFormControlTextArea1" class="form-label">Parola da censurare</label>
        <input type="text" class="form-control" name="badword"></input><br>
      </div>

      <div class="mb-3">
        <button class="btn btn-dark" type="submit">invia</button>
      </div>

    </form>

  </div>


</body>
<!-- Fine Body -->

</html>