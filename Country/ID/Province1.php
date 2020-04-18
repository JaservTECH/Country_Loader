<?php
namespace Country\ID;
class Province1 {
    public $dataKota=null;
    public $info=null;
	
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "ACEH";
        $this->info->no_province = 1;
        $this->info->no_province_real = 11;
        $this->info->city_province = "KOTA SABANG";
        $this->dataKota = array(
            "KAB. ACEH BARAT",
            "KAB. ACEH BARAT DAYA",
            "KAB. ACEH BESAR",
            "KAB. ACEH JAYA",
            "KAB. ACEH SELATAN",
            "KAB. ACAEH SINGKIL",
            "KAB. ACEH TAMIANG",
            "KAB. ACEH TENGAH",
            "KAB. ACEH TENGGARA",
            "KAB. ACEH TIMUR",
            "KAB. ACEH UTARA",
            "KAB. BENER MERIAH",
            "KAB. BIREUEN",
            "KAB. GAYO LUES",
            "KAB. NAGAN RAYA",
            "KAB. PIDIE",
            "KAB. PIDIE JAYA",
            "KAB. SIMEULUE",
            "KAB. BANDA ACEH",
            "KAB. LANGSA",
            "KAB. LOKSEUMAWE",
            "KOTA SABANG",
            "KOTA SUBULUSSALAM"
        );
    }
}