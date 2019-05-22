<?php
	#PD  = Path Directory
	#PDS = Path Directory Static
	#PF  = Path File

	$Path = $_SERVER['DOCUMENT_ROOT']."/".explode("/", $_SERVER['REQUEST_URI'])[1];
	if (explode("/", $_SERVER['REQUEST_URI'])[1] != basename(getcwd()))
		$Path = $_SERVER['DOCUMENT_ROOT'];

	define ("PD_INDEX", 	$Path."/");
	define ("PD_APP", 		$Path."/app");

	define ("PD_SRC", 		"app/src");
		define ("PD_SRC_ASSETS", 	"app/src/assets");

	define ("PD_VIEWS",		$Path."/app/views");
		define ("PD_HEADERS",		$Path."/app/views/headers");
		define ("PD_SHARES",		$Path."/app/views/shares");
		define ("PD_SLIDERS",		$Path."/app/views/sliders");
		define ("PD_SERVICES",		$Path."/app/views/services");

	define ("PD_ASSETS",	$Path."/app/src/assets");
		define ("PD_ASSETS_SLIDERS",	"app/src/assets/slider");
		define ("PD_ASSETS_SERVICES",	"app/src/assets/services");
		define ("PD_ASSETS_ELEMENTS",	"app/src/assets/elements");


	define ("PD_MODEL",		$Path."/app/model");
		define ("PF_MODEL",		$Path."/app/model/model.php");
		define ("PF_TEXT",	$Path."/app/model/text.php");
		
	define ("PD_CTL",$Path."/app/controller");
		define ("PD_CTL_JS", 	$Path."/app/controller/js");
		define ("PD_CTL_PHP", 	$Path."/app/controller/php");
		define ("PD_CTL_SRC", 	$Path."/app/controller/src");
		define ("PDS_CTL_SRC", 	"app/controller/src");
		define ("PDS_CTL_JS", 	"app/controller/js");
		define ("PDS_CTL_PHP", 	"app/controller/php");
		define ("PD_CORE", 		$Path."/app/core");
		
		define ("PF_HEAD", 		$Path."/app/core/head.php");
		define ("PF_CORE", 		$Path."/app/core/core.php");
		define ("PF_FOOT", 		$Path."/app/core/foot.php");
		
		define ("PD_SRC_CSS", 	"app/src/css");
		define ("PD_SRC_JS", 	"app/src/js");
		
		define ("FAVICON", 		"app/src/assets/favicon.png");

	define ("PD_GRAPHIC", 	$Path."/app/graphic");
