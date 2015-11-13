<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tariffs".
 *
 * @property integer $id
 * @property integer $price
 * @property string $name
 * @property integer $speed
 */
class Tariffs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tariffs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price', 'speed'], 'integer'],
            [['name'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'price' => 'Price',
            'name' => 'Name',
            'speed' => 'Speed',
        ];
    }
}
