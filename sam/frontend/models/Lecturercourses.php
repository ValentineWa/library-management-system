<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "lecturercourses".
 *
 * @property int $lcId
 * @property int $lecturerId
 * @property int $courseId
 *
 * @property Courses $course
 * @property Lecturers $lecturer
 */
class Lecturercourses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lecturercourses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lecturerId', 'courseId'], 'required'],
            [['lecturerId', 'courseId'], 'integer'],
            [['courseId'], 'exist', 'skipOnError' => true, 'targetClass' => Courses::className(), 'targetAttribute' => ['courseId' => 'courseId']],
            [['lecturerId'], 'exist', 'skipOnError' => true, 'targetClass' => Lecturers::className(), 'targetAttribute' => ['lecturerId' => 'lecturerId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'lcId' => 'Lc ID',
            'lecturerId' => 'Lecturer ID',
            'courseId' => 'Course ID',
        ];
    }

    /**
     * Gets query for [[Course]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCourse()
    {
        return $this->hasOne(Courses::className(), ['courseId' => 'courseId']);
    }

    /**
     * Gets query for [[Lecturer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLecturer()
    {
        return $this->hasOne(Lecturers::className(), ['lecturerId' => 'lecturerId']);
    }
}
