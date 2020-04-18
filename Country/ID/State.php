<?php
namespace Country\ID;
class State {
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();}return self::$instance;}
    
    private $listKey = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34);
    public function getProvince($id = null){
		if(!is_null($id)){
			$id = intval($id);
		}
		$result = [];
		foreach($this->listKey as $value){
			if(is_null($id) || $id == $value){
				array_push($result, "Province".$value::Get()->info);
			}
		}
		return $result;
	}
}