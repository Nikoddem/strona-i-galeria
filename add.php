<?php
include ('db_config.php');
	mysqli_query($polaczenie,"INSERT INTO podstrony (nazwapodstr,tresc,waga)VALUES ('nowa','Tresc strony','1')");
	echo "Dane chyba dodane!<br>";
	mysqli_close($polaczenie)
?>