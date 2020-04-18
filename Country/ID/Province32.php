<?php
namespace Country\ID;
class Province32 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "MALUKU UTARA";
        $this->info->no_province = 32;
        $this->info->no_province_real = 81;
        $this->info->city_province = "TERNATE";
        $this->dataKota = array(
            "KAB. HALMAHERA BARAT",
            "KAB. HALMAHERA TENGAH",
            "KAB. HALMAHERA TIMUR",
            "KAB. HALMAHERA SELATAN",
            "KAB. HALMAHERA UTARA",
            "KAB. KEPULAUAN SULA",
            "KAB. PULAU MOROTAI",
            "KAB. PULAU TALIABU",
            "KOTA TERNATE",
            "KOTA TIDORE KEPULAUAN",
        );
    }
}