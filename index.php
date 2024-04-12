<?php

  // commento

  /*
    commento su più righe
  */

  # altro commento

  $nome = 'Ugo';
  $cognome = 'De Ughi';
  $anni = 18;

  // il punto concatena la stringa
  $nome_cognome_1 = $nome . ' ' . $cognome;

  // utilizzando apici doppi posso inserire direttamente le variabili nella stringa
  $nome_cognome_2 = "$nome $cognome";

  $descrizione_1 = $nome . ' ' . $cognome . ' ha ' . $anni . ' anni';
  $descrizione_2 = "$nome $cognome ha $anni anni";

  // concateno una stringa a una variabile
  $descrizione_2 .= ' quindi può votare!';

  $lorem = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa libero velit, quam quo veniam dolor architecto aperiam labore tenetur ipsum  inventore nesciunt amet, at atque quia optio facere earum! ipsum Repellendus, est?';
  
  $lorem_senza_ipsum = str_replace('ipsum',' - CIAO -', $lorem);


  $lunghezza_stringa_lorem = strlen($lorem);

  // explode  funziona come split
  $stringa_esplosa = explode(' ', $lorem);

  
  var_dump($stringa_esplosa);

  var_dump('<br>');
  var_dump(str_contains($lorem, 'ipsum')); 
  var_dump('<br>');
  var_dump(str_contains($lunghezza_stringa_lorem,'ipsum'));

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
    <h1>Primo PHP</h1>
    <a href="ricevo-get.php">vai a ricevo get</a>
    <h2>Ciao <?php echo $nome; ?> <?php echo $cognome; ?> </h2>
    <h2>Ciao <?php echo $nome_cognome_1; ?> </h2>
    <h2>Ciao <?php echo $nome_cognome_2; ?> </h2>
    <h3><?php echo $descrizione_1 ?></h3>
    <h3><?php echo $descrizione_2 ?></h3>
    <p>PARAGRAFO 1 <?php echo $lorem ?></p>
    <p>Il paragrafo è lungo <?php echo $lunghezza_stringa_lorem ?> caratteri</p>
    <p>PARAGRAFO 2 <?php echo  $lorem_senza_ipsum ?></p>

  </div>
  
</body>
</html>