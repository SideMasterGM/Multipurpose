<?php
    include ('app/core/core.php');
    include (PF_HEAD);

    // include (PD_HEADERS.'/h1-dark-bg.php');
    // include (PD_SLIDERS.'/1.php');
    // include (PD_SERVICES.'/1.php');

    // echo $Info->getPhone(1)['number'];

    // echo $Info->getService(2, 5)['content'];

    // include (PD_FOOTERS.'/1.php');

    $test = "¡Esto tiene que funcionar correctamente!";
    // echo $Info->getService(1, 30)['content'];

    echo get_words($test, 5);

    function get_words($sentence, $count = 23){
    	$palabras = explode(" ", $sentence);
		$numPalabras = count($palabras);

		if ($numPalabras > $count) {
		    $offset = $count - 1;
		    while (in_array($palabras[$offset], $noTerminales) && $offset < $numPalabras) { $offset++; }
		    return implode(" ", array_slice($palabras, 0, $offset + 1));
		}

		return $sentence;
    }

    include (PF_FOOT);