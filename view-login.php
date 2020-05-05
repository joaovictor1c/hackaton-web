<?php
include "includes/config.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<?php include 'includes/head.php'; ?>
	<link rel="stylesheet" type="text/css" href='<?=DIRCSS."login.css"; ?>'>
	<script type="text/javascript" src='<?=DIRJS."/login.js"; ?>'></script>
	<style type="text/css">
		span a{text-decoration: none!important;}
	</style>
</head>
<body>
<section class="container">
	<div class="retorno"></div>
	<div class="card w-50 mx-auto">
		<div class="card-header bg-danger text-center text-light font-weight-bold">
			<a id="a-icone" href="login"><i id="i-icone" class="fas fa-home"></i></a>
			LOGIN
		</div>
		<div class="card-body">
			<form id="formLogin" name="formLogin" method="post">
				<div class="form-group">
					<label for="email">E-mail</label>
					<input type="email" class="form-control" id="email" maxlength="50" aria-describedby="emailAjuda" placeholder="Informe seu e-mail" >
					<small id="emailAjuda" class="form-text text-muted">Seu e-mail não será compartilhado.</small>
				</div>
				<div class="form-group">
					<label for="senha">Senha</label>
					<input type="password" class="form-control" id="senha" maxlength="50" placeholder="Palavra Passe" >
				</div>
				<!-- <button id="btnEntrar" type="submit" class="btn btn-success btn-block mx-auto">Entrar</button> -->
				<a type="button" class="btn btn-success btn-block mx-auto" href="painel/filial">Entrar</a>
			</form>
			<span class="d-block text-center mt-2"><a href="cadastrar">Registrar-se</a></span>
			<span class="d-block text-center mt-1"><a href="recuperar-senha">Esqueceu a Senha?</a></span>
		</div>
	</div>
</section>
</body>
</html>