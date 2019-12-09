<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $title
 * @property string $author
 * @property string $summary
 * @property double $price
 * @property int $category_id
 * @property string $cover
 * @property string $created_at
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
     //use CartPositionTrait;
     // public function getPrice()
     // {
     //   return $this->price;
     // }
     //
     // public function getId()
     // {
     //   return $this->id;
     // }

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
            [['title', 'author', 'summary', 'price', 'category_id'], 'required'],
            [['summary'], 'string'],
            [['price'], 'number'],
            [['category_id'], 'integer'],
            [['created_at', 'cover'], 'safe'],
            [['title', 'author', 'cover'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'author' => 'Author',
            'summary' => 'Summary',
            'price' => 'Price',
            'category_id' => 'Category',
            'cover' => 'Cover',
            'created_at' => 'Created At',
        ];
    }
}
