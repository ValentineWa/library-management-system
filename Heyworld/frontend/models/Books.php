<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $bookId
 * @property string $bookName
 * @property string $author
 * @property string $title
 * @property string $status
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bookName', 'author', 'title', 'status'], 'required'],
            [['status'], 'string'],
            [['bookName', 'author', 'title'], 'string', 'max' => 255],
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
            'author' => 'Author',
            'title' => 'Title',
            'status' => 'Status',
        ];
    }
}
