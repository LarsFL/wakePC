<?PHP
session_start();
if (isset($_SESSION['woke']) and $_SESSION['woke'] == true){
	$woke = true;
}
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
	<form action="wake.php" method="post">
		<input type="password" id="secretWord" name="secretWord">
		<input type="submit" value="Wake">
	</form>
	</body>
	</br>
	</br>
	</br>
	</br>
	</br>
	<?php if (isset($woke) and ($woke == true)) { ?>
	<h1>Pc is being awoken</h1>
	<form action="thankyounext.php" method="post">
		<input type="submit" value="Ok">
	</form>
	<?php } ?>
</html>