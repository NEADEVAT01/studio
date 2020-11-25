<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $Nickname
 * @property string $Email
 * @property string $Topic
 * @property string $Question
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nickname', 'Email', 'Topic', 'Question'], 'required'],
            [['Nickname', 'Email', 'Question'], 'string', 'max' => 255],
            [['Topic'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Nickname' => 'Ваше имя',
            'Email' => 'Email',
            'Topic' => 'Тема вопроса',
            'Question' => 'Вопрос',
        ];
    }
}
