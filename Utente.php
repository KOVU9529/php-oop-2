<?php
class Utente {
    public $nome;
    public $email;
    //imposto a 0 il saldo e lo sconto per evitarmi comparazioni sbagliate avendo null
    public $saldo=0;
    public $sconto=0;
    //Creo un array che conterrà i prodotti comprati
    public $prodottiSelezionati=[];
    public function __construct ($_nome, $_email){
        $this -> nome = $_nome;
        $this -> email = $_email;
    }
    //Funzione singolo prondotto
    public function prendiProdotto($prodotto){
        $this-> prodottiSelezionati[]=$prodotto;
        //var_dump($prodotto);
    }
    public function prodotto(){
        return $this-> prodottiSelezionati;
    }
    public function calcolarePrezzo(){
        //impostiamo il valore iniziale della somma
        $somma=0;
        //imposto il foreach per sommare
        foreach($this-> prodottiSelezionati as $prodotto){
            $somma += $prodotto -> prezzo;
        }
        //differza con lo sconto
        $somma -= $somma * $this->sconto / 100;
        return $somma;
    }
    //Aggiungo i valori relativi alla carta
    public function pagamentoCash($carta){
        //imposto il calcolo del pagamento e 
        //le condizioni di riuscita del pagamento
        $pagamento = $this-> calcolarePrezzo();
        var_dump($pagamento);
        if($carta->saldo < $pagamento){
            die('pagamento rifiutato');
        }else{
            return 'Pagamento accettato';
        }
    }
}
?>