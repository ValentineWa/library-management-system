<?php

namespace frontend\models;
use common\models\User;
use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $studentId
 * @property string $studentName
 * @property string $studentNo
 * @property int $idNo
 * @property string $gender
 * @property string $phoneNo
 * @property string $dateofJoin
 * @property int $userId
 *
 * @property User $user
 * @property Studentattendance[] $studentattendances
 * @property Studentcourses[] $studentcourses
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
            [['studentName', 'studentNo', 'idNo', 'gender', 'phoneNo', 'dateofJoin', 'userId'], 'required'],
            [['idNo', 'userId'], 'integer'],
            [['gender'], 'string'],
            [['dateofJoin'], 'safe'],
            [['studentName', 'studentNo', 'phoneNo'], 'string', 'max' => 255],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'studentId' => 'Student ID',
            'studentName' => 'Student Name',
            'studentNo' => 'Student No',
            'idNo' => 'Id No',
            'gender' => 'Gender',
            'phoneNo' => 'Phone No',
            'dateofJoin' => 'Dateof Join',
            'userId' => 'User ID',
        ];
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
        return $this->hasMany(Studentattendance::className(), ['studentId' => 'studentId']);
    }

    /**
     * Gets query for [[Studentcourses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudentcourses()
    {
        return $this->hasMany(Studentcourses::className(), ['studentId' => 'studentId']);
    }
}
