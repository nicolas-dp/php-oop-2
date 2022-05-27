<?php
/* Includiamo il trait sconto */
include __DIR__ . '/TraitSconto.php';

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

    /* Usiamo il trait TraitSconto  */
    use Sconto;

    public function getMarca()
    {
        return $this->marca;
    }
}
