<?php


function modif($val)
{
	$nofail = 1;
	$i = 0;
	if ($val[submit] == "OK" && $val[login] !== "" && $val[oldpw] !== "" && $val[newpw] !== "")
	{
		$megatab = unserialize(file_get_contents("private/passwd"));
		print_r($mebatab);
		if ($megatab)
		{
			while ($megatab[$i])
			{
				if ($megatab[$i][login] == $val[login] && $megatab[$i][passwd] == hash(whirlpool, $val[oldpw]))
				{
					$nofail = 0;
					$megatab[$i][passwd] = hash(whirlpool, $val[newpw]);
					break;
				}
				$i++;
			}
		}
		if ($nofail === 0)
		{
			file_put_contents("private/passwd", serialize($megatab));
			echo "\nOK";
		}
		else
			echo "ERROR1\n";
	}
	else
		echo "ERROR2\n";
}
?>
