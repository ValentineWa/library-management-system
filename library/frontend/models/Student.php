<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $studentId
 * @property int $userId
 * @property string $fullName
 * @property int $idNumber
 * @property string $regNo
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'fullName', 'idNumber', 'regNo'], 'required'],
            [['userId', 'idNumber'], 'integer'],
            [['fullName'], 'string', 'max' => 255],
            [['regNo'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'studentId' => 'Student ID',
            'userId' => 'User ID',
            'fullName' => 'Full Name',
            'idNumber' => 'Id Number',
            'regNo' => 'Reg No',
        ];
    }
}
