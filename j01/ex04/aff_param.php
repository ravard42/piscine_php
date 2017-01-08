#!/usr/local/php5/bin/php
<?PHP
	if ($argc > 1)
	{
		$i = 0;
		while (++$i < $argc)
			echo $argv[$i]."\n";
	}
	
?>
