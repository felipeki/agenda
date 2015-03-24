 <h1>Apagar Cadastro</h1>
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="cadastro.html">Cadastrar</a></li>
  <li role="presentation"><a href="alterar.php">Listar/Alterar</a></li>
  <li role="presentation"><a href="apagar.php">Apagar</a></li>
</ul>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>

</body>
</html>




<?php
$link = mysql_connect('localhost', 'root', 'vibelove');
mysql_select_db('agendadb');
$resultemail = mysql_query("select * from agenda order by email");
while ($resultarray= mysql_fetch_array($resultemail))
{
        $email = $resultarray["email"];
        $telefone = $resultarray["telefone"];


        echo "Email: ";
        echo  $email ;
        echo "</br>";
        echo "Telefone: ";
        echo $telefone;
        echo "</br>";
        echo "<a href=apagadevez.php?id=$email>APAGAR</a></p>";
        echo "</br>";
}

?>

