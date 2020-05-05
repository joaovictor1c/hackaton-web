$(document).ready(function(){

	var SITE_URL = "https://epcriacao.com/portfolio-sites/anuncie-serra/sistema/";

	$("#btnEntrar").click(function(){

		var email = $("#email").val();
		var senha = $("#senha").val();

		function validateEmail(email) {

          var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          return regex.test(email);
        }

        if(validateEmail(email)){

        	if (email === "" || senha === "") {

        		$('.retorno').html('<div class="text-center alert alert-danger alert-dismissible fade show" role="alert"> <strong>ATENÇÃO! </strong>Favor preencher todos os campos.<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div>');

        	}else{

        		$.ajax({
					// Se for usar o método GET a url não ter o serialize e deverá ser concatenada com parametro rota-login/param/param
					url: SITE_URL+"controller-login.php",
					data:{email : email, senha : senha},
					type: 'POST',
					dataType: 'html',
					success:function(response){

						$('.retorno').html(response);
						$('#formLogin').trigger("reset");
					}
				});
        	}

        }else{

        	$('.retorno').html("<div class='text-center alert alert-warning alert-dismissible fade show' role='alert'> <strong>ATENÇÃO! </strong>Informe um endereço de e-mail válido!<button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div>");  
        }
		return false;
	})
})