#!/usr/local/php5/bin/php
<?PHP
	function	ft_split($str)
	{
		$str = array_filter(explode(" ", trim($str)));
		sort($str);
		return ($str);
	}

	if ($argc == 2)
		print_r(ft_split($argv[1]));
?>
