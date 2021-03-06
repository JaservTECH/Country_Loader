<?php
namespace Country\ID;
class Province14 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "JAWA TENGAH";
        $this->info->no_province = 14;
        $this->info->no_province_real = 33;
        $this->info->city_province = "KOTA SEMAARANG";
        $this->dataKota = array(
            "KAB. BANJARNEGARA",
            "KAB. BANYUMAS",
            "KAB. BATANG",
            "KAB. BLORA",
            "KAB. BOYOLALI",
            "KAB. BREBES",
            "KAB. CILACAP",
            "KAB. DEMAK",
            "KAB. GROBOGAN",
            "KAB. JEPARA",
            "KAB. KARANGANYAR",
            "KAB. KEBUMEN",
            "KAB. KENDAL",
            "KAB. KLATEN",
            "KAB. KUDUS",
            "KAB. MAGELANG",
            "KAB. PATI",
            "KAB. PEKALONGAN",
            "KAB. PEMALANG",
            "KAB. PURBALINGGA",
            "KAB. PURWOREJO",
            "KAB. REMBANG",
            "KAB. UNGARAN",
            "KAB. SRAGEN",
            "KAB. SUKOHARJO",
            "KAB. TEGAL",
            "KAB. TEMANGGUNG",
            "KAB. WONOGIRI",
            "KAB. WONOSOBO",
            "KOTA MAGELANG",
            "KOTA PEKALONGAN",
            "KOTA SALATIGA",
            "KOTA SEMARANG",
            "KOTA SURAKARTA",
            "KOTA TEGAL",
        );
    }
}