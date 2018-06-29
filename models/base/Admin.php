<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "PS_CONFIG_ADMIN".
 *
 * @property integer $ID
 * @property string $USERNAME
 * @property string $FULLNAME
 * @property string $PASSWORD
 * @property integer $ID_ROLE
 * @property string $AUTHKEY
 * @property string $ACCESSTOKEN
 * @property string $LAST_LOGIN
 * @property string $LAST_LOGOUT
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'PS_CONFIG_ADMIN';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'USERNAME', 'FULLNAME', 'PASSWORD', 'ID_ROLE', 'AUTHKEY', 'ACCESSTOKEN', 'LAST_LOGIN', 'LAST_LOGOUT'], 'required'],
            [['ID', 'ID_ROLE'], 'integer'],
            [['USERNAME', 'FULLNAME', 'PASSWORD', 'AUTHKEY', 'ACCESSTOKEN'], 'string', 'max' => 100],
            [['LAST_LOGIN', 'LAST_LOGOUT'], 'string', 'max' => 30],
            [['ID'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'USERNAME' => 'Username',
            'FULLNAME' => 'Fullname',
            'PASSWORD' => 'Password',
            'ID_ROLE' => 'Role',
            'AUTHKEY' => 'Authkey',
            'ACCESSTOKEN' => 'Accesstoken',
            'LAST_LOGIN' => 'Last  Login',
            'LAST_LOGOUT' => 'Last  Logout',
        ];
    }
    
    public function getRole(){
        return $this->hasOne(\app\models\Role::className(), ['ID' => 'ID_ROLE']);
    }

}
