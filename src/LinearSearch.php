<?php
	class LinearSearch{
		private $data = NULL;
		private $key = NULL;

		public function __construct($data=NULL,$key){
			if($this->checkData($data) === true)
				$this->data = $data;
			else
				$this->data = array();

			if($this->checkKey($key) === true)
				$this->key = $key;
		}

		private function checkData($data){
			if(isset($data) && is_array($data) && !empty($data))
				return true;
			else
				return false;
		}

		private function checkKey($key){
			if(isset($key) && $key)
				return true;
			else
				return false;
		}

		public function setData($data){
			if($this->checkData($data) === true)
				$this->data=$data;
		}

		public function setKey($key){
			if($this->checkKey($key)===true)
				$this->key = $key;
		}

		public function search(){
			if($this->checkData($this->data) === false || $this->checkKey($this->key) === false)
				return NULL;

			for ($i=0; $i < count($this->data); $i++) { 
					if($this->data[$i] == $this->key)
						return $i+1;
			}
			return -1;
		}
	}

$arr = array(3,2,7,4,9,8,5,1,6);
$key = 8;
$search = new LinearSearch($arr,$key);
echo $search->search();





