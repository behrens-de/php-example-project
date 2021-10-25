<?php

namespace App\PhotoAlben\MVC;

use App\App\AbstractMVC\AbstractController;
use App\PhotoAlben\PhotoAlbenDatabase;

class PhotoAlbenController extends AbstractController
{

    public function __construct(PhotoAlbenDatabase $photoAlbenDatabase)
    {
        $this->photoAlbenDatabase = $photoAlbenDatabase;
    }

    public function photoAlben()
    {
        // var_dump($_POST);
        // var_dump($_SESSION);
        $alben = $this->photoAlbenDatabase->getAlben($_SESSION['userid']);
        $this->pageload(
            'PhotoAlben/MVC/Views/',
            'photoalbum.php',
            [
                'alben' => $alben
            ]
        );
    }

    public function settings()
    {

        $is_numeric = is_numeric($_GET["id"]);

        if ($is_numeric) {
            $data = $this->photoAlbenDatabase->getAlbenById($_GET["id"]);
            $this->pageload(
                'PhotoAlben/MVC/Views/',
                'singelalbum.php',
                [
                    'data' => $data
                ]
            );
        } else {
            #TODO: verbessern
            echo 'Eine ID kann keine Buchstaben enthalten!';
        }
    }

    public function AjaxNewAlbum()
    {

        #neues Album anlegen
        $userid = $_POST["userid"];
        $albumName = $_POST["albumName"];
        $albumBeschreibung = $_POST["albumBeschreibung"];

        $this->photoAlbenDatabase->createAlbum($userid, $albumName, $albumBeschreibung);
    }

    public function AjaxPage()
    {
        $alben = $this->photoAlbenDatabase->getAlben($_SESSION["userid"]);
        $this->pageload(
            'PhotoAlben/MVC/Views/',
            'ajaxPhotoalben.php',
            ['alben' => $alben]
        );
    }
}
