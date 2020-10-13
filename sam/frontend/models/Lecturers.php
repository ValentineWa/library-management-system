<?php

namespace frontend\models;
use common\models\User;

use Yii;

/**
 * This is the model class for table "lecturers".
 *
 * @property int $lecturerId
 * @property int $userId
 * @property string $lecturerName
 *
 * @property Lecturercourses[] $lecturercourses
 * @property User $user
 * @property Studentattendance[] $studentattendances
 */
class Lecturers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lecturers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'lecturerName'], 'required'],
            [['userId'], 'integer'],
            [['lecturerName'], 'string', 'max' => 255],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'lecturerId' => 'Lecturer ID',
            'userId' => 'User ID',
            'lecturerName' => 'Lecturer Name',
        ];
    }

    /**
     * Gets query for [[Lecturercourses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLecturercourses()
    {
        return $this->hasMany(Lecturercourses::className(), ['lecturerId' => 'lecturerId']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }

    /**
     * Gets query for [[Studentattendances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudentattendances()
    {
        return $this->hasMany(Studentattendance::className(), ['lecturerId' => 'lecturerId']);
    }
}
