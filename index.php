<?php 

	function isfile($file){

		if (is_file($file)) {

			include $file;

		}else{

			include "view-404.php";
		}
	}

	$url = (isset($_GET["url"])) ? $_GET["url"] : "login";

	if ($url == "login") {
		
		isfile("view-login.php");

	}elseif($url == "cadastrar"){

		isfile("view-cadastrar.php");

	}elseif($url == "recuperar-senha"){

		isfile("view-recuperar-senha.php");

	}elseif($url == "logout"){

		isfile("logout.php");

	}else{

		$url = array_filter(explode("/", $url));

		# Página de entrada para o painel
		if ($url[0] == "painel") {
			
			switch ($url[1]) {

				case 'filial':
					isfile("users/filial/cpanel.php");
				break;

				case 'dados-pessoais':
					isfile("users/filial/view-dados-pessoais.php");
				break;

				case 'exibir-solicitacoes':
					isfile("users/filial/view-exibir-solicitacoes.php");
				break;

				default:
					isfile($url[0]);
				break;
			}		
		
		# Páginas internas ou Não encontrada
		}else{

			isfile($url[0]);
		}
	}
 ?>