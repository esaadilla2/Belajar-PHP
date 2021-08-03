<?php
class pdam{
    public $nama, $id, $jumlahPenggunaan, $admin = 10000;

    public function __construct ($nama, $id, $jumlahPenggunaan){
    $this->nama = $nama;
    $this->id = $id;
    if ($jumlahPenggunaan < 10){
        $this->jumlahPenggunaan = 10;
    }else {
        $this->jumlahPenggunaan = $jumlahPenggunaan;
    }
    }

    public function getBiaya(){
        $tarif=0;
        if ($this->jumlahPenggunaan >= 1 && $this->jumlahPenggunaan <=10){
        $tarif = 2000;
    } elseif ($this->jumlahPenggunaan > 10 && $this->jumlahPenggunaan <= 20){
        $tarif = 3000;
    } elseif ($this->jumlahPenggunaan > 20 && $this->jumlahPenggunaan <= 30){
        $tarif = 4000;
    } elseif ($this->jumlahPenggunaan > 30){
        $tarif = 5000;
        
    }   
    $hasil = $this->jumlahPenggunaan * $tarif + $this->admin;
        return $hasil;
}
}
    $pelanggan =[
     new pdam(1,"Ali",9),
     new pdam(2,"Budi",11),
     new pdam(3,"Dani",24),
     new pdam(4,"Edi",28),
     new pdam(5,"Umar",50),
     ];
       for ($i=0; $i < count($pelanggan); $i++) { 
      echo nl2br("Pelanggan : ".$pelanggan[$i]->nama ." Biaya: ".$pelanggan[$i]->getBiaya()."\n");
  }



?>
