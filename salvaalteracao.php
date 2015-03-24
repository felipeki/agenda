<html>
<?php
$emailantigo = $_POST['emailantigo'];
$emailnovo = $_POST['emailnovo'];
$telefone = $_POST['telefone'];
$link = mysql_connect('localhost', 'root', 'vibelove');
if (!$link) {
    die('Nao foi Possivel Conectar ao Banco ' . mysql_error());
}
mysql_select_db('agendadb');
//$validaemail= $_POST['email'];


$consulta = mysql_query("SELECT * FROM agenda WHERE email='$emailnovo'");
if(mysql_num_rows($consulta) > 0) {
echo "ESTE E-MAIL JA EXISTE NO SISTEMA";?></p><?php
echo "Voltanto ao menu principal...";

header( "Refresh:2; url=cadastro.html", true, 303);

exit();
}
