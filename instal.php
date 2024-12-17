<?php
include ('db_config.php');
$query = 'CREATE TABLE podstrony(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
nazwapodstr CHAR(255) NOT NULL,
tresc CHAR(255) NOT NULL)';



	mysqli_query($polaczenie,"INSERT INTO podstrony (nazwapodstr,tresc)VALUES ('zainteresowanie','Twoje zainteresowania')");
	echo "Dane chyba dodane!<br>";
	mysqli_close($polaczenie)
?>