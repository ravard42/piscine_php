<?PHP
	session_start();
	if ($_POST[submit] == 'add_panier')
	{
		if (!isset($_SESSION[panier]))
		{
			$panier = array();
			$base = $_SESSION[tab];
			foreach($base as $key => $elem)
				$panier[$base[$key][name]] = array($elem, 0);
			$_SESSION[panier] = $panier;
		}
		if ($_POST[submit] == 'add_panier')
			$_SESSION[panier][$_SESSION[tab][$_SESSION[page] * 6 + $_SESSION[select]][name]][1]++;
		header('Location: http://localhost:8080/rush00/article_page.php');
	}
	else if ($_POST[subp] == '+' || $_POST[subm] == '-')
	{
		foreach ($_SESSION[tab] as $elem)
		{
			if ($elem[name] == $_POST[name])
			{
				if ($_POST[subp] == '+')
					$_SESSION[panier][$_POST[name]][1]++;
				else if ($_POST[subm] == '-' && $_SESSION[panier][$_POST[name]][1] != 0)
					$_SESSION[panier][$_POST[name]][1]--;
				$_SESSION[save] = $_POST[name];
				break;
			}
		}
		header('Location: http://localhost:8080/rush00/panier.php');
	}
	
	
	exit();
?>
