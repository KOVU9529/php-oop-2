<?php
//richiedo i dati principali
require_once __DIR__ . '/Cibo.php';

class BocconciniCibo extends Cibo{
    public $conservazione = 'Conservare in un luogo fresco e asciutto.';
    public $prezzo = 25;

}?>