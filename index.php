<?php
require_once __DIR__ . '/init.php';
require_once __DIR__ . '/pdo.php';



?>
    <div>
        <h2>Useres</h2>
        <?php foreach ($users as $user) : ?>
            <h3><?= $user["firstname"]; ?></h3>
        <?php endforeach; ?>
    </div>


