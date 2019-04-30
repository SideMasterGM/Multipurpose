<?php
	$Info = new Company();

	$Info->company = 'Vazquez Painting and Remodeling';
	$Info->address = 'Houston, TX';

	$Info->addPhone('(832) 845-6401');
	$Info->addPhone('(222) 222-2222');

	echo $Info->getPhone(1)['PhoneRef'];

	$color = ['dominant' => '', 'tonic' => '', 'mediation' => ''];