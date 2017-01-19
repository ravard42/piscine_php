<?php

function del_cat($cat)
{
	$i = 0;
	$nofail = 1;
	$megacat = unserialize(file_get_contents("private/cat"));
	if ($megacat)
	{
		while ($megacat[$i])
		{
			if ($megacat[$i] == $cat[cat])
			{
				echo "coucou\n";
				array_splice($megacat, $i, 1);
				$nofail = 0;
				break;
			}
			$i++;
		}
	}
	file_put_contents("private/cat", serialize($megacat));
	if ($nofail == 0)
		return (TRUE);
	return (FALSE);
}

?>
