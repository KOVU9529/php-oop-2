<?php
//richiedo i dati principali
require_once __DIR__ . '/Utente.php';
require_once __DIR__ . '/Carta.php'; 

class UtenteRegistrato extends Utente{
    public $saldo=100;
    public $sconto=20;
}?>