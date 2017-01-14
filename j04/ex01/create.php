<?PHP
	if ($_POST['submit'] != "OK" || $_POST[login] == "" || $_POST[passwd] == "")
		echo "ERROR\n";
	else
	{
		if (file_exists("../private/passwd"))
		{
			$tab = unserialize(file_get_contents("../private/passwd"));
			foreach($tab as $elem)
				if ($elem[0] == $_POST[login])
				{
					echo "ERROR\n";
					$stop = 1;
					break;
				}
			if (!$stop)
			{
				$tab[] = array($_POST[login], hash("whirlpool", $_POST[passwd]));
				if (file_put_contents("../private/passwd", serialize($tab)))
					echo "OK\n";
				else
					echo "ERROR\n";
			}
		}
		else
		{
			if (!file_exists("../private"))
				mkdir("../private");
			if (file_put_contents("../private/passwd", serialize(array(array($_POST[login], hash("whirlpool", $_POST[passwd]))))))
				echo "OK\n";
			else
				echo "ERROR\n";
		}
	}
?>
