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
        $alben = $this->photoAlbenDatabase->getAlben();
        $this->pageload(
            'PhotoAlben/MVC/Views/',
            'photoalbum.php',
            [
                'alben' => $alben
            ]
        );
    }
}
