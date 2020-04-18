<?php
namespace Country\ID;
class Province5 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "KEPULAUAN RIAU";
        $this->info->no_province = 5;
        $this->info->no_province_real = 21;
        $this->info->city_province = "KOTA TANJUNG PINANG";
        $this->dataKota = array(
            "KAB. BINTAN KEPULAUAN",
            "KAB. KARIMUN",
            "KAB. KEPULAUAN ANAMBAS",
            "KAB. LINGGA",
            "KAB. NATUNA",
            "KOTA BATAM",
            "KOTA TANJUNG PINANG"
        );
    }
}