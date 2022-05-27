<?php 
/* Proviamo un eccezione generica */
class provaEccezione {

//creiamo la funzione 
public function NumeroIntero($numero) {
  if(!is_int($numero)) 
  {
    //stabiliamo le modalità di gestione dell'errore
    throw new Exception ('Aweeee ' . $numero . ' non è un numero!!!');
  }
}

}

//Creamo l'istanza
$obj = new provaEccezione;

//proviamo a far giarare la funzione passando un dato non numerico
try {
$obj -> NumeroIntero('ciao');
//se il numero è intero diamo conferma
echo "E' un numero intero";
} 

//cathing dell'eccezione
catch (Exception $e) {
echo $e -> getMessage();
}