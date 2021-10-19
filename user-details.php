<?php
require_once __DIR__ . '/init.php';

$userDB = $container->bulid('userDatabase');
$userdata = $userDB->getUser($_GET["uid"]);


//createUser('Max','Muster','mm@testmail.ocm','test123','Ich bin der Max');
//deleteUser('Max');
//updateUser(1,'Hello World');

//var_dump($user);
?>
<h1>Detailseite eines coolen Benutzers</h1>
<p>
    <a href="./index.php">Zurück zur Startseite</a>
</p>

<?php foreach ($userdata as $user) : ?>
    <h2><?= $user->firstname; ?> <?= $user->lastname; ?></h2>
    <p><?= $user->bio; ?> </p>
    <?= $user->hello(); ?>
<?php endforeach; ?>s