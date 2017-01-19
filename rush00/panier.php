<?PHP
		session_start();
		$_SESSION['aide'] = 'VOTRE PANIER ' . $_SESSION[loggued_on_user] . '<br /><br /><br />';
		foreach ($_SESSION[panier] as $elem)
			$_SESSION[aide] .= "article : " . $elem[0][name] . " prix unitE : " . $elem[0][prix] . "   credits, quantitE : " . $elem[1] . '<br />';
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
		<div id="panier_robot">
			<?PHP
				echo "<p id='aide'>" . $_SESSION['aide'] . "</p>";
				$_SESSION[veto] = 0;
			?>
		</div>
		<form id='modify' method='post' action='_stock_manager.php'>
			<input id="name_qantity" type="text" name="name"  value=
			<?PHP 
				if ($_SESSION[save])
				{
					echo $_SESSION[save];
					$_SESSION[save] = '';
				}
			?>
			>
			<input class="plus_ou_moins" type='submit' name='subp' value='+' />
			<input class="plus_ou_mois" type='submit' name='subm' value='-'/>
		</section>
		</div>
		</body>
<nhtml>
