<?php
namespace Country\ID;
class Province31 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "MALUKU";
        $this->info->no_province = 31;
        $this->info->no_province_real = 81;
        $this->info->city_province = "";
        $this->dataKota = array(
            "KAB. BURU",
            "KAB. BURU SELATAN",
            "KAB. KEPULAUAN ARU",
            "KAB. MALUKU BARAT DAYA",
            "KAB. MALUKU TENGAH",
            "KAB. MALUKU TENGGARA",
            "KAB. MALUKU TENGARA BARAT",
            "KAB. SERAM BAGIAN BARAT",
            "KAB. SERAM BAGIAN TIMUR",
            "KOTA AMBON",
            "KOTA TUAL",
        );
    }
}