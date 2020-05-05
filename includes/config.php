<?php 

// Arquivos diretórios raízes
$pastaInterna = "";

// Caminho Absoluto do Servidor
define("DIRPAGE", "https://{$_SERVER['HTTP_HOST']}/portfolio-sites/vtexpress/{$pastaInterna}");

// Caminho da URL no Servidor
if (substr($_SERVER['DOCUMENT_ROOT'], -1) == "/") {
	define("DIRREQ", "{$_SERVER['DOCUMENT_ROOT']}portfolio-sites/vtexpress/{$pastaInterna}");
} else {
	define("DIRREQ", "{$_SERVER['DOCUMENT_ROOT']}/portfolio-sites/vtexpress/{$pastaInterna}");
}

#Diretórios Específicos
// define("DIRAUDIO", DIRPAGE."public/audio/");
define("DIRCSS", DIRPAGE."public/css/");
// define("DIRDESIGN", DIRPAGE."public/design/");
// define("DIRFONTES", DIRPAGE."public/fontes/");
define("DIRIMG", DIRPAGE."public/img/");
define("DIRJS", DIRPAGE."public/js/");
// define("DIRVIDEO", DIRPAGE."public/video/");

 ?>