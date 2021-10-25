<?php
require_once __DIR__ . '/../../../App/Design/header.php';

//var_dump($data);

if (!$data) {
    #wenn ID nicht vorhanden
    Header("Location: /php-example-project/photoalben");
}
var_dump($_FILES);
?>
<div class="container my-5">
    <div class="ajaxSettingsForm">
        <?php require_once __DIR__ . '/../Views/ajaxSettingsForm.php'; ?>
    </div>

    <form method="post" id="album-settings-form">

        <input type="hidden" name="albumid" value="<?= $_GET["id"] ?>">
        <div class="form-group">
            <label for="exampleInputEmail1" class="my-3">Album Name</label>
            <input type="text" class="form-control" value="<?= $data['albumname'] ?>" name="newName" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1" class="my-3">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="newDescription" rows="3"><?= $data['albumbeschreibung'] ?></textarea>
        </div>
    </form>

    <button name="send" type="submit" class="btn btn-success my-4">Update</button>

    <form method="post" enctype="multipart/form-data">
        <h3>Coverbild ändern</h3>
        <div class="form-group">
            <input type="hidden" name="albumid" value="<?= $_GET["id"] ?>">
            <input id="image-cover" class="form-control" name="imageCover" type="file" accept="image/*" />
        </div>
        <button name="send-image" type="submit" class="btn btn-success my-4">Update</button>
    </form>
</div>

<script src="<?= MAINURL . '/mainsrc/PhotoAlben/MVC/AjaxPhotoalben/AjaxAlbumSettings.js' ?>"></script>

<?php
require_once __DIR__ . '/../../../App/Design/footer.php';
?>