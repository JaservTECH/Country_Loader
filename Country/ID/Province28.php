<?php
namespace Country\ID;
class Province28 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "SULAWESI TENGAH";
        $this->info->no_province = 28;
        $this->info->no_province_real = 72;
        $this->info->city_province = "KOTA PALU";
        $this->dataKota = array(
            "KAB. BANGGAI",
            "KAB. BANGGAI KEPULAUAN",
            "KAB. BANGGAI LAUT",
            "KAB. BUOL",
            "KAB. DONGGALA",
            "KAB. MOROWALI UTARA",
            "KAB. PARIGI MOUTONG",
            "KAB. POSO",
            "KAB. SIGI",
            "KAB. TOJO UNA-UNA",
            "KAB. TOLITOLI",
            "KOTA PALU",
        );
    }
}