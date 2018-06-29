<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\Expression;


class RegisterForm extends Model
{
    public $fullname;
    public $username;
    public $password;
    public $rememberMe = true;
    private $id_role = 1; //Super Admin

    public function rules()
    {
        return [
            // username and password are both required
            [['fullname','username', 'password'], 'required']
        ];
    }

    public function register() {
        if ($this->validate()) {
            $user = new User();
            $user->USERNAME = $this->USERNAME;
            $user->PASSWORD = $this->PASSWORD;
            $user->FULLNAME = $this->FULLNAME;
            $user->ID_ROLE = $this->ID_ROLE;
//            $user->foto_url = '';
//            $user->authKey = '';
//            $user->accessToken = '';
            $user->LAST_LOGIN = new Expression("NOW()");
            $user->LAST_LOGOUT = new Expression("NOW()");

            if ($user->save()) {
                return true;
            } else {
                if ($user->errors) {
                    $this->addErrors($user->errors);
                }
                return false;
            }
        }
        return false;
    }
}
