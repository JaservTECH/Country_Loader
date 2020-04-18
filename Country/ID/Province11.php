<?php
namespace Country\ID;
class Province11 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "BANTEN";
        $this->info->no_province = 11;
        $this->info->no_province_real = 36;
        $this->info->city_province = "KOTA SERANG";
        $this->dataKota = array(
            "KAB. LEBAK",
            "KAB. PANDEGLANG",
            "KAB. SERANG",
            "KAB. TANGERANG",
            "KOTA CILEGON",
            "KOTA SERANG",
            "KOTA TANGERANG",
            "KOTA TANGERANG SELATAN"
        );
    }
}