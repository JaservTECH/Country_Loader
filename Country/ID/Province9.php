<?php
namespace Country\ID;
class Province9 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "KEPULAUAN BANGKA BELITUNG";
        $this->info->no_province = 9;
        $this->info->no_province_real = 19;
        $this->info->city_province = "KOTA PANGKAL PINANG";
        $this->dataKota = array(
            "KAB. BANGKA",
            "KAB. BANGKA BARAT",
            "KAB. BANGKA SELATAN",
            "KAB. BANGKA TENGAH",
            "KAB. BELITUNG",
            "KAB. BELITUNG TIMUR",
            "KOTA PANGKAL PINANG"
        );
    }
}