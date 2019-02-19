<?PHP
session_start();
$loginPass = $_POST['secretWord'];
$loginPass = htmlspecialchars($loginPass);

if ($loginPass == ""){ // Insert own password here
	$_SESSION['woke'] = true;
	$wokePC = `wakeonlan 4C:ED:FB:3C:9B:4A`; // Change for PC's mac-adress
	echo "\nPc is being awoken";
	// var_dump($wokePC);
	header('Location:index.php');
} else {
	echo ("Sorry, $loginPass isn't correct");
}
?>