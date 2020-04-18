<?php
namespace Country\ID;
class Province8 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "SUMATERA SELATAN";
        $this->info->no_province = 8;
        $this->info->no_province_real = 16;
        $this->info->city_province = 'KOTA PALEMBANG';
        $this->dataKota = array(
            "KAB. BANYUASIN",
            "KAB. EMPAT LAWANG",
            "KAB. LAHAT",
            "KAB. MUARA ENIM",
            "KAB. MUSI BANYUASIN",
            "KAB. MUSI RAWAS",
            "KAB. MUSI RAWAS UTARA",
            "KAB. OGAN ILIR",
            "KAB. OGAN KOMERING ILIR",
            "KAB. OGAN KOMERING ULU",
            "KAB. OGAN KOMERING ULU SELATAN",
            "KAB. OGAN KOMERING ULU UTARA",
            "KAB. PENUKAL ABAB LEMATANG ILIR",
            "KOTA LUBUKLINGGAU",
            "KOTA PAGAR ALAM",
            "KOTA PALEMBANG",
            "KOTA PRABUMULIH"
        );
    }
}