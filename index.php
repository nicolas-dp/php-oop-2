<!-- L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. -->

<?php
include __DIR__ . '/db.php';

include __DIR__ . '/layout/head.php.';
?>
<div class="container">
    <div class="categorie text-center">
        <?php foreach ($prodotti as $prodotto) : ?>
            <a href="/Models/<?= $prodotto->categoria ?>"><?= $prodotto->categoria ?></a>
        <?php endforeach ?>
    </div>



    <section class="alimentazione">
        <div class="container">
            <h1>Alimentazione</h1>
            <div class="row">
                <?php foreach ($mangimi as $mangime) : ?>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4><?= $mangime->nome_prodotto ?></h4>
                                <small>"<?= $mangime->categoria ?>"</small>
                                <strong><?= $mangime->marca ?></strong>
                                <small>Peso: <?= $mangime->peso ?> KG</small>
                                <bage>Il prezzo è: <?= $mangime->prezzo ?> €</bage>
                                <p><?= $mangime->descrizione ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>


    <section class="accessori">
        <div class="container">
            <h1>Accessori</h1>
            <div class="row">
                <?php foreach ($accessori as $accessorio) : ?>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4><?= $accessorio->nome_prodotto ?></h4>
                                <small>"<?= $accessorio->categoria ?>"</small>
                                <strong><?= $accessorio->marca ?></strong>
                                <small>Conformazione: <?= $accessorio->materiali ?></small>
                                <bage>Il prezzo è: <?= $accessorio->prezzo ?> €</bage>
                                <p><?= $accessorio->descrizione ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
</div>


<?php include __DIR__ . '/layout/footer.php.'; ?>