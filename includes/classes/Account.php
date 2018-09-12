<?php
	class Account {
		
		public function __construct() {

		}

		public function register() {
			$this->validateUsername($username);
			$this->validateFirstname($firstname);
			$this->validateLastname($lastnmae);
			$this->validateEmail($email);
			$this->validatePasswords($password, $password2);			
		}

		private function validateUsername($un) {

		}

		private function validateFirstname($fn) {
			
		}

		private function validateLastname($ln) {
			
		}

		private function validateEmail($em) {
			
		}

		private function validatePasswords($pw, $pw2) {
			
		}
	}
?>