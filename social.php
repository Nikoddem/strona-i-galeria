<?php
$socials = [
    ['link'=>'https://www.youtube.com/', 'name'=>'Youtube.com'],
    ['link'=>'https://www.tiktok.com/pl-PL/', 'name'=>'TikTok.ble'],
    ['link'=>'https://x.com/?lang=pl', 'name'=>'X.com']

];


	function social_links($connection){
		$soc = '';	
		if ($result = $connection -> query("SELECT * FROM sociale")) {
			while($wiersz = mysqli_fetch_assoc($result)){
				$soc = $soc.'<a href="'.$wiersz['link'].'">'.$wiersz['nazwa_sociale'].'</a><br>';
					}
			$result -> free_result();
			}
		return $soc;
	   }
?>