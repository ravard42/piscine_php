#!/usr/local/php5/bin/php
<?PHP
	echo "Entrez un nombre: ";
	while ($n = trim(fgets(STDIN)))
	{
		if (!ctype_digit($n))
		{
			print ("'$n' n'est pas un chiffre\n");
		}
		else
		{
			$n =  intval($n);
			if ($n % 2 == 0)
				echo "Le chiffre $n est Pair\n";
			else
				echo "Le chiffre $n est Impair\n";
		}
		echo "Entrez un nombre: ";
	}
	echo "^D\n";
?>
