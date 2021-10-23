<?php
require_once __DIR__ . '/../../../App/Design/header.php';
?>
<div>

    <div class="container">
        <h2 class="my-4">Coole Benutzer aus der Datenbank!</h2>
        <div class="row align-item-start">
            <?php foreach ($users as $user) : ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card mx-auto ">
                        <img src="<?= $user->img; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-primary"><?= $user->firstname; ?> <?= $user->lastname; ?></h5>
                            <h6 class="card-title text-secondary">@<?= $user->username; ?></h6>
                            <p class="card-text"><?= $user->bio; ?></p>
                            <a href="./users=user?uid=<?= $user->id; ?>" class="btn btn-outline-secondary">zum Profil</a>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php
require_once __DIR__ . '/../../../App/Design/footer.php';
?>