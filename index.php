<?php
require_once("db.php");
$sql =  'SELECT id, nom, prenom FROM utilisateur ORDER BY nom';
foreach  ($conn->query($sql) as $row) {
	print $row['id'] . "\t" . $row['nom'] . "\t" . $row['prenom'] . "\n";
}
?>