<?php
//richiedo i dati principali
require_once __DIR__ . '/Giochi.php';

class PallaGiochi extends Giochi{
    public $tipo = 'Gioco all\'aperto';
    public $prezzo = 5;

}?>