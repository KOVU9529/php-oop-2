<?php
/*L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
-----------------------------------------------------------
L'utente potrà sia comprare i prodotti senza registrarsi, 
oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
BONUS:
Il pagamento avviene con la carta prepagata 
che deve contenere un saldo sufficiente all'acquisto.*/

//Richiedo l'accessibilità dei dati
//sezione cibo
require_once __DIR__ . '/CrocchetteCibo.php';
require_once __DIR__ . '/BocconciniCibo.php';
require_once __DIR__ . '/DentastixCibo.php';
//sezione giochi
require_once __DIR__ . '/FuneGiochi.php';
require_once __DIR__ . '/BoomerangGiochi.php';
require_once __DIR__ . '/PallaGiochi.php';
//sezione cucce
require_once __DIR__ . '/AwayHomeCucce.php';
require_once __DIR__ . '/LegnoCucce.php';
require_once __DIR__ . '/FlexCucce.php';
//sezione utente
require_once __DIR__ . '/UtenteAnonimo.php';
require_once __DIR__ . '/UtenteRegistrato.php';
//sezione carta
require_once __DIR__ . '/Carta.php';


//vengono riportati solo le classi figlie
//sezione cibo
$crocchetteCibo = new CrocchetteCibo('Crocchete di omega-3',2);
//var_dump($crocchetteCibo);
$bocconciniCibo = new BocconciniCibo('Bocconcini di pollo ',4);
//var_dump($bocconciniCibo);
$dentastixCibo = new DentastixCibo('Dentastix al mentolo ',10);
//var_dump($dentastixCibo);

//sezione giochi
$funeGiochi = new FuneGiochi('Fune','Pet Animal Planet');
//var_dump($funeGiochi);
$boomerangGiochi = new BoomerangGiochi('Boomerang','Pet Planet');
//var_dump($boomerangGiochi);
$pallaGiochi = new PallaGiochi(' Pet Soccer Ball','Pet Ball Play');
//var_dump($pallaGiochi);

//sezione cucce
$awayHomeCucce = new AwayHomeCucce('Beach-Forest-Mountain','Policarbonato','4x4');
//var_dump($awayHomeCucce);
$legnoCucce = new LegnoCucce('ComfortablePlace','Wood','6x3');
//var_dump($legnoCucce);
$flexCucce = new FlexCucce('ElasticPlace','Elastic-Plexiglass','2x8');
//var_dump($flexCucce);

//sezione utenti
$utenteAnonimo = new UtenteAnonimo('Chiara','mini@gmail.com');
//L'utente aggiunge tramite la funzione il prodotto al suo carrello
$utenteAnonimo->prendiProdotto($crocchetteCibo);
$utenteAnonimo->prendiProdotto($legnoCucce);
$utenteAnonimo->prendiProdotto($boomerangGiochi);
//var_dump($utenteAnonimo);


$utenteRegistrato = new UtenteRegistrato('Luigi','zinocapa@gmail.com');
//L'utente aggiunge tramite la funzione il prodotto al suo carrello
$utenteRegistrato->prendiProdotto($dentastixCibo);
$utenteRegistrato->prendiProdotto($flexCucce);
$utenteRegistrato->prendiProdotto($boomerangGiochi);
//var_dump($utenteRegistrato);

//carta prepagata
//imposto il valore del saldo per soddisfare o meno il pagamento
$carta= new Carta(100);
//var_dump($carta->saldo);

//condizione di accertamento pagamento riuscito
if($utenteAnonimo->pagamentoCash($carta) === 'Pagamento accettato'){
    echo 'Grazie per la vostra scelta.';
}
if($utenteRegistrato->pagamentoCash($carta) === 'Pagamento accettato'){
    echo 'Grazie per la vostra scelta, pagamento andato a buon fine.';
}
?>