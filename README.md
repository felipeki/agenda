# agenda
Teste_Estágio_Print4me
- Para a execução desta aplicação foi instalada a versão básica do bootstrap
- Uso do php5
- Banco de dados Mysql
- O Arquivo principal para a execução da agenda é cadastro.html
Foi criado um banco de dados com o nome de agendadb,
com uma única tabela conforme abaixo:

mysql> use agendadb;
Reading table information for completion of table and column names
You can turn off this feature to get a quicker startup with -A

Database changed
mysql> describe agenda;
+----------+-------------+------+-----+---------+----------------+
| Field    | Type        | Null | Key | Default | Extra          |
+----------+-------------+------+-----+---------+----------------+
| registro | int(11)     | NO   | PRI | NULL    | auto_increment |
| telefone | int(10)     | YES  |     | NULL    |                |
| email    | varchar(30) | YES  | UNI | NULL    |                |
+----------+-------------+------+-----+---------+----------------+
3 rows in set (0.00 sec)

A validadação dos dados ocorreram no formulário e, também, no próprio banco, onde foi adicionado o parametro Unique para 
o campo e-mail.

