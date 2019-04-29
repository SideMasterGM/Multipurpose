<?php
    @$_SESSION['getConsts'] = $_SERVER['DOCUMENT_ROOT'].'/'.explode('/', $_SERVER['REQUEST_URI'])[1].'app/core/const.php';
	
	if (!file_exists(@$_SESSION['getConsts']))
		@$_SESSION['getConsts'] = $_SERVER['DOCUMENT_ROOT'].'/'.explode('/', $_SERVER['REQUEST_URI'])[1].'/app/core/const.php';

    include (@$_SESSION['getConsts']);
    include (PD_MODEL_TEXT);

    $basename = basename($_SERVER['SCRIPT_FILENAME'], '.php');

    switch ($basename) {
    	case 'index':
    		$pagename = 'Home';
    		break;
    	case 'about': 
    		$pagename = 'About';
    		break;
    	case 'services': 
    		$pagename = 'Services';
    		break;
    	case 'testimonials': 
    		$pagename = 'Testimonials';
    		break;
    	case 'videos': 
    		$pagename = 'Videos';
    		break;
    	case 'portfolio': 
    		$pagename = 'Portfolio';
    		break;
    	case 'contact': 
    		$pagename = 'Contact Us';
    		break;
    	default:
    		$pagename = 'Unknown';
    		break;
    }

    echo $pagename;