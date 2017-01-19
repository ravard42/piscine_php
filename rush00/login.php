<?PHP
	session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Super-Market</title>
	</head>
	<body>
	<div id="bloc_page">
		<header>
			<a class="headiv" href="http://localhost:8080/rush00/index.php">
					<h1>Super-Market</h1>
			</a>
		</header>
		<section>
			<a id="new" href="http://localhost:8080/rush00/create.php"><span id="nouv">NOUVEAU DANS LE COIN?</span></a>
			<form id="identification" method="post" action="_login.php">
				<input class="login" type="text" name="login"  placeholder="IDENTIFIANT" />
				<input class="login" type="password" name="passwd"  placeholder="MDP"  />
				<input class="login" type="submit" name="submit" value="OK" />
			</form>
		</section>
	</div>
		<robot>
			<?PHP
				echo "<p id='aide'>" . $_SESSION['aide'] . "</p>";
				$_SESSION[veto] = 0;
			?>
		</robot>
	</body>
</html>
