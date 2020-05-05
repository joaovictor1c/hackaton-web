var html = '<li><a href="#"><i class="fa fa-bell"></i> Notificações</a></li> <li><a href="#"><i class="fa fa-sign-out" ></i> Sair</a></li>'; //CTRL + J

	$(document).ready(function(){

		if ($(window).width() <= 600) { 
			$("#nav-right-max-1000px").html(html);
		};
		$(".navbar-toggler").click(function(){
			$("#menu-vertical").toggle();
		});
		$(".open-dropdown").click(function(){
			$(".dropdown", this).toggle();
			var verify = $(".fa", this).hasClass("fa-caret-right");
			if (verify) {
				$(".fa-caret-right", this).toggleClass("fa-caret-right").addClass("fa-caret-down");
			}else{
				$(".fa-caret-down", this).toggleClass("fa-caret-down").addClass("fa-caret-right");
			}
		});
	});
	$(window).resize(function(){

		if ($(window).width() > 600) {
			$('#menu-vertical').removeAttr("style");
		}else{
			$("#nav-right-max-1000px").html(html);
		}   
	});