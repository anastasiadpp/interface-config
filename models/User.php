<?php

namespace app\models;


class User extends \app\models\base\Admin implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return User::find()->where(["ID"=>$id])->one();
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return null;
    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($USERNAME)
    {
        return User::find()->where(["USERNAME"=>$USERNAME])->one();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->ID;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->AUTHKEY;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * @inheritdoc
     */
    public function getAccessToken()
    {
        return $this->ACCESSTOKEN;
    }

    /**
     * @inheritdoc
     */
    public function validateAccessToken($accessToken)
    {
        return $this->getAccessToken() === $accessToken;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->PASSWORD === $password;
    }

     public function authenticate()
    {
        $user=User::model()->findByAttributes(array('USERNAME'=>$this->USERNAME));
        if($user===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($user->PASSWORD!==md5($this->PASSWORD))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->_id=$user->ID;
            $this->setState('lastLoginTime', $user->lastLoginTime);
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }
}