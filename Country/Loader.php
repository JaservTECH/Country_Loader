<?php
namespace Country;
class Loader {
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();}return self::$instance;}
    
	private $targetCountry = "ID";
	public function setAs($country = 'ID'){
		if(is_dir(__DIR__."\\".$country)){
			$this->targetCountry = $country;
		}else{
			$this->targetCountry = null;
		}
		return $this;
	}
	public function State(){
		if(is_null($this->targetCountry)){
			$state = $this->targetCountry."\\State";
			return $state::Get()
		}else{
			return false;
		}
	}
	
	
}