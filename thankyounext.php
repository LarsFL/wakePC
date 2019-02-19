<?PHP
session_start();

$_SESSION['woke'] = false;
header('Location:index.php');
?>