<?php


// require_once __DIR__ . '/init.php';
require_once __DIR__.'/User/UserContainer.php';
$userContainer = new \User\UserContainer();

$userDB = $userContainer->setUserDatabase();
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


