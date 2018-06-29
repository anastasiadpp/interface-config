<?php

namespace app\models;

use Yii;
use \app\models\base\Role as BaseRole;
use yii\helpers\Html;


class Role extends BaseRole{
    const SUPER_ADMINISTRATOR = 1;
    const APOTEKER = 2;
    const KASIR = 3;

    public function getRoleMenuColumn(){
        return Html::a("Set Menu", ["role/detail", "id"=>$this->id], ["class"=>"btn btn-primary"]);
    }

    public function getUsers()
    {
        return $this->hasMany(\app\models\User::className(), ['id_role' => 'id']);
    }
}