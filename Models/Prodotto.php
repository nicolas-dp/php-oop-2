<?php



class Prodotto
{

    public $nome_prodotto;
    public $prezzo;
    public $marca;
    public $peso;
    public $image;
    public $composizione;
    public $description;

    function __construct(String $nome_prodotto, String $categoria, Int $prezzo, String $marca, Int $peso, String $image, array $composizione, String $description)
    {
        $this->nome_prodotto = $nome_prodotto;
        $this->categoria = $categoria;
        $this->prezzo = $prezzo;
        $this->marca = $marca;
        $this->peso = $peso;
        $this->image = $image;
        $this->composizione = $composizione;
        $this->description = $description;
    }

    public function getSconto(Utente $user)
    {       
        
        if ($user->is_registered) {
            $this->prezzo = $this->prezzo - ($this->prezzo * 20) / 100;
            return $this->prezzo;
        } else {
            return $this->prezzo;
        }
    }

    public function getMarca()
    {
        return $this->marca;
    }
    
}
