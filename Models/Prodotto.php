<?php
/* Includiamo il trait sconto */
include __DIR__ . '/TraitSconto.php';

class Prodotto
{

    public $nome_prodotto;
    public $category;
    public $prezzo;
    public $marca;
    public $peso;
    public $image;
    public $composizione;
    public $description;
    

    function __construct(String $nome_prodotto, Category $category, String $categoria, $prezzo, String $marca, Int $peso, String $image, array $composizione, String $description)
    {
        $this->nome_prodotto = $nome_prodotto;
        $this->category = $category;
        $this->prezzo = $prezzo;
        $this->marca = $marca;
        $this->peso = $peso;
        $this->image = $image;
        $this->composizione = $composizione;
        $this->description = $description;
    }

    /* Usiamo il trait TraitSconto  */
    use Sconto;

    public function underScount(Utente $user)
    {
        if(!is_int($user->age)) {
            throw new Exception ('Aweeee ' . $user->age . ' non è un numero!!!');
        } if ($user->age < 18) {
            $this->prezzo = $this->prezzo - ($this->prezzo / 50) * 100;
            return $this->prezzo;
        } else {
            return $this->prezzo;
        }

    }
}


//Creamo l'istanza per verificare l'eccezzione 
//$obj = new Prodotto('Cuccia', 'Accessori', 20, 'PET AROUND YOU', 1.8, 'https://picsum.photos/200/300', ['Legno'], 'Cuccia per estero');

try {
    $obj->underScount($user->age);
    //se è un numero diamo conferma
    echo "E' un numero intero";
}
//cathing dell'eccezione
catch (Exception $e) {
    echo $e->getMessage();
}
