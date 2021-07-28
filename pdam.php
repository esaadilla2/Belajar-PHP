<?php
class pdam{
    public $nama, $id, $jumlahPenggunaan, $biayaAdmin, $tarif, $total ;

    public function __construct ($nama, $id, $biayaAdmin){
    $this->nama = $nama;
    $this->id = $id;
    $this->biayaAdmin = $biayaAdmin;
    }

    public function getBiaya(){
        if ($jumlahPenggunaan >= 1 && $jumlahPenggunaan <=10){
        $tarif = 2000;
        $biayaAdmin = 10000;
        $total = $tarif + $biayaAdmin;
    } elseif ($jumlahPenggunaan > 10 && $jumlahPenggunaan <= 20){
        $tarif = 3000;
        $biayaAdmin = 10000;
        $total = $tarif + $biayaAdmin;
    } elseif ($jumlahPenggunaan > 20 && $jumlahPenggunaan <= 30){
        $tarif = 4000;
        $biayaAdmin = 10000;
        $total = $tarif + $biayaAdmin;
    } elseif ($jumlahPenggunaan >= 31){
        $tarif = 5000;
        $biayaAdmin = 10000;
        $total = $tarif + $biayaAdmin;
    }   
}
$pdam1 = new pdam ("Ali",1,8);
echo nl2br ("\n Tagihan " .$pdam1->nama. " id ".$pdam1->id. "sejumlah ".$pdam1->jumlahPenggunaan. "memakan biaya sebesar " .$pdam1->getBiaya());



?>
