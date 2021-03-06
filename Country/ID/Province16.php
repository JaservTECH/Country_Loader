<?php
namespace Country\ID;
class Province16 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "JAWA TIMUR";
        $this->info->no_province = 16;
        $this->info->no_province_real = 35;
        $this->info->city_province = "KOTA SURABAYA";
        $this->dataKota = array(
            "KAB. BANGKALAN",
            "KAB. BANYUWANGI",
            "KAB. BLITAR",
            "KAB. BOJONEGORO",
            "KAB. BONDOWOSO",
            "KAB. GRESIK",
            "KAB. JEMBER",
            "KAB. JOMBANG",
            "KAB. KEDIRI",
            "KAB. LAMONGAN",
            "KAB. KUMAJANG",
            "KAB. MADIUN",
            "KAB. MAGETAN",
            "KAB. MALANG",
            "KAB. MOJOKERTO",
            "KAB. NGANJUK",
            "KAB. NGAWI",
            "KAB. PACITAN",
            "KAB. PAMEKASAN",
            "KAB. PASURUAN",
            "KAB. PONOROGO",
            "KAB. PROBOLINGGO",
            "KAB. SAMPANG",
            "KAB. SIDOARJO",
            "KAB. SITUBONDO",
            "KAB. SUMENEP",
            "KAB. TRENGGALEK",
            "KAB. TUBAN",
            "KAB. TULUNGAGUNG",
            "KOTA BATU",
            "KOTA BLITAR",
            "KOTA KEDIRI",
            "KOTA MADIUN",
            "KOTA MALANG",
            "KOTA MOJOKERTO",
            "KOTA PASURUAN",
            "KOTA PROBOLINGGO",
            "KOTA SURABAYA",
        );
    }
}