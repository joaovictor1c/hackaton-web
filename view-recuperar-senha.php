<?php include "includes/config.php";?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Recuperar Senha</title>
	<?php include 'includes/head.php'; ?>
	<link rel="stylesheet" type="text/css" href='<?=DIRCSS."login.css";?>'>
	<script type="text/javascript" src='<?=DIRJS."recuperar-senha.js";?>'></script>
</head>
<body>
<section class="container">
	<div class="mensagem mt-3"></div>
	<div class="card w-50 mx-auto">
		<div class="card-header bg-danger text-center text-light font-weight-bold">
			<a id="a-icone" href="login"><i id="i-icone" class="fas fa-home"></i></a>
			ESQUECI A SENHA
		</div>
		<div class="card-body">
			<form id="formLogin" name="formLogin" method="post">
				<div class="form-group">
					<label for="email">E-mail</label>
					<input type="email" class="form-control" id="email" maxlength="50" aria-describedby="emailAjuda" placeholder="Informe seu e-mail" >
					<small id="emailAjuda" class="form-text text-muted">A senha será enviada para seu e-mail.</small>
				</div>
				<button id="btnSolicitar" type="submit" class="btn btn-success btn-block mx-auto">Solicitar</button>
			</form>
			<span class="d-block text-center mt-1"><a href="login">Fazer o Login</a></span>
		</div>
	</div>
</section>
</body>
</html>