<?php
require_once __DIR__.'/User/UserContainer.php';
$userContainer = new \User\UserContainer();

$userDB = $userContainer->setUserDatabase();
$user = $userDB->getUser($_GET["uid"]);

//createUser('Max','Muster','mm@testmail.ocm','test123','Ich bin der Max');
//deleteUser('Max');
//updateUser(1,'Hello World');

?>
<h1>Detailseite eines coolen Benutzers</h1>
<p>
    <a href="./index.php">Zurück zur Startseite</a>
</p>
<?php if (!empty($user)) : ?>
    <h2><?= $user["firstname"]; ?> <?= $user["lastname"]; ?></h2>
    <p><?= $user["bio"]; ?> </p>
<?php endif; ?>