<?php
require_once __DIR__ . '/init.php';

use App\App\Container;
$container = new Container();

$userDB = $container->bulid('userDatabase');
$users = $userDB->getUsers();
// $users = getUsers();

// deleteUser('Max');
?>
    <div>
        <h2>Coole Benutzer aus der Datenbank!</h2>
        <?php foreach ($users as $user) : ?>
            <a href="./user-details.php?uid=<?= $user["id"]; ?>"><?= $user["firstname"]; ?></a><br>
        <?php endforeach; ?>
    </div>


