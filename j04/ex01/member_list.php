<?PHP
	if (file_exists('./private/passwd') && $tab = unserialize(file_get_contents('./private/passwd')))
		foreach($tab as $elem)
			echo "$elem[0] : $elem[1]<br />";
	else
		echo "Aucun membre";
?>
