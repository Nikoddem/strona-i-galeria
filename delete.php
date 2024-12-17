<?php
include ('db_config.php');
include ('include.php');
if (!isset($_GET['pod'])){
		$output = '<form action="delete.php" method="GET"><select name="pod">
			Podaj id podstrony do usunięcia';
		$res = mysqli_query($polaczenie,"SELECT * FROM `podstrony` ORDER BY `podstrony`.`waga` ASC");
        while($row = mysqli_fetch_array($res, MYSQLI_NUM))
                {
                $output = $output.'<option value="'.$row[0].'">'.$row[1].'</option>';
                }
		$output = $output.'</select>';
		$output = $output. '<input type="submit" value="Usuń">
			</form>  
			<a href="index.php"><input type="button" value="Pozostaw"></a>';
		echo $output;
		}
	else {
		if($polaczenie->query("DELETE FROM podstrony WHERE id='".$_GET['pod']."'")){
			return 'Usunięto podstronę';}
		}
	

?>