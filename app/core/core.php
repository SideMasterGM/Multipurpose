<?php
    @$_SESSION['getConsts'] = $_SERVER['DOCUMENT_ROOT']."/".explode("/", $_SERVER['REQUEST_URI'])[1]."app/core/const.php";
	
	if (!file_exists(@$_SESSION['getConsts']))
		@$_SESSION['getConsts'] = $_SERVER['DOCUMENT_ROOT']."/".explode("/", $_SERVER['REQUEST_URI'])[1]."/app/core/const.php";

    include (@$_SESSION['getConsts']);
?>