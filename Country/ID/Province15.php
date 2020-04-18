<?php
namespace Country\ID;
class Province15 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "YOGYAKARTA";
        $this->info->no_province = 15;
        $this->info->no_province_real = 34;
        $this->info->city_province = "KOTA YOGYAKARTA";
        $this->dataKota = array(
            "KAB. BANTUL",
            "KAB. GUNUNGKIDUL",
            "KAB. KULO PROGO",
            "KAB. SLEMAN",
            "KOTA YOGYAKARTA"
        );
    }
}