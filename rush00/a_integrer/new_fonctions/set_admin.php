<?php

function setadmin($login, $mp)
{
	$fail = 0;
	$tab = array("login" => $login, "passwd" => hash(whirlpool, $mp), "admin" => "on");
	if (file_exists("private") == FALSE)
			mkdir ("private");
	if (file_exists("private/passwd") == TRUE)
		$megatab = unserialize(file_get_contents("private/passwd"));
	if ($megatab)
	{
		foreach ($megatab as $ok)
		{
				foreach ($ok as $value)
				{
					if ($value == $val[login])
		 				$fail = 1;
				}
		}
	}
	if ($fail === 1)
		echo "NOP\n";
	else
	{
		$megatab[] = $tab;
		file_put_contents("private/passwd", serialize($megatab));
	}
}
setadmin('admin','batman');
?>
