<?php
class Dispenser {
    protected $volume;
    protected $hargasegelas;
    private $volumegelas;
    public $namaminuman;

    public function isi($vol){
        $this->volume = $vol;
        return $vol;
    }
    public function harga($har){
        $this->hargasegelas = $har;
        return $har;
    }
    public function volgel($vg){
        $this->volumegelas = $vg;
        return $vg;
    }
    function nama($nm){
        $this->namaminuman = $nm;
        return $nm;
    }
}

$minuman1 = new Dispenser();
echo '<br/>' .$minuman1 -> isi('Isi : 550 L');
echo '<br/>' .$minuman1 -> harga('Harga : Rp 5000,-');
echo '<br/>' .$minuman1 -> volgel('Volume Gelas : 0,8 L');
echo '<br/>' .$minuman1 -> nama('Merk : Aqua');
?>