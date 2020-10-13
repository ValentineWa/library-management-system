<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $studentId
 * @property string $fullName
 * @property string $email
 * @property string $dob
 * @property string $gender
 * @property string $eduLevel
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
            [['fullName', 'email', 'dob', 'gender', 'eduLevel'], 'required'],
            [['dob'], 'safe'],
            [['gender', 'eduLevel'], 'string'],
            [['fullName', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'studentId' => 'Student ID',
            'fullName' => 'Full Name',
            'email' => 'Email',
            'dob' => 'Dob',
            'gender' => 'Gender',
            'eduLevel' => 'Edu Level',
        ];
    }
}
