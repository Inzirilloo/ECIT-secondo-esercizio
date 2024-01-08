<!DOCTYPE html>
<html>
<body>
<h2>HTML Forms</h2>

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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nome"])) {
          $nomeErr = "Name is required";
        } else {
          $nome = test_input($_POST["nome"]);
          if (!preg_match("/^[a-zA-Z-' ]*$/",$nome)) {
            $nomeErr = "Only letters and white space allowed";
          }
        }
        
      }
     
    echo "<h2>Your Input:</h2>";
    echo $nome;
    echo $nomeErr;
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