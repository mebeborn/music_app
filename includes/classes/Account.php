<?php

	class Account {

		private $errorArray;
		
		public function __construct() {
			$this->errorArray = array();
		}

		public function register($fn, $ln, $un, $pw, $pw2, $em) {

			$this->validateUsername($un);
			$this->validateFirstname($fn);
			$this->validateLastname($ln);
			$this->validateEmail($em);
			$this->validatePasswords($pw, $pw2);

			if(empty($this->arrorArray)) {
				//Insert into DB
				return true;
			}else {
				return false;
			}		

		}

		public function getError($error) {
			if(!in_array($error, $this->errorArray)) {
				$error = "";
			}

			return "<span class='errorMessage'>$error</span>";
		}

		private function validateUsername($un) {

			if (strlen($un) < 5 || strlen($un) > 15) {
				array_push($this->errorArray, Constants::$usernameCharacters);
				return;
			}

			//TODO: Check if the username exists

		}


		private function validateFirstname($fn) {

			if (strlen($fn) < 2 || strlen($fn) > 20) {
				array_push($this->errorArray, Constants::$firstNameCharacters);
				return;
			}

		}

		private function validateLastname($ln) {

			if (strlen($ln) < 2 || strlen($ln) > 20) {
				array_push($this->errorArray, Constants::$lastNameCharacters);
				return;
			
			}
		}

		private function validateEmail($em) {

			if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
				array_push($this->errorArray,  Constants::$emailInvalid);
			}

			//TODO: Check if the username exists

		}

		private function validatePasswords($pw, $pw2) {

			if($pw != $pw2) {
				array_push($this->errorArray, Constants::$passwordsDoNoMatch);
			}

			if(preg_match('/[^A-Za-z0-9]/', $pw)) {
				array_push($this->errorArray, Constants::$passwordNotAlphanumeric);
				return;
			}

			if (strlen($pw) < 5 || strlen($pw) > 30) {
				array_push($this->errorArray, Constants::$passwordCharacters);
				return;
			}

		}
	
	}
?>