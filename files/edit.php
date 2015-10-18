<?php
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Edit</title>
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

				<h2>Informações de $login</h2>
				<h3>Atualização de Informações</h3>

				<form method='post' action='update.php?id=".$id."'>
					<label for='id'>ID</label>
						<input type='hidden' name='id' id='id' value='".$id."'  />$id <br/><br/>
					<label for='login'>Login</label>
						<input type='text' name='login' value='".$login."'  /> <br><br/>
					<label for='email'>Email</label>
						<input type='email' name='email' value='".$email."'  /><br/><br/>
					<label for='senha'>Senha</label>
						<input type='text' name='senha' value='".$senha."'  /> <br/><br/>
					<input type='submit' value='Atualizar' />
				</form>
				<br />
				<a href='home.php'>Voltar </a>
			";
		}
	?>
</body>
</html>
