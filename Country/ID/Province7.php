<?php
namespace Country\ID;
class Province7{
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "BENGKULU";
        $this->info->no_province = 7;
        $this->info->no_province_real = 17;
        $this->info->city_province = 'KOTA BENGKULU';
        $this->dataKota = array(
            "KAB. BENGKULU SELATAN",
            "KAB. BENGKULU TENGAH",
            "KAB. BENGKULU UTARA",
            "KAB. KAUR",
            "KAB. KEPAHIANG",
            "KAB. LEBONG",
            "KAB. MUKOMUKO",
            "KAB. REJANG LEBONG",
            "KAB. SELUMA",
            "KOTA BENGKULU"
        );
    }
}