<!-- L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. -->

<?php 

include __DIR__ . '/Models/Negozio.php';
require_once __DIR__ . '/Models/Animali.php';
require_once __DIR__ . '/Models/Accessori.php';


$page = new Negozio('Scaglie di pollo', 'Mangime', 15, false);

var_dump($page);