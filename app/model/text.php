<?php
	$Info = new Company();

	$Info->company = 'Vazquez Painting and Remodeling';
	$Info->address = 'Houston, TX';

	$Info->addPhone('(832) 845-6401');
	$Info->addPhone('(666) 666-6401');
	$Info->addEmail('contact@vazquezpaintingandremodeling.com');
	$Info->addEmail('israelsantos179@gmail.com');

	$Info->services 	= 'Residential and Commercial Services';
	$Info->payment 		= 'We Accept Cash and Checks';
	$Info->experience 	= '13 Years of Experience';

	$Info->schedule 		= 'Monday to Saturday from 7 a.m. to 6 p.m.';
	$Info->schedule_short	= 'Mon - Sat 7am to 6pm';

	$Info->estimates	= 'Free Estimates Are Available';
	$Info->cover		= 'We Cover<br class="d-sm-none"> 80 Miles Around Houston';
	$Info->license		= 'We Are Licensed';
	$Info->lic			= '';

	$Info->googlemap	= '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d443087.54862369417!2d-95.68148741985043!3d29.817478217443124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640b8b4488d8501%3A0xca0d02def365053b!2sHouston%2C+Texas%2C+EE.+UU.!5e0!3m2!1ses!2sni!4v1555512550406!5m2!1ses!2sni" class="googlemap" allowfullscreen></iframe>';

	$Info->facebook	= '#';
	$Info->twitter	= '#';
	$Info->linkedin	= '#';

	#SEO
	$Info->domain;
	$Info->satisfaction		= '';
	$Info->locality			= '';
	$Info->region			= '';
	$Info->street_address	= '';
	$Info->bilingual		= '';
	$Info->seo_convert 		= $Info->getSEOPhone(1)['SEOConvert'];

	// echo $Info->seo_convert;

	// echo $Info->getWords($Info->services, 20);
	// echo $Info->getEmail(1)['Email'];
	// echo $Info->getPhone(1)['PhoneRef'];
	$color = ['dominant' => '', 'tonic' => '', 'mediation' => ''];