<?php
namespace Country\ID;
class Province3 {
    public $dataKota=null;
    public $info=null;
    
	private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){if(self::$instance === null){self::$instance = new static();} return self::$instance;}
    
	
    public function __CONSTRUCT()
    {
        $this->info = new stdClass();
        $this->info->nama = "SUMATERA BARAT";
        $this->info->no_province = 3;
        $this->info->no_province_real = 13;
        $this->info->city_province = "KOTA PADANG";
        $this->dataKota = array(
            "KAB. AGAM",
            "KAB. DHARMASYARA",
            "KAB. KEPULAUAN MENTAWAI",
            "KAB. LIMA PULUH KOTA",
            "KAB. PADANG PARIAMAN",
            "KAB. PASAMAN",
            "KAB. PASAMAN BARAT",
            "KAB. PESISIR SELATAN",
            "KAB. SIJUNJUNG",
            "KAB. SOLOK",
            "KAB. SOLOK SELATAN",
            "KAB. TANAH DATAR",
            "KOTA BUKITTINGGI",
            "KOTA PADANG",
            "KOTA PADANGPANJANG",
            "KOTA PARIAMAN",
            "KOTA PAYAKUMBUH",
            "KOTA SAWAHLUNTO",
            "KOTA SOLOK"
        );
    }
}