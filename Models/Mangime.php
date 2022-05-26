<?php
class Mangimi extends Prodotto
{

    public $marca;
    public $peso;
    public $ingredienti;
    public $description;
    public $prezzo;

    function __construct(String $nome_prodotto, String $categoria, String $marca, Int $peso, array $ingredienti, String $description, Int $prezzo)
    {
        parent::__construct($nome_prodotto, $categoria);
        $this->marca = $marca;
        $this->peso = $peso;
        $this->ingredienti = $ingredienti;
        $this->description = $description;
        $this->prezzo = $prezzo;
    }

    public function getSconto(Utente $user)
    {
        if ($user->is_registered == true) {
            var_dump('Utente ha diritto allo sconto');
            $this->prezzo = $this->prezzo * 0.2;
        } else {
            $this->prezzo;
        }
    }
}


