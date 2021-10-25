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

    public function getAlben($userid)
    {
        $table = $this->getTable();
        $model = $this->getModel();

        $alben = $this->pdo->prepare("SELECT * FROM $table WHERE `userid`=:userid");
        $alben->execute([
            'userid' => $userid
        ]);
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

    public function createAlbum($userid, $name, $beschreibung)
    {
        $table = $this->getTable();

        $user = $this->pdo->prepare("INSERT INTO $table (`userid`,`albumname`,`albumbeschreibung`,`albumcover`) VALUES (:userid,:name,:beschreibung,:albumcover)");
        $user->execute([
            'name' => $name,
            'beschreibung' => $beschreibung,
            'albumcover' => 'https://source.unsplash.com/320x180',
            'userid' => $userid
        ]);
    }


    public function updateAlbum($albumid, $name, $beschreibung)
    {
        $table = $this->getTable();
        $user = $this->pdo->prepare("UPDATE $table SET 
        `albumname` = :albumname, 
        `albumbeschreibung`=:albumbeschreibung 
        WHERE id = :albumid");
        $user->execute([
            'albumid' => $albumid,
            'albumname' => $name,
            'albumbeschreibung' => $beschreibung
        ]);
    }
}
