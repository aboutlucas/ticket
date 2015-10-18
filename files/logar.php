<?php
	
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db   = 'crudpdo';

	try{
		$pdo = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$login = $_POST['login'];
		$senha = $_POST['senha'];
		
		$sql = $pdo->prepare("SELECT login  and senha FROM user WHERE login = ? and senha = ? ");
		$sql->execute(
		
			array(
				$login,
				$senha
			)
		);

		if($sql->execute()){
			if($sql->rowCount() > 0){
				echo "registro encontrado!";
				setcookie("login",$login);
				header('Location:home.php');
			}else{
				echo "registro nao encontrado!";				
			}
		}
	
	}catch(Exeception $e){
		echo 'Error '. $get->Message();
	}
?>
