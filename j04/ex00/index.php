<?PHP
	session_start();
	if ($_GET["submit"] === "OK")
	{
			$_SESSION[login] = $_GET[login];
			$_SESSION[passwd] = $_GET[passwd];
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>J04->ex00</title>
		<style>
			html, body{width : 100%; height : 100%;}
			form{text-align : center; position : absolute; top : 50%; left : 50%; transform : translateY(-50%) translateX(-50%);background : lime;}
		</style>	
	</head>
	<body>
		<form method="get" action="index.php">
			<label for="login">login</label> : <input type="text" name="login" value="<?PHP echo $_SESSION[login]?>"><br />
			<label for="passwd">passwd</label> : <input type="password" name="passwd" value="<?PHP echo $_SESSION[passwd]?>"><br />
			<input type="submit" name="submit" value="OK">
		</form>
	</body>
</html>
