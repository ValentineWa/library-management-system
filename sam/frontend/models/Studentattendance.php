<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "studentattendance".
 *
 * @property int $saId
 * @property int $studentId
 * @property int $lecturerId
 * @property int $courseId
 * @property string $date
 *
 * @property Lecturers $lecturer
 * @property Student $student
 * @property Courses $course
 */
class Studentattendance extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'studentattendance';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['studentId', 'lecturerId', 'courseId', 'date'], 'required'],
            [['studentId', 'lecturerId', 'courseId'], 'integer'],
            [['date'], 'safe'],
            [['lecturerId'], 'exist', 'skipOnError' => true, 'targetClass' => Lecturers::className(), 'targetAttribute' => ['lecturerId' => 'lecturerId']],
            [['studentId'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['studentId' => 'studentId']],
            [['courseId'], 'exist', 'skipOnError' => true, 'targetClass' => Courses::className(), 'targetAttribute' => ['courseId' => 'courseId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'saId' => 'Sa ID',
            'studentId' => 'Student ID',
            'lecturerId' => 'Lecturer ID',
            'courseId' => 'Course ID',
            'date' => 'Date',
        ];
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

    /**
     * Gets query for [[Student]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['studentId' => 'studentId']);
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
}
