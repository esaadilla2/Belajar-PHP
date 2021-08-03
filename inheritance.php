<?php
/** inheritance -> proses pewarisan atribut dan method dari superclass ke sub class */
class Lingkaran{
    /** atribut */
    public $r;

    /** method */
    public function __construct($r)
    {
        $this->r = $r;
    }
    public function getLuas(){
        return $this->r * $this->r * 3.14;
    }

    public function getKeliling()
    {
        return $this->r * 2 * 3.14;
    }
}

class Tabung extends Lingkaran{
    public $tinggi;
    /** keyword parent digunakan utk mengakses method dari superclass */
    public function __construct($r, $t){
        parent::__construct($r);
        // $this->r = $r;
        $this->tinggi = $t;
    }

    public function getLuas(){
        // 2*phi*r * (r+t)
        return 2 * 3.14 * $this->r * ($this->r + $this->tinggi);
    }

    public function getVolume(){
        return parent::getLuas() * $this->tinggi;
    }
}

class Kerucut extends Lingkaran{
    public $tinggi, $selimut;

    public function __construct($r, $t){
    parent::__construct ($r);
    $this->tinggi = $t;
}
public function getSelimut(){
    return sqrt ($this->r * $this->r + $this->tinggi * $this->tinggi);
}
public function getLuas(){
    return 3.14* $this->r * ($this->r+$this->getSelimut());
}
public function getVolume(){
    return parent::getLuas() * $this->tinggi/3;
}
}
class Bola extends Lingkaran{
    public $tinggi;

    public function __construct($r, $t){
    parent::__construct($r);
    $this->tinggi = $t;
}
public function getLuas(){
    return parent::getLuas()*4;
}
public function getVolume(){
    return 4/3*3.14*$this->r;
}
}


$gelas = new Tabung(10, 25);
echo nl2br("Luas Gelas: ".$gelas->getLuas()."\n");
echo nl2br("Volume Gelas: ".$gelas->getVolume()."\n");

$topi = new Kerucut (5, 6);
echo nl2br("Luas topi: ".$topi->getLuas()."\n");
echo nl2br("Volume topi: ".$topi->getVolume()."\n");

$bola = new Bola(15, 20);
echo nl2br("Luas bola: ".$bola->getLuas()."\n");
echo nl2br("Volume bola: ".$bola->getVolume());
?>