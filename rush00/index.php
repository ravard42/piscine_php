<?php
	session_start();
	if (!isset($_SESSION['tab']))
	{
		header('Location: http://localhost:8080/rush00/install.php');
		exit();
	}
	if (!isset($_SESSION['veto']))
	{
		$_SESSION['aide'] = "Bienvenu voyageur<br /> je suis ton guide pour t'en sortir daans les meandres de ce merdier.<br />pour l'instant RAS</p>";
		$_SESSION[veto] = 0;
	}
	else if ($_SESSION[veto] == 0)
		$_SESSION['aide'] = "RAS $_SESSION[loggued_on_user]";
	else if ($_SESSION[veto] == 1)
		$_SESSION['aide'] = "Vous venez de vous deconnecter";
?>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css" />
		<title>Super-Market</title>
	</head>
	<body>
	<div id="bloc_page">
		<header >
			<a class="headiv" href="http://localhost:8080/rush00/index.php">
					<h1>Super-Market</h1>
			</a>
			<form class="headiv" method="post" action="base.php">
				<INPUT class="search" type="text" name="saisie" placeholder="search"> <INPUT class="search" type="submit" name="submit" value="GO"></INPUT>
			</form>
			<?php
				if ($_SESSION['loggued_on_user'])
				{
					echo "<a class='headiv' href='http://localhost:8080/rush00/panier.php'>
							<img src='img/panier.jpg' width=100% height=100%>
							</a>";
					echo "<a class='headiv' href='http://localhost:8080/rush00/_logout.php'>
							<img src='img/deco.jpg' width=100% height=100%>
							</a>";
				}
				else
					echo "<a class='headiv' href='http://localhost:8080/rush00/login.php'>
							<img src='img/profil.jpg' width=100% height=100% />
							</a>";
			?>
		</header>
		<section>
			<div id="sort">
				<span>CATEGORIES</span>
			</div>
			<div id="disp">
					<span>ARTICLES</span>
					<a class="stuff" href="./article/_zero.php"><?PHP echo "<img class='art' src=" . "'./img/stuff/" . $_SESSION[tab][$_SESSION[page] * 6][addr] . "'" . " width:100% height:100% />"?></a>
					<a class="stuff" href="./article/_un.php"><?PHP echo "<img class='art' src=" . "'./img/stuff/" . $_SESSION[tab][$_SESSION[page] * 6 + 1][addr] . "'" . " width:100% height:100% />"?></a>
					<a class="stuff" href="./article/_deux.php"><?PHP echo "<img class='art' src=" . "'./img/stuff/" . $_SESSION[tab][$_SESSION[page] * 6 + 2][addr] . "'" . " width:100% height:100% />"?></a>
					<a class="stuff" href="./article/_trois.php"><?PHP echo "<img class='art' src=" . "'./img/stuff/" . $_SESSION[tab][$_SESSION[page] * 6 + 3][addr] . "'" . " width:100% height:100% />"?></a>
					<a class="stuff" href="./article/_quatre.php"><?PHP echo "<img class='art' src=" . "'./img/stuff/" . $_SESSION[tab][$_SESSION[page] * 6 + 4][addr] . "'" . " width:100% height:100% />"?></a>
					<a class="stuff" href="./article/_cinq.php"><?PHP echo "<img class='art' src=" . "'./img/stuff/" . $_SESSION[tab][$_SESSION[page] * 6 + 5][addr] . "'" . " width:100% height:100% />"?></a>
			</div>
		</section>
		
	</div>
	<robot>
		<?PHP
			echo "<p id='aide'>" . $_SESSION['aide'] . "</br>" . "</p>";
			$_SESSION['veto'] = 0;
		?>
	</robot>
	</body>
</html>
