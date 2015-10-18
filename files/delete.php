<?php
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Delete</title>
</head>
<body>

	<?php
		
		$user = 'root';
		$pass = '';
		$pdo = new PDO('mysql:host=localhost;dbname=crudpdo',$user,$pass);
		
		$result = $pdo->prepare(" SELECT * FROM user WHERE id = '".$_GET['id']."'");
		$result->execute();

		while($row = $result->fetch(PDO::FETCH_ASSOC)){

			$id    = $row['id'];
			$login = $row['login'];
			$email = $row['email'];
			$senha = $row['senha'];

			echo "

				<h2>Informações $login</h2>

				<form method='post' action='delet.php?id=".$id."'>
					<label for='id'>ID</label>
						<input type='hidden' name='id' id='id' value='".$id."'  disabled/>$id <br /><br />
					<label for='login'>Login</label>
						<input type='text' name='login' value='".$login."'  disabled/> <br /><br />
					<label for='email'>Email</label>
						<input type='email' name='email' value='".$email."'  disabled/><br /><br />
					<label for='senha'>Senha</label>
						<input type='text' name='senha' value='".$senha."'  disabled/> <br /><br />
					<input type='submit' value='Deletar' />
				</form>
				<br />
				<a href='home.php'>Voltar </a>
			";
		}
	?>
</body>
</html>
