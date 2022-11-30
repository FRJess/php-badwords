<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Badwords</title>
</head>

<!-- Inizio Body -->

<body>

<form action="./landing-page.php" method="POST">
    <input type="text" name="paragrafo" placeholder="scrivi qui quello che vuoi" /><br>
    <input type="text" name="badword" placeholder="scrivi qui la parola da censurare" /><br>
    <button type="submit">invia</button>
  </form>

</body>
<!-- Fine Body -->

</html>

<!-- Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare -->