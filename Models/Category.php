<?php 

class Category extends Prodotto{

    protected $categoria;

    public function __construct(String $categoria) {
        $this->categoria = $categoria;
      
    }
}