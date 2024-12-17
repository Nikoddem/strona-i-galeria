<?php
function menu_from_db($connection){
	$menu = '';	
	if ($result = $connection -> query("SELECT * FROM `podstrony` ORDER BY `podstrony`.`waga` ASC")) {
		while($wiersz = mysqli_fetch_assoc($result)){
                $menu = $menu.'<a href="index.php?id='.$wiersz['id'].'">'.$wiersz['nazwapodstr'].'</a><br>';
                }
		$result -> free_result();
		}
	return $menu;
   }
   
   function podstrona_from_db($connection, $id=1, $nazwa_kolumny="tresc") {
    $result = $connection->query("SELECT $nazwa_kolumny FROM podstrony WHERE id='$id'");
    return $result ? $result->fetch_row()[0] : null;
}

function get_id(){	
	if(isset($_GET['id'])){
		return $_GET['id'];}
	else {return 1;}
	} 
?>   