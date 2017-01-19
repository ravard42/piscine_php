<?php
	include ("auth.php");

	session_start();
	$val = $_POST;
	if (auth($val[login],$val[passwd]) === TRUE)
	{
		$_SESSION['loggued_on_user'] = $val[login];
		$_SESSION['aide'] = "Salut $val[login]<br />";
		$_SESSION[veto] = 0;
		header('Location: http://localhost:8080/rush00/index.php');
		exit();
	}
	else 
	{
		$_SESSION['loggued_on_user'] = "";
		if ($_POST[submit] != 'OK' || !$val[login] || !$val[passwd])
			$_SESSION['aide'] = "Un sal coup de submit qui vaut pt etre pas 'OK'<br />Ou alors c est toi l'abruti qu a appuyE en laissant un champ vide...";
		else
			$_SESSION['aide'] = "T'es pas dans la base de donnee utilisateur ma caille<br />";
		header('Location: http://localhost:8080/rush00/login.php');
		exit();
	}
?>
