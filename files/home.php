
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>

	<?php
		if($_COOKIE['login'] == false){
			header("Location:index.php");
		}
	?>

	<p><?php echo "Ola ". $_COOKIE['login']; ?></p>
	<h2>Usuários</h2>
	<?php
		$user = 'root';
		$pass = '';
		$pdo = new PDO('mysql:host=localhost;dbname=crudpdo',$user,$pass);

		echo "<table name='' id='' border='1' cellspacing='5'>";
		echo "<tr><th>ID</th><th>Login</th><th>Email</th><th>Senha</th><th>Ações</th></tr>";

		$result = $pdo->prepare("SELECT * FROM user ");
		$result->execute();

		while( $row = $result->fetch(PDO::FETCH_ASSOC)){
			$id    = $row['id'];
			$login = $row['login'];
			$email = $row['email'];
			$senha = $row['senha'];

			echo "<tr>";
			echo "<td>" . $id . "</td>";
			echo "<td>" . $login . "</td>";
			echo "<td>" . $email . "</td>";
			echo "<td>" . $senha . "</td>";
			echo "<td><a href='edit.php?id=".$id."'>Editar</a> ";
			echo " <a href='delete.php?id=".$id."'>Deletar</a></td>";
			echo "</tr>";
		}
		echo "</table>";
	?>	

	<a href="index.php">Index</a>
</body>
</html>
