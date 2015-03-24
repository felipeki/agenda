<?php
$link = mysql_connect('localhost', 'root', 'vibelove');
mysql_select_db('agendadb');
$resultemail = mysql_query("select * from agenda order by email");
$emailantigo = $_GET["id"];

while ($resultarray= mysql_fetch_array($resultemail))
{
	$id = $resultarray["email"];
     //   $email = $resultarray["email"];
        $telefone = $resultarray["telefone"];
}

?>


<div class="container">
  <h2>Cadastro de Contatos</h2>
  <form class="form-group" role="form" method="post" action="salvaalteracao.php">

      <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="emailnovo" value="<?php echo "$emailantigo"; ?>" placeholder="Insira E-mail" required data-fv-notempty-message="The username is required">
        
    </div>
    <div class="form-group">
      <label for="pwd">Telefone:</label>
      <input type="number" class="form-control" name="telefone" placeholder="Insira Telefone"
        minlength="10"
                data-fv-stringlength-message="The full name must be more than 10 and less than 40 characters"</>
    </div>
<div>
  <input type="hidden" name="emailantigo" value="<?php echo "$emailantigo"; ?>">
        <input type="submit" class="btn btn-default"></button>  
</form>
</div>

