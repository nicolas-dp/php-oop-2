<?php
include __DIR__ . '/db.php';

include __DIR__ . '/layout/head.php.';

?>


<nav class="navbar navbar-expand-lg navbar-light border-3 border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#"><img height="100" src="./assets/img/logo_pet.jpg" alt="">Pet Shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./mangime.php">Mangime</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./accessori.php">Accessori</a>
                </li>
            </ul>
            <a class="badge bg-primary text-wrap p-3 fs-6 ms-3 mt-3 text-decoration-none" href="./form_register.php">Registrati</a>
        </div>
    </div>
</nav>

<?php include __DIR__ . '/layout/footer.php.'; ?>