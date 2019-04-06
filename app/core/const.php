<?php
	#PD  = Path Directory, PDS = Path Directory Static, PF  = Path File

	$Path = $_SERVER['DOCUMENT_ROOT']."/".explode("/", $_SERVER['REQUEST_URI'])[1];
	if (explode("/", $_SERVER['REQUEST_URI'])[1] != basename(getcwd()))
		$Path = $_SERVER['DOCUMENT_ROOT'];

	define ("PD_INDEX", 	$Path."/");
	define ("PD_APP", 		$Path."/app");
		
	define ("PD_CTL",$Path."/app/controller");
		define ("PD_CTL_JS", 	$Path."/app/controller/js");
		define ("PD_CTL_PHP", 	$Path."/app/controller/php");
		define ("PD_CTL_SRC", 	$Path."/app/controller/src");
		define ("PDS_CTL_SRC", 			"app/controller/src");
		define ("PDS_CTL_JS", 			"app/controller/js");
		define ("PDS_CTL_PHP", 			"app/controller/php");
		define ("PD_CORE", 		$Path."/app/core");
		
		define ("PF_HEAD", 		$Path."/app/core/head.php");
		define ("PF_CORE", 		$Path."/app/core/core.php");
		define ("PF_FOOT", 		$Path."/app/core/foot.php");
		
		define ("PD_SRC_CSS", 	"app/src/css");
		define ("PD_SRC_JS", 	"app/src/js");
		
		define ("FAVICON", 		"app/src/img/favicon.png");
	define ("PD_GRAPHIC", 	$Path."/app/graphic");
	define ("PD_SRC", 		$Path."/app/src");
?>