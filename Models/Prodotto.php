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


    public function getSconto(Utente $user)
    {
        if ($user->is_registered) {
            var_dump('Utente ha diritto allo sconto');
            $this->prezzo = $this->prezzo * 0.2;
        } else {
            $this->prezzo;
        }
    }
}
