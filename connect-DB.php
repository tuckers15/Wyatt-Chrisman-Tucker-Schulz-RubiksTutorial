<!-- connecting -->
<?php

$databaseName = 'TASCHULZ_cs08_final';
$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
$username = 'taschulz_writer';
$password = '6Tt5k%N%lK&4ETt;D4e,';

$pdo = new PDO($dsn, $username, $password);
?>
<!-- connection complete -->