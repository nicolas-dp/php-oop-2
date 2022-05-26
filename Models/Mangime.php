<?php 

class Mangime extends Prodotto {

    public $marca;
    public $peso;
    public $ingredienti;
    public $description;
    public $prezzo;
    public $sconto;

    function __construct(String $nome_prodotto, String $categoria, String $marca, Int $peso, Array $ingredienti, String $description, Int $prezzo, bool $sconto) {
        parent::__construct($nome_prodotto, $categoria);
        $this->marca = $marca;
        $this->peso = $peso;
        $this->ingredienti = $ingredienti;
        $this->description = $description;
        $this->prezzo = $prezzo;
        $this->sconto = $sconto;
    }

}


