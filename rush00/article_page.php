<?PHP
	session_start();
	$_SESSION['aide'] = "nom: " . $_SESSION[tab][$_SESSION[page] * 6 + $_SESSION[select]][name] . "<br />" . "categorie: " . $_SESSION[tab][$_SESSION[page] * 6 + $_SESSION[select]][categorie] . "<br />" . "genre: " . $_SESSION[tab][$_SESSION[page] * 6 + $_SESSION[select]][sex] . "<br />" . "prix: " . $_SESSION[tab][$_SESSION[page] * 6 + $_SESSION[select]][prix] . " credits<br />";
	if ($_SESSION['loggued_on_user'] && isset($_SESSION[panier]))
		$_SESSION[aide] .= "<br />nombre de cet article dans le panier: " . $_SESSION[panier][$_SESSION[tab][$_SESSION[page] * 6 + $_SESSION[select]][name]][1];
		

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
			<form class="headiv" method="post" action="base.php">
				<INPUT class="search" type="text" name="saisie" placeholder="search"> <INPUT class="search" type="submit" name="submit" value="GO"></INPUT>
			</form>
			<?PHP
			if ($_SESSION['loggued_on_user'])
				{
					echo "<a class='headiv' href='http://localhost:8080/rush00/panier.php'>
								<img src='img/panier.jpg' width=100% height=100%>
								</a>";
					echo "<a class='headiv' href='http://localhost:8080/rush00/_logout.php'>
								<img src='img/deco.jpg' width=100% height=100%>
								</a>";
				}
			?>
		</header>
		<section>
		<a id="article"><?PHP echo "<img class='art' src=" . "'./img/stuff/" . $_SESSION[tab][$_SESSION[page] * 6 + $_SESSION[select]][addr] . "'" . " width:100% height:100% />"?></a>
		<?PHP
			if ($_SESSION['loggued_on_user'])
				echo "<form id='user_only' method='post' action='_stock_manager.php'><input type='submit' name='submit' value='add_panier' id='add_panier' /></form>";
		?>
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
