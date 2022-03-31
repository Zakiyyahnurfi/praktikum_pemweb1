<?php
class PersegiPanjang{
    public $panjang;
    public $lebar;

    public function luas(){
        $luas=$this->panjang*$this->lebar;
        return "Luas :".$luas;
    }
    public function kll(){
        $keliling=2*($this->panjang+$this->lebar);
        return "Keliling :".$keliling;
    }

    public function setLebar($lebar){
        return $this->lebar=$lebar;
    }
    public function setPanjang($panjang){
        return $this->panjang=$panjang;
    }
}
$LuasPersegi=new PersegiPanjang();
echo "Panjang :".$LuasPersegi->setPanjang(18);
echo "<br>";
echo "Lebar :".$LuasPersegi->setLebar(8);
echo "<br>";
echo $LuasPersegi->luas();
echo "<br>";
echo $LuasPersegi->kll();

?>