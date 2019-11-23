<?php
	session_start();
	$conn = $_SESSION["conn"];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema Biblioteca</title>
	<link rel="stylesheet" type="text/css" href="schema.css"/>
	<link rel="icon" type="image/x-icon" href="icon.ico"/>
</head>
<body>
	<div>
		<?php
		echo "System status: ". ($conn->connect_errno) ."\n";
		?>
	</div>
	<h1>Sistema Biblioteca</h1>
	<form action="./login.php" method="post">
		Funcionario: <input name="func" type="text"/><br/><br/>
		<input class="ralig" name="submit" type="submit" value="Conectar"/>
	</form>
	<footer>

	</footer>
</body>
</html>
