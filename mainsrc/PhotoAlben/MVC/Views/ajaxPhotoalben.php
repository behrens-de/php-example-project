<div class="row">
    <?php foreach ($alben as $item) : ?>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card mx-auto ">
                <img src="<?= $item->albumcover; ?>" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-primary"><?= $item->albumname; ?></h5>
                    <p class="card-text"><?= $item->albumbeschreibung; ?></p>
                    <a href="./users=user?uid=1" class="btn btn-outline-secondary">zum Album</a>
                    <a href="./photoalben/settings?id=<?= $item->id; ?>" class="btn btn-outline-primary">Settings</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

