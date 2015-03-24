<?php
$email= $_GET["id"];
$link = mysql_connect('localhost', 'root', 'vibelove');
if (!$link) {
    die('Nao foi Possivel Conectar ao Banco ' . mysql_error());
}
mysql_select_db('agendadb');
//$validaemail= $_POST['email'];


mysql_query("DELETE FROM agenda WHERE email='$email'");
#if(mysql_num_rows($consulta) > 0) {
echo "Contato apagado do sistema";?></p><?php
echo "Voltanto ao menu principal...";

header( "Refresh:2; url=cadastro.html", true, 303);

exit();

?>
