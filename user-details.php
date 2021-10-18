<?php
require_once __DIR__ . '/init.php';
$user = getUser($_GET["uid"]);

?>
<h1>Detailseite eines coolen Benutzers</h1>
<p>
    <a href="./index.php">Zurück zur Startseite</a>
</p>
<?php foreach($user as $userinfo): ?>
    <h2><?= $userinfo["firstname"]; ?> <?= $userinfo["lastname"]; ?></h2>
    <p><?= $userinfo["bio"]; ?> </p>
<?php endforeach; ?>



