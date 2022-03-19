<?php

class Skincare {

    public  $nama, $merk, $type, $pemakaian, $exp, $harga;

    public function __construct( $nama = "nama", $merk = "merk", $type = "type", $pemakaian = "pemakaian", $exp = "exp", $harga = 0) {

        $this->nama = $nama;
        $this->merk = $merk;
        $this->type = $type;
        $this->pemakaian = $pemakaian;
        $this->exp = $exp;
        $this->harga = $harga;


    }

    public function getlabel() {

        return "$this->nama, $this->type";

    }

    public function getTypeSkincare() {

        $str = "{$this->merk} │ {$this->getlabel()} (Rp. {$this->harga})";

        return $str;
    }

}

class FrozenFood {

    public  $nama, $distributor, $berat, $isi, $exp, $harga; 

    public function __construct( $nama = "nama", $distributor = "distributor", $berat = "berat", $isi = "isi", $exp= "exp", $harga = 0) {

        $this->nama = $nama;
        $this->distributor = $distributor;
        $this->berat = $berat;
        $this->isi = $isi;
        $this->exp = $exp;
        $this->harga = $harga;


    }

    public function getlabel() {

        return "$this->distributor, $this->berat, $this->isi, $this->exp";

    }

    public function getJenisFrozenFood() {

        $str = "{$this->nama} , {$this->getlabel()} , Rp. {$this->harga} ";

        return $str;
    }

}

class Serum extends Skincare {

    public function getTypeSkincare() {
        $str = "Serum   =  {$this->getlabel()} , {$this->nama} , {$this->merk} , {$this->exp} ,  Rp. {$this->harga} ";
        return $str; 
    }

}

class Mouisturaizer extends Skincare {

    public function getTypeSkincare() {
        $str = "Mouisturaizer = {$this->getlabel()} , {$this->nama} , {$this->merk} , {$this->exp} ,  Rp. {$this->harga} ";
        return $str; 
    }

}

class MakananBerat extends FrozenFood {

    public function getJenisFrozenFood() {
        $str = "MakananBerat = {$this->nama} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str; 
    }

}

class MakananRingan extends FrozenFood {

    public function getJenisFrozenFood() {
        $str = "MakananRingan = {$this->nama} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str; 
    }

}

class CetakTypeSkincare {

    public function cetak(Skincare $Skincare){
        $str = "{$Skincare->merk} {$Skincare->getlabel()} , Rp. {$Skincare->harga} ";
        return $str;
    }

}

class CetakJenisFrozenFood {

    public function cetak(FrozenFood $FrozenFood){
        $str = "{$FrozenFood->merk} {$FrozenFood->getlabel()} (Rp. {$FrozenFood->harga})";
        return $str;
    }

}

$Skincare1 = new Serum("Brightening", "WhiteLab", "normal", "Remaja", "2025",  185000);
$Skincare2 = new Serum("Acne", "Scarlet", "berjerawat", "Remaja", "2025",  65000);
$Skincare3 = new Mouisturizer("Hydrating", "The Body Shop", "kulit kering", "Remaja", "2025", 160000);
$Skincare4 = new Mouisturizer("Daily Cream", "Natur-e", "kulit berminyak", "Remaja", "2025", 78000);

$FrozenFood1 = new MakananBerat("Rendang", "PT.Sederhana", "500 g", "8", "2022", 140000);
$FrozenFood2 = new MakananBerat("Bubur", "PT.Milna", "250 g", "1", "2022", 20000);
$FrozenFood3 = new MakananRingan("Donat Bomboloni", "PT.J.CO", "350 g", "6", "2022", 65000);
$FrozenFood4 = new MakananRingan("Jjaangmyeon", "PT.Mujigyae", "200 gr", "1", "2023", 25000);

echo $Skincare1->getTypeSkincare();
echo "<br>";
echo $Skincare2->getTypeSkincare);
echo "<br>";
echo $Skincare3->getTypeSkincare();
echo "<br>";
echo $Skincare4->getTypeSkincare();
echo "<hr>";
echo $FrozenFood1->getJenisFrozenFood();
echo "<br>";
echo $FrozenFood2->getJenisFrozenFood();
echo "<br>";
echo $FrozenFood3->getJenisFrozenFood();
echo "<br>";
echo $FrozenFood4->getJenisFrozenFood();
echo "<hr>";


?>