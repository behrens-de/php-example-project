<?php
require_once __DIR__ . '/../../../App/Design/header.php';
?>
<div>

    <div class="container col col-12">
        <h2 class="my-4">Coole Benutzer aus der Datenbank!</h2>
        <div class="row">
            <?php foreach ($users as $user) : ?>
                <div class="card mx-auto " style="width: calc((100%/3) - 20px ); margin-bottom: 20px">
                    <img  src="<?= $user->img; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><?= $user->firstname; ?> <?= $user->lastname; ?></h5>
                        <h6 class="card-title text-secondary">@<?= $user->username; ?></h6>
                        <p class="card-text"><?= $user->bio; ?></p>
                        <a href="./users=user?uid=<?= $user->id; ?>" class="btn btn-outline-secondary">zum Profil</a>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php
require_once __DIR__ . '/../../../App/Design/footer.php';
?>