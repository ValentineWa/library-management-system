<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "courses".
 *
 * @property int $courseId
 * @property string $courseName
 * @property string $courseCode
 *
 * @property Lecturercourses[] $lecturercourses
 * @property Studentattendance[] $studentattendances
 * @property Studentcourses[] $studentcourses
 */
class Courses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'courses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['courseName', 'courseCode'], 'required'],
            [['courseName', 'courseCode'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'courseId' => 'Course ID',
            'courseName' => 'Course Name',
            'courseCode' => 'Course Code',
        ];
    }

    /**
     * Gets query for [[Lecturercourses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLecturercourses()
    {
        return $this->hasMany(Lecturercourses::className(), ['courseId' => 'courseId']);
    }

    /**
     * Gets query for [[Studentattendances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudentattendances()
    {
        return $this->hasMany(Studentattendance::className(), ['courseId' => 'courseId']);
    }

    /**
     * Gets query for [[Studentcourses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudentcourses()
    {
        return $this->hasMany(Studentcourses::className(), ['courseId' => 'courseId']);
    }
}
