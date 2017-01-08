#!/usr/local/php5/bin/php
<?PHP
	function	simplify($str)
	{
		$str = trim($str);
		while (strpos($str, '  '))
			$str = str_replace('  ', ' ', $str);
		return $str;
	}
	
	function	tab_size($str)
	{
		$offset = 0;
		$tmp = 0;
		$size = $str ? 1 : 0;
		if ($size)
		{
			while ($tmp = strpos($str, ' ', $offset))
			{
				$offset = $tmp + 1;
				++$size;
			}
		}
		return ($size);
	}

	function	ft_split($str)
	{
		if (is_null($str))
			return (NULL);
		
		$str = simplify($str);
		$size = tab_size($str);
		$tab = array();
		$offset = 0;
		$tmp = 0;
		$i = 0;

		if ($size == 0)
			$tab[0] = "";
		else if ($size == 1)
			$tab[0] = $str;
		else
		{
			while ($tmp = strpos($str, ' ', $offset))
			{
				$tab[$i] = substr($str, $offset, $tmp - $offset);
				$i++;
				$offset = $tmp + 1;
			}
			$tab[$i] = substr($str, $offset);
		}
		return ($tab);
	}

	if ($argc == 2)
		print_r(ft_split($argv[1]));
	else
		echo "pas le bon nombre d'arguments\n";
?>
