<?php

function create_cat($val)
{
	$fail = 0;
	if ($val[cat] !== "")
	{
		$tab = $val[cat];
		if (file_exists("private") == FALSE)
				mkdir ("private");
		if (file_exists("private/cat") == TRUE)
			$megacat = unserialize(file_get_contents("private/cat"));
		if ($megacat)
		{
			foreach ($megacat as $ok)
			{
				if ($ok == $val[cat])
			 		$fail = 1;
			}
		}
		if ($fail === 1)
			echo "ERROR\n";
		else
		{
			$megacat[] = $tab;
			print_r($megacat);
			file_put_contents("private/cat", serialize($megacat));
		}
	}
	else
		echo "ERROR\n";
}

?>
