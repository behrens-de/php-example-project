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
        var_dump($_POST);
        $alben = $this->photoAlbenDatabase->getAlben();
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
        } else{
            #TODO: verbessern
            echo 'Eine ID kann keine Buchstaben enthalten!';
        }
    }
}
