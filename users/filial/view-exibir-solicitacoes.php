<?php
include ("includes/config.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Solicitações de Transporte</title>
	<?php include "users/filial/includes/head.php"; ?>
	<!-- dataTables -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
	
	<style type="text/css">
		.a{color: black;text-decoration: none;font-weight: bold; }
		.a:hover{color: unset;text-decoration: none; } 
	</style>
</head>
<body>
	<?php include "includes/menuCpanel.php"; ?>
	<section id="main" class="container-fluid">
		<!-- Conteúdo - Usar a classe BOTTOM para obter espaço entre as Div pai -->
		<div class="card bottom">
			<div class="card-header bg-danger text-light text-center font-weight-bold">SOLICITAÇÕES DE TRANSPORTE</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="example" class="table table-striped table-bordered">
						<thead class="bg-primary text-center">
							<tr>
								<th>TRANSAÇÃO</th>
								<th>MOTORISTA</th>
								<th>RG</th>
								<th>CPF</th>
								<th>CLIENTE</th>
								<th>ENDEREÇO</th>
								<th>PRODUTO</th>
								<th>AÇÃO</th>
							</tr>
						</thead>
						<tbody>
							<?php for ($i=0; $i < 5; $i++) { ?>
							<tr>
								<td>C<?=$i+2;?>N<?=$i+1;?>J-B<?=$i+3;?>M8E-DD89W</td>
								<td>Fulano de Tal</td>
								<td>0000000</td>
								<td>000.000.000-00</td>
								<td>Beltrano</td>
								<td>Rua Tal</td>
								<td>Celular <?=$i;?></td>
								<td>
									<a href="#">
										<button type="button" class="btn btn-success">
											<i class="fas fa-check"></i> Liberar
										</button>
									</a>									
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
<script type="text/javascript">

	$(document).ready(function() {

		$('#example').dataTable({
			"bJQueryUI": true,
			"sPaginationType": "full_numbers",
			"sDom": '<"H"Tlfr>t<"F"ip>',
			"oLanguage": {
				"sLengthMenu": "Mostrar _MENU_ registros por página",
				"sZeroRecords": "Nenhum registro encontrado",
				"sInfo": "Mostrando _START_ / _END_ de _TOTAL_ registro(s)",
				"sInfoEmpty": "Mostrando 0 / 0 de 0 registros",
				"sInfoFiltered": "(filtrado de _MAX_ registros)",
				"sSearch": "Pesquisar: ",
				"oPaginate": {
					"sFirst": "Início",
					"sPrevious": "Anterior",
					"sNext": "Próximo",
					"sLast": "Último"
				}
			},
			"aaSorting": [[0, 'desc']],
			"aoColumnDefs": [
			{"sType": "num-html", "aTargets": [0]}

			]
		}); 
	});
</script>
</body>
<html>
