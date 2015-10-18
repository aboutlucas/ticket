<?php
		
	$user = 'root';
	$pass = '';
	$pdo = new PDO('mysql:host=localhost;dbname=crudpdo',$user,$pass);

	$sql = "DELETE FROM user WHERE id = '".$_GET['id']."'";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
	$stmt->execute();
	/*$stmt = $pdo->prepare("DELETE FROM user WHERE id = '".$_GET['id']."'");
	$stmt = execute(
		array(
			':user' = $_POST['id']
		)
	);*/
	setcookie("login",0);
	header("Location: home.php");
?>
