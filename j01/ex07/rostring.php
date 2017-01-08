#!/usr/local/php5/bin/php
<?PHP

	if ($argc > 1)
	{
		$tab = array_filter(explode(" ", $argv[1]));
		echo end($tab);
		foreach ($tab as $elem)
			if ($elem != end($tab))
				echo " ".$elem;
		echo "\n";
	
	}
?>
