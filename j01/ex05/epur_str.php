#!/usr/local/php5/bin/php
<?PHP
	function	epur_str($str)
	{
		$str = trim($str);
		while (strpos($str, '  '))
			$str = str_replace('  ', ' ', $str);
		return $str;
	}

	if ($argc == 2)
		echo epur_str($argv[1])."\n";
?>
