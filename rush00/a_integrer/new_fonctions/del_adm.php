<?php

function del_adm($login, $action)
{
	$i = 0;
	$nofail = 1;
	$megatab = unserialize(file_get_contents("private/passwd"));
	if ($megatab)
	{
		while ($megatab[$i])
		{
			if ($megatab[$i][login] == $login && $megatab[$i][login] != "admin")
			{
				if ($action === 1)
						array_splice($megatab, $i, 1);
				else
				{
					if ($megatab[$i][admin] === "off")
						$megatab[$i][admin] = "on";
					else {
						$megatab[$i][admin] = "off";
					}
				}
				$nofail = 0;
				break;
			}
			$i++;
		}
	}
	file_put_contents("private/passwd", serialize($megatab));
	if ($nofail == 0)
		return (TRUE);
	return (FALSE);
}
?>
