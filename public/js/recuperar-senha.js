$(function(){

	// var SITE_URL = "https://www.epcriacao.com/portfolio-sites/mega-speed/sistema/";

	$("#btnSolicitar").on("click",function(){

		var email = $("#email").val();

		if(email === ""){
			
			var msg = '<div class="text-center alert alert-danger alert-dismissible fade show" role="alert"> <strong>ATENÇÃO: </strong>Favor informar o e-mail!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			
			$(".mensagem").html(msg);
	
		}else{
			
			// $.ajax({

			// 	url: SITE_URL+"ajax-recuperar-senha.php",
			// 	data: {email:email},
			// 	type: 'POST',
			// 	dataType: 'html',
			// 	success:function(response){

			// 		$('.mensagem').html(response);
			// 		$('form').trigger("reset");
			// 	}
			// });
		}
		return false;
	});
})