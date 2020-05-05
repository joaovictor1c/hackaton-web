<?php
include ("includes/config.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Dados Pessoais</title>
	<?php include "users/filial/includes/head.php"; ?>
	<style type="text/css">
		form{max-width: 500px;display: block;margin: 0 auto;}
		#id{display: none;}
		.obg{color: red;}
	</style>
	<script type="text/javascript" src='<?=DIRJS."dados-pessoais.js";?>'></script>
</head>
<body>
	<?php include "includes/menuCpanel.php"; ?>
	<section id="main" class="container-fluid">
		<div class="mensagem"></div>
		<div class="card">
			<div class="card-header bg-danger text-light text-center font-weight-bold">MEUS DADOS</div>
			<div class="card-body">
				<form>
					<input type="text" id="id" value="">
					<div class="form-group">
						<label for="nomeEmpresa">Empresa Responsável:</label>
						<input type="text" class="form-control formProp" id="nomeEmpresa" disabled value="">
					</div>
					<div class="form-group">
						<label for="nomeBalcao">Nome do Balcão: <span class="obg">*</span></label>
						<input type="text" class="form-control formProp" id="nomeBalcao" disabled value="">
					</div>
					<div class="form-group">
						<label for="email">E-mail: <span class="obg">*</span></label>
						<input type="mail" class="form-control formProp" id="email" disabled value="">
					</div>
					<div class="form-group">
						<label for="senha">Senha:</label>
						<input type="password" class="form-control formProp" id="senha" disabled value="12345">
					</div>
				</form>
			</div>
			<div class="card-footer d-flex justify-content-center">
				<button id="btnEditar" class="btn btn-success mr-2">Editar</button>
				<button id="btnSalvar" class="btn btn-success ml-2" disabled>Salvar</button>
			</div>
		</div>
	</section>
</body>
<html>