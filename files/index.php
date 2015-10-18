<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="_main.css" />
</head>
<body>
	
	<main class="content">
		<section class="cad">
			<header>
				<h2>Cadastro</h2>
			</header>
			<form method="post" name="form" action="insert.php">
				<input type="text" name="login" placeholder="login" required /> 
				<input type="email" name="email" placeholder="email" required /> 
				<input type="password" name="senha" placeholder="senha" required />
				<input type="hidden" name="id" id="id" />
				<input type="submit" name="insert" value="Cadastrar" />
			</form>
		</section>
		
		<section class="log">
			<header>
				<h2>Login</h2>
			</header>
			<form method="post" name="form" action="logar.php">
				<input type="text" name="login" placeholder="login" required /> 
				<input type="password" name="senha" placeholder="senha" required /> 
				<input type="hidden" name="id" id="id" />
				<input type="submit" name="logar" value="Logar" />
			</form>
		</section>
	</main>
</body>
</html>
