<?php
namespace Country\ID;
class Province34 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "PAPUA BARAT";
        $this->info->no_province = 34;
        $this->info->no_province_real = 92;
        $this->info->city_province = "KOTA SORONG";
        $this->dataKota = array(
            "KAB. FAKFAK",
            "KAB. KAIMANA",
            "KAB. MANOKWARI",
            "KAB. MANOKWARI SELATAN",
            "KAB. MAYBRAT",
            "KAB. PEGUNUNGAN ARFAK",
            "KAB. RAJA AMPAT",
            "KAB. SORONG",
            "KAB. SORONG SELATAN",
            "KAB. TAMBRAUW",
            "KAB. TELUK BINTUNI",
            "KAB. TELUK WONDAMA",
            "KOTA SORONG",
        );
    }
}