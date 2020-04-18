<?php
namespace Country\ID;
class Province19 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "NUSA TENGGARA TIMUR";
        $this->info->no_province = 19;
        $this->info->no_province_real = 53;
        $this->info->city_province = "KOTA KUPANG";
        $this->dataKota = array(
            "KAB. ALOR",
            "KAB. BELU",
            "KAB. ENDE",
            "KAB. FLORES TIMUR",
            "KAB. KUPANG",
            "KAB. LEMBATA",
            "KAB. MALAKA",
            "KAB. MENGGARAI",
            "KAB. MANGGARAI BARAT",
            "KAB. MANGGARAI TIMUR",
            "KAB. NGADA",
            "KAB. NAGEKEO",
            "KAB. ROTE NDAO",
            "KAB. SABU",
            "KAB. SIKKA",
            "KAB. SUMBA BARAT",
            "KAB. SUMBA BARAT DAYA",
            "KAB. SUMBA TENGAH",
            "KAB. SUMBA TIMUR",
            "KAB. TIMOR TENGAH SELATAN",
            "KAB. TIMOR TENGAH UTARA",
            "KOTA KUPANG"
        );
    }
}