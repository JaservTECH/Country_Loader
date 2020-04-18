<?php
namespace Country\ID;
class Province21 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "KALIMANTAN SELATAN";
        $this->info->no_province = 21;
        $this->info->no_province_real = 63;
        $this->info->city_province = "KOTA BANJARMASIN";
        $this->dataKota = array(
            "KAB. BALANGAN",
            "KAB. BANJAR",
            "KAB. BARITO KUALA",
            "KAB. HULU SUNGAI SELATAN",
            "KAB. HULU SUNGAI TENGAH",
            "KAB. HULU SUNGAI UTARA",
            "KAB. KOTABARU",
            "KAB. TABALONG",
            "KAB. TANAH BUMBU",
            "KAB. TANAH LAUT",
            "KAB. TAPIN",
            "KOTA BANJARBARU",
            "KOTA BANJARMASIN",
        );
    }
}