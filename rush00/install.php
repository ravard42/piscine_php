<?PHP
	session_start();
	

	$tab = explode(";", file_get_contents("./install.txt"));
	$i = -1;
	while (++$i < count($tab) / 5)
		$big[$i] = array('name' => $tab[5 * $i], 'categorie' => $tab[5 * $i + 1], 'sex' => $tab[5 * i + 2 ], 'addr' => $tab[5 * $i + 3], 'prix' => $tab[5 * $i + 4]);
	
	$_SESSION['tab'] = $big;
	$_SESSION[page] = 0;
	header('Location: http://localhost:8080/rush00/index.php');
	exit();
?>
