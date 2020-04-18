<?php
namespace Country\ID;
class Province23 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "KALIMANTAN TIMUR";
        $this->info->no_province = 23;
        $this->info->no_province_real = 64;
        $this->info->city_province = "KOTA SAMARINDA";
        $this->dataKota = array(
            "KAB. BERAU",
            "KAB. KUTAI BARAT",
            "KAB. KUTAI KERTANEGARA",
            "KAB. KUTAI TIMUR",
            "KAB. MAHAKAM ULU",
            "KAB. PASER",
            "KAB. PENAJAM PASER UTARA",
            "KOTA BALIKPAPAPN",
            "KOTA BONTANG",
            "KOTA SAMARINDA",

        );
    }
}