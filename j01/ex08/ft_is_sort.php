#!/usr/local/php5/bin/php
<?PHP
	$tab = array("A", "b", "C", "Z", "Y", "X");
	sort($tab);
	
	print_r($tab);

	function	ft_is_sort($tab)
	{
		$test = $tab;
	
		sort($test);
		$i = 0;
		$ret = 1;
		foreach($tab as $elem)
		{
			if (strcmp($elem, $test[$i]))
				return FALSE;
			$i++;
		}
		return TRUE;
		
	}

	if (ft_is_sort($tab))
		echo "Le tableau est trie\n";
	else
		echo "Le tableau n'est pas trie\n";
?>
