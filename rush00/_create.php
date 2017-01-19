<?php
session_start();
$val = $_POST;
$fail = 0;
if ($val[submit] == "OK" && $val[login] !== "" && $val[passwd] !== "")
{
	$tab = array("login" => $val[login], "passwd" => hash(whirlpool, $val[passwd]));
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
	{
		$_SESSION['aide'] = "T es deja dans la base de donne banane!";
		$_SESSION['veto'] = 1;
		header('Location: http://localhost:8080/rush00/login.php');
		exit();
	}
	else
	{
		$megatab[] = $tab;
		file_put_contents("private/passwd", serialize($megatab));
		$_SESSION['aide'] = "Bravo, t'es des notre a present";
		$_SESSION['veto'] = 1;
		header('Location: http://localhost:8080/rush00/login.php');
		exit();
	}
}
else
{
	$_SESSION['aide'] = "Un sal coup de submit qui vaut pt etre pas 'OK'<br />Ou alors c est toi l'abruti qu a appuyE en laissant un champ vide...";
	$_SESSION['veto'] = 1;
	header('Location: http://localhost:8080/rush00/create.php');
	exit();
}
?>
