<!-- L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. -->

<?php
include __DIR__ . '/db.php'; 
?>
    <div class="container">
        <div>
            <?= $prodotti ?>
        </div>

        <div>
            <?= $mangime ?>
        </div>

        <div>
            <?= $accessori ?>
        </div>
    </div>



  