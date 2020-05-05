<?php include "includes/config.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastrar</title>
	<?php include 'includes/head.php'; ?>
	<link rel="stylesheet" type="text/css" href='<?=DIRCSS."login.css";?>'>
	<script type="text/javascript" src='<?=DIRJS."ajax.form.js";?>'></script>
	<script type="text/javascript" src='<?=DIRJS."cadastrar.js";?>'></script>
</head>
<body>
<section class="container">
	<div class="mensagem"></div>
	<div class="card w-50 mx-auto">
		<div class="card-header bg-danger text-center text-light font-weight-bold">
			<a id="a-icone" href="home"><i id="i-icone" class="fas fa-home"></i></a>
			CADASTRO
		</div>
		<div class="card-body">
			<form id="formCadastrar" enctype="multipart/form-data" method="POST">
				<div class="form-group">
					<label for="nomeEmpresa">Empresa Responsável</label>
					<input type="text" class="form-control" id="nomeEmpresa" maxlength="50">
				</div>
				<div class="form-group">
					<label for="nomeBalcao">Nome do Balcão</label>
					<input type="text" class="form-control" id="nomeBalcao" maxlength="50">
				</div>
				<div class="form-group">
					<label for="email">E-mail</label>
					<input type="text" class="form-control" name="email" id="email" maxlength="50" aria-describedby="emailAjuda" placeholder="Informe seu e-mail" >
					<small id="emailAjuda" class="form-text text-muted">Seu e-mail não será compartilhado.</small>
				</div>
				<div class="form-group">
					<label for="senha">Senha</label>
					<input type="password" name="senha" id="senha" class="form-control" maxlength="50" placeholder="Palavra Passe" >
				</div>
				<button id="btnCadastrar" type="submit" class="btn btn-success btn-block mx-auto">Cadastrar</button>
			</form>
			<span class="d-block text-center mt-1"><a href="login" style="text-decoration: none;">Login</a></span>
		</div>
	</div>
</section>
</body>
</html>