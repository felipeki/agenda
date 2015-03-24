<html>
<?php
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$link = mysql_connect('localhost', 'root', 'vibelove');
if (!$link) {
    die('Nao foi Possivel Conectar ao Banco ' . mysql_error());
}
mysql_select_db('agendadb');
//$validaemail= $_POST['email'];

$consulta = mysql_query("SELECT * FROM agenda WHERE email='$email'");
if(mysql_num_rows($consulta) > 0) {
echo "ESTE E-MAIL JA EXISTE NO SISTEMA";?></p><?php
echo "Voltanto ao menu principal...";

header( "Refresh:2; url=cadastro.html", true, 303);

exit();
}

mysql_select_db('agendadb');
mysql_query("INSERT INTO agenda (telefone,email) VALUES ('$telefone','$email')");

?>
    <head>
		<meta http-equiv="refresh" content="3;url=cadastro.html"/>
    </head>
    <body>
        <h1>Cadastro Realizado com sucesso.</h1>
    </body>
</html>
