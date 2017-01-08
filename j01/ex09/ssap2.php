#!/usr/local/php5/bin/php
<?PHP

	function	ft_split($str)
	{
		$str = array_filter(explode(" ", trim($str)));
		sort($str);
		return ($str);
	}
	
	function	cmp($str1, $str2)
	{
		$len = (strlen($str1) <= strlen($str2)) ? strlen($str1) : strlen($str2);
		$i = -1;
		while (++$i < $len)
		{
			if ($str1[$i] != $str2[$i])
			{
				if (ctype_alpha($str1[$i]))
				{
					if (ctype_alpha($str2[$i]))
						return ord($str1[$i]) - ord($str2[$i]);
					else
						return (-1);
				}
				if (ctype_digit($str1[$i]))
				{
					if (ctype_alpha($str2[$i]))
						return 1;
					if (ctype_digit($str2[$i]))
						return ord($str1[$i]) - ord($str2[$i]);
					else
						return -1;
				}
				if (!(ctype_alpha($str2[$i]) || ctype_digit($str2[$i])))
						return ord($str1[$i]) - ord($str2[$i]);
				else
					return 1;
			}
		}
		return (-1);
	}
	
	if ($argc > 1)
	{
		$merged = "";
		foreach($argv as $elem)
		{
			if ($elem != $argv[0])
				$merged .= " $elem ";
		}
		echo $merged."\n";
		$merged = ft_split($merged);
		print_r($merged);
		usort($merged, "cmp");
		print_r($merged);
	
	}
?>
