<?php
class CountryLoader {
	private $targetCountry = null;
	public function loadCountry($country){
		if(is_dir(__DIR__."\\".$country)){
			$this->targetCountry = $country;
		}else{
			$this->targetCountry = false;
		}
		return $this;
	}
	public function getProvince($index='all',$md5=false){
		if(is_null($this->targetCountry)){
			return "Country not set";
		}
		if(!is_file(__DIR__."\\".$this->targetCountry."\\".$this->targetCountry."Loader.php")){
			return "Province loader not found";
		}
		require_once __DIR__."\\".$this->targetCountry."\\".$this->targetCountry."Loader.php";
		$loader = $this->targetCountry."Loader";
		$loader = new $loader();
		if($md5){
			$index = $this->getMD5Conversion($index, $loader);
			if(is_null($index)) return null;
		}
		if($index."" == 'all') 
			$loader->initialize(1,true);
		else {
			$index = $this->getConversion($index, $loader);
			if(is_null($index)) return null;
			$loader->initialize($index);
		}
		return $loader;
	}
	private function getMD5Conversion($index,$loader){
		$listKey = $loader->getListKey();
		$rest = null;
		foreach($listKey as $value){
			if(md5($value) == $index){
				$rest = $value;
				break;
			}
		}
		return $rest;
	}
	private function getConversion($index,$loader){
		$listKey = $loader->getListKey();
		$rest = null;
		foreach($listKey as $value){
			if($value == $index){
				$rest = $value;
				break;
			}
		}
		return $rest;
	}
}