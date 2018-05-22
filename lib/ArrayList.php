<?php
	class ArrayList {
	
		private $array;
		private $void_array = [];
		
		public function __construct($array = []) {
			$this->array = $array;
		}
		
		public function get($key = null, $by_value = false) {
			
			return ($by_value) ? (($key) ? array_keys($this->array, $key) : $this->array) 
				: (($key) ? (isset($this->array[$key]) ? $this->array[$key] : false) 
					: $this->array);
		}
		
		public function add($key, $value = null) {
			$this->array[$key] = $value;
			return (isset($this->array[$key]) || $this->array[$key] === null) && $this->array[$key] === $value;
		}
		
		public function del(&$obj, $key = null) {
			if($key) {
				unset($this->array[$key]);
				return !isset($this->array[$key]);
			}
			return false;
		}
		
		public function upd($key, $new_value = null) {
			return (isset($this->array[$key]) || $this->array[$key] === null) ? $this->add($key, $new_value) : false;
		}
		
		public function __debugInfo() {
			return [
				'array' => $this->get()
			];
		}
	}
