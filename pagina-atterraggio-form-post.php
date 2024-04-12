<?php

  $nome = $_POST['nome'];
  $cognome = $_POST['cognome'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous'/>

  <title>Ricevo from GET</title>
</head>
<body>

  <div class="container my-5">
    <h1>Nome: <?php echo $nome ?></h1>
    <h1>Cognome <?php echo $cognome ?></h1>
  </div>
  
</body>
</html>