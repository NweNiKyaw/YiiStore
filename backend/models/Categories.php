<?php

namespace backend\models;

use Yii;
use backend\models\Books;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property string $name
 * @property string $remark
 * @property string $created_at
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'remark'], 'required'],
            [['remark'], 'string'],
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'remark' => 'Remark',
            'created_at' => 'Created At',
        ];
    }

    public function getBook()
    {
      return $this->hasMany(Books::className(),['category_id'=>'id']);
    }
}
