<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
use app\models\Category;

/**
 * This is the model class for table "items".
 *
 * @property integer $id
 * @property string $title
 * @property string $descrip
 * @property integer $category_id
 * @property double $price
 * @property string $pict
 * @property string $keywords
 * @property category $category
 */
class Items extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'descrip', 'price', 'keywords'], 'required'],
            [['descrip'], 'string'],
            [['category_id'], 'integer'],
            [['price'], 'number'],
            [['title'], 'string', 'max' => 200],
             [['imageFile'], 'file','extensions' => 'png, jpg','checkExtensionByMimeType'=>false],
            [['pict'], 'string', 'max' => 250],
            [['keywords'], 'string', 'max' => 300]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'descrip' => 'Descrip',
            'category_id' => 'Category ID',
            'price' => 'Price',
            'pict' => 'Pict',
            'keywords' => 'Keywords',
            'imageFile'=>'imageFile',
        ];
    }

        public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
