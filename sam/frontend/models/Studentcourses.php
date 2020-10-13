<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "studentcourses".
 *
 * @property int $scId
 * @property int $courseId
 * @property int $studentId
 *
 * @property Courses $course
 * @property Student $student
 */
class Studentcourses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'studentcourses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['courseId', 'studentId'], 'required'],
            [['courseId', 'studentId'], 'integer'],
            [['courseId'], 'exist', 'skipOnError' => true, 'targetClass' => Courses::className(), 'targetAttribute' => ['courseId' => 'courseId']],
            [['studentId'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['studentId' => 'studentId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'scId' => 'Sc ID',
            'courseId' => 'Course ID',
            'studentId' => 'Student ID',
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
     * Gets query for [[Student]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['studentId' => 'studentId']);
    }
}
