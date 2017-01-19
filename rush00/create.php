<?PHP
	session_start();
	if (!$_SESSION['veto'])
		$_SESSION['aide'] = "tu peux Creer ton compte a present<br />";


?>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" types="text/css" href="style.css">
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
				<form id="hero" method="post" action="_create.php">
					<input class="create" type="text" name="login" placeholder="HERO" />
					<input class="create" type="password" name="passwd" placeholder="MDP super secret"/>
					<input class="create" type="submit" name="submit" value="OK"/>
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
