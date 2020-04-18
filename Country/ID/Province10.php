<?php
namespace Country\ID;
class Province10 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "LAMPUNG";
        $this->info->no_province = 10;
        $this->info->no_province_real = 18;
        $this->info->city_province = "KOTA BANDAR LAMPUNG";
        $this->dataKota = array(
            "KAB. LAMPUNG BARAT",
            "KAB. LAMPUNG SELATAN",
            "KAB. LAMPUNG TENGAH",
            "KAB. LAMPUNG TIMUR",
            "KAB. LAMPUNG UTARA",
            "KAB. MESUJI",
            "KAB. PESAWARAN",
            "KAB. PESISIR BARAT",
            "KAB. PRINGSEWU",
            "KAB. TANGGAMUS",
            "KAB. TULANG BAWANG",
            "KAB. TULANG BAWANG BARAT",
            "KAB. WAY KANAN",
            "KOTA BANDAR LAMPUNG",
            "KOTA METRO"
        );
    }
}