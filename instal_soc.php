<?php
include ('db_config.php');
$query = 'CREATE TABLE sociale(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
nazwa_sociale CHAR(255) NOT NULL,
link CHAR(255) NOT NULL)';



{
    mysqli_query($polaczenie,"INSERT INTO sociale (nazwa_sociale,link)VALUES ('Facebook','https://pl-pl.facebook.com/')");
	echo "Dane chyba dodane!<br>";
	mysqli_close($polaczenie);
	}