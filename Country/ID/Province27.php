<?php
namespace Country\ID;
class Province27 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "SULAWESI TENGGARA";
        $this->info->no_province = 27;
        $this->info->no_province_real = 74;
        $this->info->city_province = "KOTA KENDARI";
        $this->dataKota = array(
            "KAB. BOMBANA",
            "KAB. BUTON",
            "KAB. BUTON SELATAN",
            "KAB. BUTON TENGAH",
            "KAB. BUTON UTARA",
            "KAB. KOLAKA",
            "KAB. KOLAKA TIMUR",
            "KAB. KOLAKA UTARA",
            "KAB. KONAWE",
            "KAB. KONAWE KEPULAUAN",
            "KAB. KONAWE SELATAN",
            "KAB. KONAWE UTARA",
            "KAB. MUNA",
            "KAB. MUNA BARAT",
            "KAB. WAKATOBI",
            "KOTA BAU-BAU",
            "KOTA KENDARI"
        );
    }
}