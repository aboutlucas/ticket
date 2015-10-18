<?php
		
	$user = 'root';
	$pass = '';
	$pdo = new PDO('mysql:host=localhost;dbname=crudpdo',$user,$pass);

	$form = $_POST;
	$id    = $form['id'];
	$login = $form['login'];
	$email = $form['email'];
	$senha = $form['senha'];

		$sql = "UPDATE user SET id = :id, login = :login, email = :email, senha = :senha WHERE id = :id";

		$stmt = $pdo->prepare($sql);
		$stmt->bindParam(':id',$_POST['id'], PDO::PARAM_INT);
		$stmt->bindParam(':login',$_POST['login'], PDO::PARAM_STR);
		$stmt->bindParam(':email',$_POST['email'], PDO::PARAM_STR);
		$stmt->bindParam(':senha',$_POST['senha'], PDO::PARAM_STR);

		$stmt->execute();


		//$stmt->execute();
		// header("Location: edit.php?id=".$id." ");
		header("Location: edit.php?id=".$id."");
	
?>
