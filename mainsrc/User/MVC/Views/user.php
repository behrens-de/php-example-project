<h1>Detailseite eines coolen Benutzers</h1>
<p>
    <a href="./index.php">Zurück zur Startseite</a>
</p>

<?php if(!empty($user)) : ?>
    <h2><?= $user->firstname; ?> <?= $user->lastname; ?></h2>
    <p><?= $user->bio; ?> </p>
    <?= $user->hello(); ?>
<?php endif; ?>