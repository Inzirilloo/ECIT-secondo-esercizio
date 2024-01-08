<!DOCTYPE html>
<html>
<head>
<!-- <title> è quello che si vede nella scheda del browser -->
<title>Pagina PHP</title>

<link rel="stylesheet" href="stile.css">

</head>
<body>

<h1 class= "titolo">
  Pagina PHP
</h1>

<!--
<h1 id = "big-blue" class= "large blue">
  Pagina PHP blue
</h1>
-->


<!--
posso combinare le classi
<h1 class= "titolo titolo-2">
  Pagina PHP veramente
</h1>
-->

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

  <label for="nome">First name:</label>
  <input type="text" id="nome" name="nome"><br><br>

</form> 

<?php
$nomeErr ="";
$nome = "";
function test_input($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    echo "<h2>Your Input:</h2>";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nome"])) {
          $nomeErr = "Name is required";
          echo "$nomeErr";
        } else {
          $nome = test_input($_POST["nome"]);
          if (strlen(trim($nome)) == 0){
            $nomeErr = "Only space is not a name";
            echo "$nomeErr";
          } else if (!preg_match("/^[a-zA-Z-' ]*$/",$nome)) {
            $nomeErr = "Only letters and white space allowed";
            echo "$nomeErr";
          } else {
            echo "$nome";
          }
        }
      }
     
    echo "<br>";

    echo "<h2>Numeri da 1 a 10</h2>";
    for ($i = 1, $j = 0; $i <= 10; $j += $i, print "\n", print $i, $i++);
    echo "<br>";

    echo "<h2>Array associativo</h2>";
    $array = [
      'nome' => 'Giorgo', 
      'cognome' => 'Pesci',
      'citta' => 'Pescara'
  ];

  echo $array['nome']."\n"; 
  echo $array['cognome']."\n"; 
  echo "$array[citta]";

?>


    
</body>
</html>