<?php
namespace Country\ID;
class Province22 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "KALIMANTAN TENGAH";
        $this->info->no_province = 22;
        $this->info->no_province_real = 62;
        $this->info->city_province = "KOTA PALANGKA RAYA";
        $this->dataKota = array(
            "KAB. BARITO TENGAH",
            "KAB. BARITO TIMUR",
            "KAB. BARITO UTARA",
            "KAB. GUNUNG MAS",
            "KAB. KAPUAS",
            "KAB. KANTINGAN",
            "KAB. KOTAWARINGIN BARAT",
            "KAB. KOTAWARINGIN TIMUR",
            "KAB. LAMANDAU",
            "KAB. MURUNG RAYA",
            "KAB. PULANG PISAU",
            "KAB. SUKAMARA",
            "KAB. SERUYAN",
            "KOTA PALANGKA RAYA",
        );
    }
}