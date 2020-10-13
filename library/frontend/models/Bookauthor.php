<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bookauthor".
 *
 * @property int $baId
 * @property int $authorId
 * @property int $bookId
 */
class Bookauthor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bookauthor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['authorId', 'bookId'], 'required'],
            [['authorId', 'bookId'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'baId' => 'Ba ID',
            'authorId' => 'Author ID',
            'bookId' => 'Book ID',
        ];
    }
}
