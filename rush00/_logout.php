<?PHP
	session_start();
	$_SESSION['loggued_on_user'] = "";
	$_SESSION['veto'] = 0;
	header('Location: http://localhost:8080/rush00/index.php');
	exit();
	

?>
