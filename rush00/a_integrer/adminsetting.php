<?php
	session_start();
	include ("auth.php");
	include ("del_adm.php");
	include ("create_log.php");
	include ("modif-copy.php");
	include ("del_cat.php");
	include ("create_cat.php");

	$val = $_POST;
	if ($val["art"] === "set")
	{
		print_r($val);
		echo "$val[name_a]</br>";
		echo "$val[img_a]</br>";
		echo "$val[prix_a]</br>";
		echo "$val[art]</br>";
		$tab = array("name" => $val[name_a], "img" => $val[img_a], "prix" => $val[prix_a], "cate" => $val[cate],"art" => $val[art]);
		print_r($tab);
		modif($tab);
	}
	if ($val[msubmit] === "OK")
	{
		$tab = array( "login" => $val[mlogin], "newpw" => $val[newpw], "oldpw" => $val[oldpw], "submit" => "OK");
		print_r($tab);
		modif($tab);
	}
	if ($val[dcat] === "supprimer categorie")
	{
		$tab = array("cat" => $val[cat]);
		print_r($tab);
		del_cat($tab);
	}
	if ($val[bccat] === "creer")
	{
		$tab = array("cat" => $val[ccat], "ccat" => "creer");
		print_r($tab);
		create_cat($tab);
	}
	if ($val[submit] === "OK")
	{
		$tab = array( "login" => $val[clogin], "passwd" => $val[cpasswd], "submit" => "OK");
		create($tab, 0);
	}
	if ($val[killb] === "delete")
		del_adm($val[login], 1);
	if ($val[setbatmanb] === "admin")
		del_adm($val[login], 0);
?>


<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" types="text/css" href="style.css">
		<title>Super-Market</title>
	</head>
	<body>
		<header class="headerz" >
			<a href="http://localhost:8080/rush00/main_page.php">
				<div class="headiv">
					<h1>Super-Market</h1>
				</div>
			</a>
		</header>

		<div class="mainp">
			<form method="post" action="adminsetting.php">
			<table >
				<tr>
					<td>
						<label>Super-login ? : </label>
						<select width=100px name="login" id="login">
								<?php
									$i = 0;
									$megatab = unserialize(file_get_contents("private/passwd"));
									while ($megatab[$i])
									{
										echo '<option value='.$megatab[$i][login].'>' .$megatab[$i][login]. '</option>';
										$i++;
									}
								?>
						</select>
					</td>
					<td>
						<div  id="button">
							<input type="submit" name="setbatmanb" value="admin"/>
							<figcaption>
								<input type="submit" name="killb" value="delete"/>
							</figcaption>
						</div>
					</td>
					<td>
						<div id="clog">
								Bleusaille: <input type="text" name="clogin" value=""/>
								<br />
								Son Mot de passe: <input type="password" name="cpasswd" value=""/><br/>
								<input type="submit" name="submit" value="OK"/><br />
						</div>
					</td>
					<td>
						<div id="clog">
								Identifiant: <input type="text" name="mlogin" value=""/>
								<br />
								Ancien mot de passe: <input type="oldpassword" name="oldpw" value=""/>
								<br />
								Nouveau mot de passe: <input type="oldpassword" name="newpw" value=""/>
								<input type="submit" name="msubmit" value="OK"/>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<label>Categorie : </label>
						<select width=100px name="cat" id="cat">
								<?php
									$i = 0;
									$megacat = unserialize(file_get_contents("private/cat"));
									while ($megacat[$i])
									{
										echo '<option value='.$megacat[$i].'>' .$megacat[$i]. '</option>';
										$i++;
									}
								?>
						</select>
					</td>
					<td>
							<input type="submit" name="dcat" value="supprimer categorie"/>
					</td>
					<td>
						Nouvelle categorie: <input type="text" name="ccat" value=""/>
						<input type="submit" name="bccat" value="creer"/>
					</td>
				</tr>
				<tr>
					<td>
							<label>Article : </label>
						<select width=100px name="cat" id="cat">
						</select>
					</td>
					<td>
						<input type="submit" name="dcat" value="supprimer article"/>
					</td>
					<td>
							Nouveaux Articles: <br />
							Nom: <input type="text" name="name_a" value=""/><br/>
							Url img: <input type="text" name="img_a" value=""/><br/>
							Prix: <input type="text" name="prix_a" value=""/>
					</td>
					<td>
						<?php
							$i = 0;
							while ($megacat[$i])
							{
								echo "<input type='checkbox' name='cate[]' value='$megacat[$i]'>".$megacat[$i].'<br>';
								$i++;
							}
						?>
					</td>
					<td>
							<input type="submit" name="art" value="set"/>
					</td>
				</tr>
			</table>
		</form>
		</div>
		</div>
	</body>
</html>
