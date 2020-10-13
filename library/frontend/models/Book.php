<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $bookId
 * @property string $bookName
 * @property string $referenceNo
 * @property string $publisher
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bookName', 'referenceNo', 'publisher'], 'required'],
            [['bookName'], 'string', 'max' => 100],
            [['referenceNo', 'publisher'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bookId' => 'Book ID',
            'bookName' => 'Book Name',
            'referenceNo' => 'Reference No',
            'publisher' => 'Publisher',
        ];
    }
}
