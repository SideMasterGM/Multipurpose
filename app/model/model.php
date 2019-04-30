<?php
	class Company {
		public $basename;
		public $pagename;
		public $company;
		public $address;

		public $phones = array();
		public $emails = array();

		public $services;
		public $payment;
		public $experience;

		public $schedule;
		public $schedule_short;

		public $estimates;
		public $cover;
		public $license;
		public $lic;

		public $googlemap;

		public $facebook;
		public $twitter;
		public $linkedin;

		function __construct(){
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
				if (isset($this->emails[$number - 1])){
					return ['email' => $this->emails[$number - 1], 'MailRef' => 'mailto:'.$this->emails[$number - 1]];
				}
				$msg = 'This field does not exist';
				return ['email' => $msg, 'MailRef' => $msg];
			}

			$msg = 'There are not emails records';
			return ['email' => $msg, 'MailRef' => $msg];
		}

	}