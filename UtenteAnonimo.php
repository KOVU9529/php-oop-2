<?php
//richiedo i dati principali
require_once __DIR__ . '/Utente.php';

class UtenteAnonimo extends Utente{
    public $saldo=100;
    public $sconto=0;
}?>