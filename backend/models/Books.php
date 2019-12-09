<?php

namespace backend\models;

use Yii;
use backend\models\Categories;

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
            [['title', 'author', 'summary', 'price', 'category_id', 'cover'], 'required'],
            [['summary'], 'string'],
            [['price'], 'number'],
            [['category_id'], 'integer'],
            [['created_at'], 'safe'],
            [['title', 'author','category_id', 'cover'], 'string', 'max' => 255],
            [['cover'], 'file', 'extensions' => 'jpg,png,gif'],
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

    public function getCategory()
     {
       return $this->hasOne(Categories::className(),['id' => 'category_id']);
     }

}
