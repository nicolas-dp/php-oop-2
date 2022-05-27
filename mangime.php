<?php
include __DIR__ . '/db.php';
include __DIR__ . '/layout/head.php.';
include __DIR__ . '/layout/navbar.php';
?>

<section class="alimentazione">
    <div class="container">
    <h1>Alimentazione</h1>
        <div class="row row-cols-lg-4">
            <?php foreach ($prodotti as $prodotto) : ?>
                <?php if ($prodotto->categoria == 'Mangime') : ?>
                    <div class="col">
                        <div class="card">
                            <img height="300" class="img-fluid" src="<?= $prodotto->image; ?> " alt="<?= $prodotto->nome_prodotto ?>">
                            <div class="card-body p-3">
                                <h4><?= $prodotto->nome_prodotto ?></h4>
                                <small>"<?= $prodotto->categoria ?>"</small>
                                <strong><?= $prodotto->marca ?></strong>
                                <small>Peso: <?= $prodotto->peso ?> KG</small>
                                <span>Prezzo: <strong class="badge bg-danger"><?= $prodotto->getSconto($user) ?> €</strong></span>
                                <p><?= $prodotto->descrizione ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<?php  include __DIR__ . '/layout/footer.php.'; ?>