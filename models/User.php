<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
class User extends ActiveRecord
{
    private $id;
    private $name;
    private $username;
    private $password;
    private $email;
    private $mobile;
    private $gender;
    private $created_at;
    private $updated_at;
    private $accessToken;

    public function rules(){
     return array(
        array(['name','username','password','email','mobile','gender'], 'required','message'=>"The field is required"),
        array('email', 'email','message'=>"The email isn't correct"),
        array('email', 'unique','message'=>'Email already exists!'),
        array('username', 'unique','message'=>'username already exists!'), 
        array('mobile','integer'),
        array('mobile','string','min'=>11,'max'=>15),
      );
    }
    public function isValidPhoneNumber($attribute)
{
    if (!preg_match('/^[0-9]{11}$/', $this->$attribute)) {
        $this->addError($attribute, 'must contain  11 to 15 digits.');
    }
}


}
?>
   