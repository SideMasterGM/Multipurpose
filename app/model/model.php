<?php
	class Company {
		public $basename, 	$pagename;
		public $company, 	$address;

		public $phones 	= array(),	$emails = array(), 
			   $phrases = array(),	$home 	= array(), 
			   $about 	= array(), 	$service= array(), 
			   $review 	= array();

		public $services, 		$payment,
			   $experience,		$schedule, 
			   $schedule_short,	$estimates,
			   $cover,			$license,
 			   $lic;

 		public $googlemap,			$facebook,
 			   $twitter,			$linkedin,
 			   $googlemybusiness,	$yelp, 
 			   $homeadvisor,		$buzzfile,
			   $businessfinder,		$manta,
			   $yellowbot,			$houzz,	
			   $dexknow;

		#SEO
		public $domain, 		$satisfaction, 
			   $locality, 		$region, 
			   $street_address, $bilingual, 
			   $seo_convert;

		function __construct(){
			$this->domain 	= $_SERVER['HTTP_HOST'];
			$this->basename = $this->filescript();

		    switch ($this->basename) {
		    	case 'index':
		    		$this->pagename = 'Home';
		    		break;
		    	case 'about': 
		    		$this->pagename = 'About';
		    		break;
		    	case 'services': 
		    		$this->pagename = 'Services';
		    		break;
		    	case 'testimonials': 
		    		$this->pagename = 'Testimonials';
		    		break;
		    	case 'videos': 
		    		$this->pagename = 'Videos';
		    		break;
		    	case 'portfolio': 
		    		$this->pagename = 'Portfolio';
		    		break;
		    	case 'contact': 
		    		$this->pagename = 'Contact Us';
		    		break;
		    	default:
		    		$this->pagename = 'Unknown';
		    		break;
		    }
		}

		public function filescript(){
			return basename($_SERVER['SCRIPT_FILENAME'], '.php');
		}

		public function addPhone($phone){
			array_push($this->phones, $phone);
		}

		public function getPhone($number){
			if (is_array($this->phones)){
				if (isset($this->phones[$number - 1])){

					$PhoneConvert = str_replace(str_split('(-)/:*?"<>|\t\n\r'), '', $this->phones[$number - 1]);
					$PhoneRef = "tel:".str_replace(str_split(' '), '', $PhoneConvert);

					return ['number' => $this->phones[$number - 1], 'PhoneConvert' => $PhoneConvert, 'PhoneRef' => $PhoneRef];
				}
				$msg = 'This field does not exist';
				return ['number' => $msg, 'PhoneConvert' => $msg, 'PhoneRef' => $msg];
			}

			$msg = 'There are not phone records';
			return ['number' => $msg, 'PhoneConvert' => $msg, 'PhoneRef' => $msg];
		}

		public function addEmail($email){
			array_push($this->emails, $email);
		}

		public function getEmail($number){
			if (is_array($this->emails)){
				if (isset($this->emails[$number - 1]))
					return ['Email' => $this->emails[$number - 1], 'MailRef' => 'mailto:'.$this->emails[$number - 1]];

				$msg = 'This field does not exist';
				return ['Email' => $msg, 'MailRef' => $msg];
			}

			$msg = 'There are not emails records';
			return ['Email' => $msg, 'MailRef' => $msg];
		}

		public function getWords($sentence, $count = 23){
			return implode(' ', array_slice(str_word_count($sentence,1), 0, $count));
		}

		public function getSEOPhone($id_phone){
			$Phone = $this->getPhone($id_phone)['PhoneConvert'];
			
			if (str_word_count($Phone) > 2)
				return ['SEOConvert' => $Phone, 'SEOPhone' => $Phone];

			$convert = str_replace(str_split(' '), '-', $Phone);
			
			return ['SEOConvert' => $convert, 'SEOPhone' => '+1'.$convert];
		}

		public function addPhrase($phrase){
			array_push($this->phrases, $phrase);
		}

		public function getPhrase($number){
			$phrases = $this->phrases;

			if (is_array($phrases)){
				if (isset($phrases[$number - 1]))
					return $phrases[$number - 1];

				return 'This field does not exist';
			}

			return 'There are not phrases records';
		}

		public function addHome($home){
			array_push($this->home, $home);
		}

		public function getHome($number, $number_words = 0){
			$home = $this->home;

			if (is_array($home)){
				if (isset($home[$number - 1])){
					if ($number_words != 0)
						return $this->getWords($home[$number - 1], $number_words);

					return $home[$number - 1];
				}

				return 'This field does not exist';
			}

			return 'There are not home records';
		}

		public function addAbout($about){
			array_push($this->about, $about);
		}

		public function getAbout($number, $number_words = 0){
			$about = $this->about;

			if (is_array($about)){
				if (isset($about[$number - 1])){
					if ($number_words != 0)
						return $this->getWords($about[$number - 1], $number_words);

					return $about[$number - 1];
				}

				return 'This field does not exist';
			}

			return 'There are not home records';
		}

		public function addService($title, $content){
			array_push($this->service, ['title' => $title, 'content' => $content]);
		}

		public function getService($number, $number_words = 0){
			$service = $this->service;

			if (is_array($service)){
				if (isset($service[$number - 1])){
					if ($number_words != 0)
						return ['title' => $this->service[$number -1]['title'],  'content' => $this->getWords($service[$number - 1]['content'], $number_words)];

					return ['title' => $this->service[$number -1]['title'],  'content' => $this->service[$number -1]['content']];
				}

				$msg = 'This field does not exist';
				return ['title' => $msg, 'content' => $msg];
			}

			$msg = 'There are not home records';
			return ['title' => $msg, 'content' => $msg];
		}

		public function addReview($name, $location, $comment, $stars = 5){
			array_push($this->review, ['name' 		=> $name, 
									   'location' 	=> $location, 
									   'comment' 	=> $comment, 
									   'stars' 		=> $stars]
			);
		}

		public function getReview($number, $number_words = 0){
			$review = $this->review;

			if (is_array($review)){
				if (isset($review[$number - 1])){

					$comment = $review[$number - 1]['comment'];

					if ($number_words != 0)
						$comment = $this->getWords($comment, $number_words);

					return ['name' 		=> $this->review[$number -1]['name'],  
							'location' 	=> $this->review[$number -1]['location'],
							'comment' 	=> $comment, 
							'stars' 	=> $this->review[$number -1]['stars']];

				}

				$msg = 'This field does not exist';
				return ['name' => $msg, 'location' => $msg, 'comment' => $msg, 'stars' => $msg];
			}

			$msg = 'There are not home records';
			return ['name' => $msg, 'location' => $msg, 'comment' => $msg, 'stars' => $msg];
		}
	}