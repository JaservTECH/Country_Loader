<?php
namespace Country\ID;
class Province17 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "BALI";
        $this->info->no_province = 17;
        $this->info->no_province_real = 51;
        $this->info->city_province = "KOTA DENPASAR";
        $this->dataKota = array(
            "KAB. BADUNG",
            "KAB. BANGLI",
            "KAB. BULELENG",
            "KAB. GIANYAR",
            "KAB. JEMBRANA",
            "KAB. KARANGASEM",
            "KAB. KLUNGKUNG",
            "KAB. TABANAN",
            "KOTA DENPASAR",
        );
    }
}