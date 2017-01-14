<?PHP
	if ($_POST['submit'] != 'OK' || $_POST['login'] == '' || $_POST['oldpw'] == '' || $_POST['newpw'] == '')
		echo "ERROR\n";
	else
	{
		$tab = unserialize(file_get_contents('../private/passwd'));
		$modif = 0;
		$i = 0;
		foreach ($tab as $elem)
		{
			if ($elem[0] == $_POST['login'] && $elem[1] == hash('whirlpool', $_POST['oldpw']))
			{
				$tab[$i][1] = hash('whirlpool', $_POST['newpw']);
				if($nbr = file_put_contents('../private/passwd', serialize($tab)))
				{
					$modif = 1;
					break;
				}
			}
			$i++;
		}
		if ($modif == 1)
			echo "OK\n";
		else
			echo "ERROR\n";
	}
?>
