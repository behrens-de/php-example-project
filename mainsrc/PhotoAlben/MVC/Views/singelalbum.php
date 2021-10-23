<?php
require_once __DIR__ . '/../../../App/Design/header.php';

//var_dump($data);

if(!$data){
    #wenn ID nicht vorhanden
    Header("Location: /php-example-project/photoalben");
}
?>
<div class="container my-5">
    <h2>Einstellungen für <b class="text-primary"><?= $data->albumname;?></b></h2>

</div>

<?php
require_once __DIR__ . '/../../../App/Design/footer.php';
?>