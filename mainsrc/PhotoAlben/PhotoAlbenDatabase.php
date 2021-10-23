<?php

namespace App\PhotoAlben;

use App\App\AbstractMVC\AbstractDatabase;
use App\PhotoAlben\MVC\PhotoAlbenModel;
use PDO;

class PhotoAlbenDatabase extends AbstractDatabase
{
    public function getTable()
    {
        return 'photoalben';
    }

    public function getModel()
    {
        return PhotoAlbenModel::class;
    }

    public function getAlben()
    {
        $table = $this->getTable();
        $model = $this->getModel();

        $alben = $this->pdo->prepare("SELECT * FROM $table");
        $alben->execute();
        $alben->setFetchMode(PDO::FETCH_CLASS, $model);
        $albendata = $alben->fetchAll(PDO::FETCH_CLASS);
        return $albendata;
    }
}
