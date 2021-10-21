<?php
require_once __DIR__ . '/../../../App/Design/header.php';
?>

<div class="container col-6 my-5">
    <h2 class="h2 my-5">Regestriere Dich!</h2>
    <form method="get" action="">

        <div class="row">
            <div class="mb-3 col col-6">
                <label for="exampleInputEmail1" class="form-label">Vorname</label>
                <input type="text" class="form-control" name="firstname">
            </div>

            <div class="mb-3 col col-6">
                <label for="exampleInputEmail1" class="form-label">Nachname</label>
                <input type="text" class="form-control" name="lastname">
            </div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" name="username">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Regestrieren</button>
    </form>
    <a class="btn" href="/php-example-project">Zur Startseite</a>

</div>



<?php require_once __DIR__ . '/../../../App/Design/footer.php'; ?>