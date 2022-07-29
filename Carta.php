<?php
class Carta{
    public $saldo=0;
    public function __construct($_saldo){
        $this->saldo=$_saldo;
    }
    public function accettazione(){
       echo 'Saldo corrente  ';
    }
}
//Aggiunta trait
trait AccettazioneOn {
    public function accettazione(){
    //aggiungo al precedente valore
    parent::accettazione();
    echo 'trait';
    }
}
class TraitProva extends Carta{
    use AccettazioneOn;
}
?>