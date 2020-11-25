<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "users".
 *
 * @property int $ID
 * @property string $Nickname
 * @property string $Username
 * @property string $Password
 * @property string $Email
 * @property string $image
 * @property string $Status
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    public $repeat_password;
    public $file;

    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nickname', 'Username', 'Email', 'Password', 'repeat_password'], 'required'],
            [['Status'], 'string'],
            [['Nickname', 'Username', 'Email'], 'string', 'max' => 255],
            [['Password'], 'string', 'max' => 255],
            [['image'], 'string', 'max' => 255],
            [['Email'], 'email'],
            [['Username'], 'unique'],

            [['repeat_password'], 'compare', 'compareAttribute' => 'Password'],
            [
                ['image'], 'file',
                'skipOnEmpty' => 'false',
                'extensions' => 'jpg, png, jpeg, bmp', 'maxSize' => 1024 * 1024 * 10
            ]
        ];
    }

    public function upload()
    {
        if (!$this->file)
            return false;
        $name = '/web/uploads/' . time() . rand(0, 100) . '.' . $this->file->extension;
        $filename = Yii::getAlias('@webroot') . $name;
        $url = Yii::getAlias('@web') . $name;
        if ($this->file->saveAs($filename))
            return $url;
        return false;
    }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Nickname' => 'Ник',
            'Username' => 'Имя пользователя',
            'Password' => 'Пароль',
            'Email' => 'Email',
            'image' => 'Аватарка',
            'Status' => 'Статус',
            'repeat_password' => 'Повторите пароль'
        ];
    }

    public function validatePassword($password)
    {
        return $this->Password == $password;
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        return $this->ID;
    }

    public function getAuthKey()
    {

    }

    public function validateAuthKey($authKey)
    {

    }


}
