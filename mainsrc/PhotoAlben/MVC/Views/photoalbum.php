<?php
require_once __DIR__ . '/../../../App/Design/header.php';

#var_dump($alben);
?>
<div class="container my-5">
    <h2>Coole Alben <button style="float: right;" class="btn btn-danger newAlbumAjaxBtn"
    data-userid="<?= $_SESSION['userid']; ?>"
    data-album-name="Neues Album"
    data-album-beschreibung="Beispielbeschreibung"
    >Neues Album</button></h2>
    <div id="relPhotoalbum">
        <?php require_once __DIR__.'/ajaxPhotoalben.php'; ?>
    </div>



</div>
<script src="<?= 'mainsrc/PhotoAlben/MVC/AjaxPhotoalben/AjaxNewAlbum.js' ?>"></script>

<?php
require_once __DIR__ . '/../../../App/Design/footer.php';
?>