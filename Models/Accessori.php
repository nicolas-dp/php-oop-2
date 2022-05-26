<?php

class Accessori extends Prodotto
{

    public $marca;
    public $modello;
    public $materiali;
    public $description;
    public $prezzo;

    function __construct(String $nome_prodotto, String $categoria, String $marca, String $modello, String $materiali, String $description, Int $prezzo)
    {
        parent::__construct($nome_prodotto, $categoria);
        $this->marca = $marca;
        $this->modello = $modello;
        $this->materiali = $materiali;
        $this->description = $description;
        $this->prezzo = $prezzo;
    }

    
}
