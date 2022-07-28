<?php
class Cucce{
    public $nome;
    public $marca;
    public $dimensione;
    public $materiale;
    public $prezzo;

    public function __construct($_nome,$_materiale,$_dimensione){
        $this-> nome = $_nome;
        $this-> materiale = $_materiale;
        $this-> dimensione = $_dimensione;
    }
}
?>