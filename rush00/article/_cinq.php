<?PHP
	session_start();
	$_SESSION[select] = 5;
		
	header('Location: http://localhost:8080/rush00/article_page.php');
	exit();
?>
