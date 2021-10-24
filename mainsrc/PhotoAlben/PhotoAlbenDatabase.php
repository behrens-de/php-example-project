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

    public function getAlbenById($id)
    {
        $table = $this->getTable();
        $model = $this->getModel();

        $alben = $this->pdo->prepare("SELECT * FROM $table WHERE id=$id");
        $alben->execute();
        $alben->setFetchMode(PDO::FETCH_CLASS, $model);
        $albendata = $alben->fetch(PDO::FETCH_CLASS);
        return $albendata;
    }

    public function createAlbum($name,$beschreibung){
        $table = $this->getTable();

        $user = $this->pdo->prepare("INSERT INTO $table (`albumname`,`albumbeschreibung`,`albumcover`) VALUES (:name,:beschreibung,:albumcover)");
        $user->execute([
            'name' => $name,
            'beschreibung' => $beschreibung,
            'albumcover'=>'https://source.unsplash.com/320x180'
        ]);
    }
}
