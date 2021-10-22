<?php
require_once __DIR__ . '/../../../App/Design/header.php';

#var_dump($user);
?>

<div class="container col col-12 my-4">
<h1 class="my-4">Willkommen <?=$user->firstname;?></h1>
<h2>Hier ist dein Dashboard</h2>
</div>


<?php
require_once __DIR__ . '/../../../App/Design/footer.php';
?>