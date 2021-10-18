<?php
require_once __DIR__ . '/init.php';

$users = getUsers();
?>
    <div>
        <h2>Useres</h2>
        <?php foreach ($users as $user) : ?>
            <h3><?= $user["firstname"]; ?></h3>
        <?php endforeach; ?>
    </div>


