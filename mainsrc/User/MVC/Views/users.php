<div>
    <h2>Coole Benutzer aus der Datenbank!</h2>
    <?php foreach ($users as $user) : ?>
        <a href="./user-details.php?uid=<?= $user->id; ?>"><?= $user->firstname; ?></a><br>
    <?php endforeach; ?>
</div>