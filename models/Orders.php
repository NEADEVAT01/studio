<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int $customer_id
 * @property string $service
 * @property int $total_price
 * @property int $responsible_worker_id
 * @property string $source_files
 * @property string $status

 * @property string|null $finished_at
 *
 * @property User $customer
 * @property User $responsibleWorker
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $file;

    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id', 'service', 'total_price', 'source_files'], 'required'],
            [['customer_id', 'total_price', 'responsible_worker_id'], 'integer'],
            [['service', 'status'], 'string', 'max' => 50],
            [['source_files'], 'string', 'max' => 255],
            [
                ['file'], 'file',
                'skipOnEmpty' => 'false',
                'extensions' => 'mp3'
            ],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['customer_id' => 'ID']],
            [['responsible_worker_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['responsible_worker_id' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_id' => 'Заказчик',
            'service' => 'Вид услуги',
            'total_price' => 'Цена',
            'responsible_worker_id' => 'Ответственный работник',
            'source_files' => 'Исходный материал',
            'status' => 'Статус',
        ];
    }

    /**
     * Gets query for [[Customer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(User::className(), ['ID' => 'customer_id']);
    }
    public function upload()
    {
        if (!$this->file)
            return false;
        $name = '/web/uploads/source_files/' . time() . rand(0, 100) . '.' . $this->file->extension;
        $filename = Yii::getAlias('@webroot') . $name;
        $url = Yii::getAlias('@web') . $name;
        if ($this->file->saveAs($filename))
            return $url;
        return false;
    }
    /**
     * Gets query for [[ResponsibleWorker]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResponsibleWorker()
    {
        return $this->hasOne(User::className(), ['ID' => 'responsible_worker_id']);
    }

}
