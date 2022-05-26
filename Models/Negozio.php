<?php

class Negozio
{

    public $nome_prodotto;
    public $categoria;
    public $prezzo;
    public $sconto;

    function __construct(String $nome_prodotto, String $categoria, Int $prezzo, bool $sconto,)
    {
        $this->nome_prodotto = $nome_prodotto;
        $this->categoria = $categoria;
        $this->prezzo = $prezzo;
        $this->sconto = $sconto;
    }
}
