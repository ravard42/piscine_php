<?PHP
	session_start();
	include("auth.php");
	if (auth($_GET['login'], $_GET['passwd']))
		$_SESSION[loggued_on_user] = $_GET[login];
	else
		$_SESSION[loggued_on_user] = '';
	if ($_SESSION[loggued_on_user])
		echo "OK\n";
	else
		echo "ERROR\n";
?>
