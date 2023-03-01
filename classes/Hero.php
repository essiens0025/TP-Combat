<?php
class Hero
{
    private $pv;
    private $atk;
    private $arm;
    private $man;
    private $regman;
    private $comp1;
    private $comp2;

    public function __construct($pv,$atk,$arm,$man,$regman,$comp1,$comp2)
    {
        $this->pv=$pv;
        $this->atk=$atk;
        $this->arm=$arm;
        $this->man=$man;
        $this->regman=$regman;
        $this->comp1=$comp1;
        $this->comp2=$comp2;
    }
    public function getSante()
    {
        return $this->pv;
    }
    public function getAttaque()
    {
        return $this->atk;
    }
    public function getArmure()
    {
        return $this->arm;
    }
    public function getMana()
    {
        return $this->man;
    }
    public function getManareg()
    {
        return $this->regman;
    }
    public function comp1()
    {
        return $this->comp1;
    }
    public function comp2()
    {
        return $this->comp2;
    }
    public function perdrePV($nb)
    {
        return $this->pv - ($nb-$this->arm);
    }
    public function perdrePVbrut($nb)
    {
        return $this->pv - $nb;
    }
    public function attaquer($m) {
        return "Tu attaque avec une force de " . $this->atk . ", ton adversaire subit " . $m->perdrePV($this->atk) . " dégats";
    }
    public function mort(){
        if ($this->pv >= 0){
            return true;
        }
        else{
            return false;
        }
    }
}
?>

