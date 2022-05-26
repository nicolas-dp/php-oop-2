<?php

class Prodotto
{

    public $nome_prodotto;
    public $categoria;
   

    function __construct(String $nome_prodotto, String $categoria)
    {
        $this->nome_prodotto = $nome_prodotto;
        $this->categoria = $categoria;
    }


    
}
