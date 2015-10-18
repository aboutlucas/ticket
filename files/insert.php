<?php 
	
	$user = 'root';
	$pass = '';
	
	try{

		$pdo = new PDO('mysql:host=localhost;dbname=crudpdo',$user,$pass);

		$form = $_POST;

		$id    = $form['id'];
		$login = $form['login'];
		$email = $form['email'];
		$senha = $form['senha'];

		if($pdo->query("SELECT count(*) FROM user WHERE login = '{$login}' or email = '{$email}' ")->fetchColumn() <= 0){
			$sql = "INSERT INTO user(login, email, senha) VALUES(:login, :email, :senha)";

			$query = $pdo->prepare($sql);
			$query->execute(
				array(
					':login'=>$login,
					':email'=>$email,
					':senha'=>$senha
				)
			);
			//obs
			//echo $query->rowCount();
			echo "Cadastrado!";
			header("Location:index.php");
		}else{
        	echo "Login/Email já cadastrado";
		}
	}catch(Exception $e){
		echo 'Error'.$e->getMessage();
	}
?>
