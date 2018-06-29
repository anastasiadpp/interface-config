<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "roles".
 *
 * @property integer $id
 * @property string $nama
 */
class Role extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'roles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
        ];
    }

    public function getAdmins()
    {
        return $this->hasMany(\app\models\User::className(), ['id_role' => 'id']);
    }
}
