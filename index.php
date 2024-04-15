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

  $colori = ['giallo', 'rosso', 'verde'];
  var_dump($colori);

  // equivalente di includes
  var_dump(in_array('verde',$colori));
  var_dump(in_array('viola',$colori));
  // pusho 'viola' in colori
  $colori[] = 'viola';
  var_dump($colori);
  var_dump(in_array('viola',$colori));

  $user = [
    'nome' => 'Ugo',
    'cognome' => 'De Ughi'
  ];

  
  var_dump($user);
  // ottengo true se la chiave esiste
  var_dump(array_key_exists('nome',$user));
  var_dump(array_key_exists('age',$user));
  // aggiungo una chiave=>valore all'array
  $user['age'] = 30;
  var_dump(array_key_exists('age',$user));
  var_dump($user);
  var_dump($user['nome']);

  // se trova il valore nell'array restituisce la chiave
  var_dump(array_search('Ugo',$user));
  // altrimenti restituisce false
  var_dump(array_search('Ugox',$user));

  // conta gli elementi dell'array (length)
  var_dump(count($user));

  $team = [
    [
      'nome' => 'Giuseppe',
      'cognome' => 'Verdi',
      'age' => 80,
      'hobbies' => ['giardinaggio', 'golf']
    ],
    [
      'nome' => 'Mario',
      'cognome' => 'Rossi',
      'age' => 50,
      'hobbies' => ['musica', 'pittura', 'nuoto']
    ],
    [
      'nome' => 'Martina',
      'cognome' => 'Martini',
      'age' => 20,
      'hobbies' => ['carling']
    ],
  ];

  foreach($team as $user){
    $nome = $user['nome'];
    $cognome = $user['cognome'];
    echo "<h2>$nome $cognome</h2>";
  }

  var_dump($team);
  // mario
  var_dump($team[1]['nome']);
  var_dump(array_key_exists('nome',$team[1]));
  // golf
  var_dump($team[0]['hobbies'][1]);

  // CICLI ////////////////

  for($i = 0; $i < 10; $i++){
    echo $i;
    echo '<br>';
  }
  
  // è come for in solo che si mette prima l'array e poi l'elemnto ciclato
  foreach($colori as $colore){
    echo $colore;
    echo '<br>';
  }
  
  // si puù ottenere anche la chiave dell'elemento ciclato
  foreach($colori as $chiave => $colore){
    echo "$chiave => $colore";
    echo '<br>';
  }
  
  foreach($user as $chiave => $item){
    echo "$chiave => $item";
    echo '<br>';
  }

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

    <h3>Colori</h3>
    
    <ul class="list-group">
      <?php foreach($colori as $colore){ ?>
        <li class="list-group-item"><?php echo $colore  ?></li>
        <?php } ?>
      </ul> 
      
    <ul class="list-group">
        <?php foreach($colori as $colore): ?>
          <li class="list-group-item"><?php echo $colore  ?></li>
        <?php endforeach; ?>
      </ul>
      
      <ul class="list-group">
        <?php foreach($colori as $colore){
          echo "<li class='list-group-item'> $colore  </li>";
        }?>
    </ul>
    
    <h3>Team</h3>
    <ul class="list-group">
      <?php foreach($team as $user): 
              foreach($user as $chiave => $item):
                if($chiave !== 'hobbies'):
      ?>
                <li class="list-group-item"><?php echo $chiave  ?>: <?php echo $item  ?></li>
                <?php else: ?>
                  <ul class="list-group">
                    <li class="list-group-item"><?php echo $chiave  ?>:</li>
                    <?php foreach($item as $hobby): ?>
                      <li class="list-group-item"><?php echo $hobby  ?></li>
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>
              <?php endforeach; ?>
                <li class="list-group-item"> - </li>
      <?php endforeach; ?>
    </ul>

  </div>
  
</body>
</html>