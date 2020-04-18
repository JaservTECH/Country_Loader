<?php
namespace Country\ID;
class Province6 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "JAMBI";
        $this->info->no_province = 6;
        $this->info->no_province_real = 15;
        $this->info->city_province = "KOTA JAMBI";
        $this->dataKota = array(
            "KAB. BATANGHARI",
            "KAB. BUNGO",
            "KAB. KERINCI",
            "KAB. MERANGIN",
            "KAB. MUARO JAMBI",
            "KAB. SAROLANGUN",
            "KAB. TANJUNG JABUNG BARAT",
            "KAB. TANJUNG JABUNG TIMUR",
            "KAB. TEBO",
            "KOTA JAMBI",
            "KOTA SUNGAI PENUH"
        );
    }
}