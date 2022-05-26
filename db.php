<?php

include __DIR__ . '/Models/Utente.php';
include __DIR__ . '/Models/Prodotto.php';
include __DIR__ . '/Models/Mangime.php';
include __DIR__ . '/Models/Accessori.php';


$user = new Utente('Nicolas', 'De Palma', 'ciao@gmail.com', 'CDC', true, true);


$prodotti = [
    new Prodotto('Alimentazione', 'Mangime'),
    new Prodotto('Tempo Libero', 'Accessori'),
];

//var_dump($prodotti);


$mangimi =
    [
        new Mangimi('Scaglie di pollo', 'Mangime', 'Next', 12, [' pollo 11%', 'mais', 'riso soffiato 10%', 'frumento', 'grassi animali', 'polpa di barbabietola'], 'Le gustose crocchette Next Normal Maxi sono un alimento completo e funzionale, appositamente studiato per soddisfare le esigenze nutrizionali di cani di taglia grande. Next Dog Normal Maxi è un cibo secco di altissimo valore nutrizionale e presenta un’elevata appetibilità per il tuo amico a quattro zampe', 15)

    ];
//var_dump($mangimi);

$accessori = [
    new Accessori('Ciotole', 'Accessori', 'YES!', 'Ciotola Black Stone Nera', 'Acciaio', 'Ciotola per cani e gatti realizzata in acciaio di colore nero. Design moderno e raffinato', 9),
    new Accessori('Cucce', 'Accessori', 'PET AROUND YOU', 'Materasso per Cane Outdoor Blu', 'Tessuto', 'Il cuscino Outdoor di Pet Around You è un materasso da esterno pensato per il comfort di cani di diverse dimensioni che diventerà la cuccia preferita del tuo amico a quattro zampe.', 46)

];

//var_dump($accessori);