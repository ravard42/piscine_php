<?php
function auth($login, $passwd)
{
	$i = 0;
	$nofail = 1;
	if (!file_exists("./private"))
		return (FALSE);
	if (file_exists("./private/passwd") && $str = file_get_contents("private/passwd"))
	{
		$megatab = unserialize($str);
		while ($megatab[$i])
		{
			if ($megatab[$i][login] == $login && $megatab[$i][passwd] == hash(whirlpool, $passwd))
			{
				$nofail = 0;
				break;
			}
			$i++;
		}
		file_put_contents("private/passwd", serialize($megatab));
		if ($nofail == 0)
			return (TRUE);
	}
	return (FALSE);
}
?>
