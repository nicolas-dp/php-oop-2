<?php
include __DIR__ . '/db.php';
include __DIR__ . '/layout/head.php.';

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];

/* $user = 
[  
    new Utente($_POST['nome'], $_POST['cognome'], 

]; */

var_dump($nome, $cognome, $email);
class provaEccezione {

    //creiamo la funzione 
    public function isEmpty($nome) {
      if(!is_null($nome)) 
      {
        //stabiliamo le modalità di gestione dell'errore
        throw new Exception ('Aweeee ' . $nome . ' non può essere null!!!');
      }
    }
    
    }
    
    //Creamo l'istanza
    $obj = new provaEccezione;
    
    //proviamo a far giarare la funzione passando un dato non numerico
    try {
    $obj -> isEmpty($nome);
    //se il numero è intero diamo conferma
    echo "OK va bene";
    } 
    
    //cathing dell'eccezione
    catch (Exception $e) {
    echo $e -> getMessage();
    }


?>

<div class="button-home">
    <a class="badge bg-primary text-wrap p-3 fs-6 ms-3 mt-3 text-decoration-none" href="./index.php">
        Home</a>
</div>
<div class="container">
    <h2 class="text-center">Registra il tuo Account</h2>
    <form method="post" class="row g-3 p-5" >
        <div class="col-md-6">
            <label for="inputName" class="form-label">Nome</label>
            <input type="text" class="form-control" id="inputName" placeholder="Nome" name="nome">
        </div>
        <div class="col-md-6">
            <label for="inputLastName" class="form-label">Cognome</label>
            <input type="text" class="form-control" id="inputLastName" placeholder="Cognome">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Indirizzo</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Via/Piazza, 1234">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Città</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Stato</label>
            <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">CAP</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Registrati</button>
        </div>
    </form>

</div>

<?php include __DIR__ . '/layout/footer.php.'; ?>