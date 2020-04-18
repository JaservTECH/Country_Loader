<?php
namespace Country\ID;
class Province25 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "GORONTALO";
        $this->info->no_province = 25;
        $this->info->no_province_real = 75;
        $this->info->city_province = "KOTA GORONTALO";
        $this->dataKota = array(
            "KAB. BOALEMO",
            "KAB. BONE BOLANGO",
            "KAB. GORONTALO",
            "KAB. GORONTALO UTARA",
            "KAB. POHUWATO",
            "KOTA GORONTALO",
        );
    }
}