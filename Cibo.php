<?php
class Cibo{
    public $nome;
    public $peso;
    public $conservazione;
    public $prezzo;

    public function __construct($_nome,$peso){
        $this-> nome=$_nome;
        $this-> peso=$peso;
    }
}
?>