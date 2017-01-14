<?PHP
	function	auth($login, $passwd)
	{
		if (!($tab = unserialize(file_get_contents('../private/passwd'))))
			return FALSE;
		foreach ($tab as $key=>$elem)
			if ($login == $tab[$key][0] && hash("whirlpool", $passwd) == $tab[$key][1])
				return TRUE;
		return FALSE;
	}
?>
