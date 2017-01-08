#!/usr/local/php5/bin/php
<?PHP
	function	ft_split($str)
	{
		$str = array_filter(explode(" ", trim($str)));
		sort($str);
		return ($str);
	}

	if ($argc > 1)
	{
		$merged = "";
		foreach($argv as $elem)
		{
			if ($elem != $argv[0])
				$merged .= " $elem ";
		}
		$merged = ft_split($merged);
		sort($merged);
		print_r($merged);
	}
?>
