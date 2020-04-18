<?php
namespace Country\ID;
class Province4 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "RIAU";
        $this->info->no_province = 4;
        $this->info->no_province_real = 14;
        $this->info->city_province = "KOTA PEKANBARU";
        $this->dataKota = array(
            "KAB. BENGKALIS",
            "KAB. INDRAGIRI HILIR",
            "KAB. INDRAGIRI HULU",
            "KAB. KAMPAR",
            "KAB. KEPULAUAN MERANTI",
            "KAB. KUANTAN SINGINGI",
            "KAB. PELALAWAN",
            "KAB. ROKAN HILIR",
            "KAB. ROKAN HULU",
            "KAB. SIAK",
            "KOTA DUMAI",
            "KOTA PEKANBARU"
        );
    }
}