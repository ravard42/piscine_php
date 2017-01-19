<?php
function create($val, $num)
{
	$fail = 0;
	if ($val[submit] == "OK" && $val[login] !== "" && $val[passwd] !== "")
	{
		$tab = array("login" => $val[login], "passwd" => hash(whirlpool, $val[passwd]), "admin" => "off");
		if (file_exists("private") == FALSE)
				mkdir ("private");
		if (file_exists("private/passwd") == TRUE)
			$megatab = unserialize(file_get_contents("private/passwd"));
		if ($megatab)
		{
			foreach ($megatab as $ok)
			{
					foreach ($ok as $value)
					{
						if ($value == $val[login])
			 				$fail = 1;
					}
			}
		}
		if ($fail === 1)
			echo "ERROR\n";
		else
		{
			$megatab[] = $tab;
			file_put_contents("private/passwd", serialize($megatab));
			if ($num === 1)
			{
				header('Location: http://localhost:8080/rush00/main_page.php');
				exit();
			}
		}
	}
	else
		echo "ERROR\n";
}
?>
