<?php
require_once __DIR__ . '/../../../App/Design/header.php';
?>
<style>
    a.btn {

        background-color: #eee;
    }

    a.btn:hover {
        background-color: #bbb;

    }
</style>
<h1>Hallo ich bin die Startseite</h1>

<a class="btn" href="/php-example-project/users">Users</a>
<a class="btn" href="/php-example-project/login">Login</a>
<a class="btn" href="/php-example-project/register">Register</a>

<?php
require_once __DIR__ . '/../../../App/Design/footer.php';
?>