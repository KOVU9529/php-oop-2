<?php
//richiedo i dati principali
require_once __DIR__ . '/Cibo.php';

class DentastixCibo extends Cibo{
    public $conservazione = 'Conservare in un luogo lontano da fonti di calore.';
    public $prezzo = 17;

}?>