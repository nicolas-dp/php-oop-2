<?php

include __DIR__ . '/Models/Utente.php';
include __DIR__ . '/Models/Prodotto.php';
include __DIR__ . '/Models/Category.php';

$user = new Utente('Nicolas', 'ciao@gmail.com', 'CDC', true, true);


 $prodotti = [
    new Prodotto('Scaglie di pollo', 'Mangime', 15, 'Next', 12, 'https://picsum.photos/200/300',[' pollo 11%', 'mais', 'riso soffiato 10%', 'frumento', 'grassi animali', 'polpa di barbabietola'], 'Le gustose crocchette Next Normal Maxi sono un alimento completo e funzionale, appositamente studiato per soddisfare le esigenze nutrizionali di cani di taglia grande. Next Dog Normal Maxi è un cibo secco di altissimo valore nutrizionale e presenta un’elevata appetibilità per il tuo amico a quattro zampe'),

    new Prodotto('Ciotola Black Stone Nera', 'Accessori', 9, 'YES!', 0.5, 'https://picsum.photos/200/300', ['acciaio'],'Ciotola per cani e gatti realizzata in acciaio di colore nero. Design moderno e raffinato'),

    new Prodotto('Materasso per Cane Outdoor Blu', 'Accessori', 46, 'PET AROUND YOU', 05, 'https://picsum.photos/200/300', ['Tessuto'],'Il cuscino Outdoor di Pet Around You è un materasso da esterno pensato per il comfort di cani di diverse dimensioni che diventerà la cuccia preferita del tuo amico a quattro zampe.'),

    new Prodotto('Croccantini', 'Mangime', 11.50, 'Next', 2.5, 'https://picsum.photos/200/300', [' pollo 11%', 'mais', 'riso soffiato 10%', 'frumento', 'grassi animali', 'polpa di barbabietola'],'Le gustose crocchette Next Normal Maxi sono un alimento completo e funzionale, appositamente studiato per soddisfare le esigenze nutrizionali di cani di taglia grande.'),

    new Prodotto('Osso', 'Accessori', 3, 'PET AROUND YOU', 0, 'https://picsum.photos/200/300', ['Pollo'],'Osso da gioco'),

    new Prodotto('Cuccia', 'Accessori', 20, 'PET AROUND YOU', 1.8, 'https://picsum.photos/200/300', ['Legno'],'Cuccia per estero'),
];

/* var_dump($prodotti);
$prodotti[0]->getSconto($user);
var_dump($prodotti); */

//$categoria = new Category('Mangime');

//var_dump($categoria);