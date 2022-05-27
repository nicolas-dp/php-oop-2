<!-- L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. -->

<?php
include __DIR__ . '/db.php';

include __DIR__ . '/layout/head.php.';
include __DIR__ . '/layout/navbar.php';

include __DIR__ . '/Models/ProvaEccezione.php';
?>



<section class="slider">
    <div class="container">
        <h2>Top Acquisti</h2>
        <div class="row row-cols-5 g-4 flex-nowrap">
            <?php foreach ($prodotti as $prodotto) : ?>
                <div class="col">
                    <div class="card">
                        <img class="img-fluid" src="<?= $prodotto->image; ?> " alt="<?= $prodotto->nome_prodotto ?>">
                        <div class="card-body d-flex flex-wrap flex-column">
                            <div class="card-title">
                                <h4><?= $prodotto->nome_prodotto ?></h4>
                                <small>"<?= $prodotto->category->name ?>"</small>
                            </div>
                            <div class="card-text d-flex flex-column">
                                <strong><?= $prodotto->marca ?></strong>
                                <small>Peso: <?= $prodotto->peso ?> KG</small>
                                <span>Prezzo: <strong class="badge bg-danger"><?= $prodotto->getSconto($user) ?> €</strong></span>
                                <p><?= $prodotto->descrizione ?></p>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>



</div>


<?php include __DIR__ . '/layout/footer.php.'; ?>