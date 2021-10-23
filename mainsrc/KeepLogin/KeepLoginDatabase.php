<?php

namespace APP\KeepLogin;

use App\App\AbstractMVC\AbstractDatabase;
use APP\KeepLogin\MVC\KeepLoginModel;

class KeepLoginDatabase
{
    public function getTable()
    {
        return "securitytokens";
    }
    public function getModel()
    {
        return KeepLoginModel::class;
    }

    function createSecurityToken($userid, $identifier, $securityToken)
    {
        $table = $this->getTable();

        $user = $this->pdo->prepare("INSERT INTO $table (`userid`,`	identifier`,`securitytoken`) VALUES (:userid,:identifier,:securitytoken)");
        $user->execute([
            'userid' => $userid,
            'identifier' => $identifier,
            'securityToken' => $securityToken
        ]);
    }
}
