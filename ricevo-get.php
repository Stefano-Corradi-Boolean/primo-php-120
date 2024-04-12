<?php
// in qusto modo leggiamo i parametri passati in GET
  $nome = $_GET['nome'];
  $cognome = $_GET['cognome'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous'/>

  <title>Primo PHP</title>
</head>
<body>

  <div class="container my-5">
    <h1>Ricevo GET</h1>
    <h2>Ho ricevuto <?php echo $nome ?> <?php echo $cognome ?></h2>
  </div>
  
</body>
</html>