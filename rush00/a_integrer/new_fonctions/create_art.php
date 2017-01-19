<?php

function create_art($val)
{
	$fail = 0;
	if ($val[art] !== "")
	{
		$tab = array("name" => $val[name], "url" => $val[img], "prix" => $val[prix], "cat" );
		$i = 0;
		foreach ($val[cat] as $value)
			$tab[cat][] = $value;
		if (file_exists("private") == FALSE)
				mkdir ("private");
		if (file_exists("private/items") == TRUE)
			$megaart = unserialize(file_get_contents("private/items"));
		if ($megaart)
		{
			foreach ($megaart as $ok)
			{
				if ($ok == $val[name])
			 		$fail = 1;
			}
		}
		if ($fail === 1)
			echo "ERROR\n";
		else
		{
			$megaart[] = $tab;
			print_r($megaart);
			file_put_contents("private/items", serialize($megaart));
		}
	}
	else
		echo "ERROR\n";
}

?>
