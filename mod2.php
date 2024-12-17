<?php
include ('db_config.php');
$a=$_POST['pod'];
$dane=$_POST['nazwapodstr'];
$dane2=$_POST['trescpodstr'];
$waga=$_POST['waga'];
mysqli_query($polaczenie,"UPDATE podstrony SET nazwapodstr = '".$dane."' WHERE id = '".$a."'");
mysqli_query($polaczenie,"UPDATE podstrony SET tresc = '".$dane2."' WHERE id = '".$a."'");
mysqli_query($polaczenie,"UPDATE podstrony SET waga = '".$waga."' WHERE id = '".$a."'");
echo 'OK<br><a href="panel.php">PANEL</a><br>';
?>