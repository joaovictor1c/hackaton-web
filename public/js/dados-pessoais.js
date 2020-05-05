$(function(){

	function validateEmail(email) {

		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	}

	// var SITE_URL = "https://www.epcriacao.com/portfolio-sites/mega-speed/sistema/users/adm/";

	$("#btnEditar").on("click",function(){

		$(".formProp").prop("disabled",false);
		$("#btnSalvar").prop("disabled",false);
		$("#btnEditar").prop("disabled",true);
		$("#senha").attr("type","text").val("");
	});

	$("#btnSalvar").on("click",function(){

		var id      = $("#id").val();
		var empresa = $("#nomeEmpresa").val();
		var balcao  = $("#nomeBalcao").val();
		var email   = $("#email").val();
		var senha   = $("#senha").val();

		if (balcao !== '' && email !== '') {

			if(validateEmail(email)){

	    			//  $.ajax({
					// 	url: SITE_URL+"ajax-exibir-dados.php",
					// 	data:{id:id, nome:nome, email:email, senha:senha},
					// 	type: 'POST',
					// 	dataType: 'html',

					// 	success:function(response){

					// 		$('.mensagem').html(response);
					// 		$(".formProp").prop("disabled",true);
					// 		$("#btnSalvar").prop("disabled",true);
					// 		$("#btnEditar").prop("disabled",false);
					// 		$("#senha").attr("type","password").val("12345");
					// 		setTimeout(function(){ location.reload(); }, 1500);
					// 	}
					// });

	        }else{

	            $('.mensagem').html("<div class='text-center alert alert-warning alert-dismissible fade show' role='alert'> <strong>ATENÇÃO! </strong>Informe um endereço de e-mail válido.<button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div>");  

	        }

	    }else{

	       	$('.mensagem').html("<div class='text-center alert alert-warning alert-dismissible fade show' role='alert'> <strong>ATENÇÃO! </strong>Favor preencher os campos obrigatórios.<button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div>");

	    }
	});
});