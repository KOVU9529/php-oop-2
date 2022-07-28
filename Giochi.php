<?php
class Giochi{
    public $nome;
    public $marca;
    public $tipo;
    public $prezzo;

    public function __construct($_nome,$_marca){
        $this-> nome=$_nome;
        $this-> marca=$_marca;
    }
}
?>