<?php
require_once __DIR__ . '/../../../App/Design/header.php';
?>
<div>
    <h2>Coole Benutzer aus der Datenbank!</h2>
    <?php foreach ($users as $user) : ?>
        <a href="./users=user?uid=<?= $user->id; ?>"><?= $user->firstname; ?></a><br>
    <?php endforeach; ?>
</div>
<?php
require_once __DIR__ . '/../../../App/Design/footer.php';
?>