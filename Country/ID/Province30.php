<?php
namespace Country\ID;
class Province30 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "SULAWESI BARAT";
        $this->info->no_province = 30;
        $this->info->no_province_real = 76;
        $this->info->city_province = "KAB. MAMUJU";
        $this->dataKota = array(
            "KAB. MAJENE",
            "KAB. MAMASA",
            "KAB. MAMUJU",
            "KAB. MAMUJU TENGAH",
            "KAB. MAMUJU UTARA",
            "KAB. POLEWALI",
        );
    }
}