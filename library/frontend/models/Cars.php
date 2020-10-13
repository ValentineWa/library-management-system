<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cars".
 *
 * @property int $carId
 * @property string $Model
 * @property string $Owner
 * @property string $Image
 */
class Cars extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cars';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Model', 'Owner', 'Image'], 'required'],
            [['Model', 'Owner', 'Image'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'carId' => 'Car ID',
            'Model' => 'Model',
            'Owner' => 'Owner',
            'Image' => 'Image',
        ];
    }
}
