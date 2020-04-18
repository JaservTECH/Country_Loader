<?php
namespace Country\ID;
class Province20 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "KALIMANTAN BARAT";
        $this->info->no_province = 20;
        $this->info->no_province_real = 61;
        $this->info->city_province = "KOTA PONTIANAK";
        $this->dataKota = array(
            "KAB. BENGKAYANG",
            "KAB. KAPUAS HULU",
            "KAB. KAYONG UTARA",
            "KAB. KETAPANG",
            "KAB. KUBU RAYA",
            "KAB. LANDAK",
            "KAB. MELAWI",
            "KAB. MEWPAWAH",
            "KAB. SAMBAS",
            "KAB. SANGGAU",
            "KAB. SEKADAU",
            "KAB. SINTANG",
            "KOTA PONTIANAK",
            "KOTA SINGKAWANG",
        );
    }
}