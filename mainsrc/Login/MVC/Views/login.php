<?php require_once __DIR__ . '/../../../App/Design/header.php'; ?>





<?php if (!empty($error)) : ?>
    <div class="container col-6 my-3 alert alert-danger" role="alert">
        <?= $error ?>
    </div>
<?php endif ?>


<form method="post" class="container col-6 my-3">
    <h2 class="my-3">Login</h2>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control" name="username">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php require_once __DIR__ . '/../../../App/Design/footer.php'; ?>