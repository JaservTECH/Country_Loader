<?php
namespace Country\ID;
class Province24 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "KALIMANTAN UTARA";
        $this->info->no_province = 24;
        $this->info->no_province_real = 65;
        $this->info->city_province = "KOTA TARAKAN";
        $this->dataKota = array(
            "KAB. BULUNGAN",
            "KAB. MALINAU",
            "KAB. NUNUKAN",
            "KAB. TANA TIDUNG",
            "KOTA TARAKAN",
        );
    }
}