<?php
//richiedo i dati principali
require_once __DIR__ . '/Utente.php';

class UtenteRegistrato extends Utente{
    public $saldo=1000;
    public $sconto=20;

}?>