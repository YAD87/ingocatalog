<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
use app\models\Items;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $nazv
 * @property string $oblogka
 */
class Category extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nazv'], 'required'],
            [['id'], 'integer'],
            [['nazv'], 'string', 'max' => 200],
            [['imageFile'], 'file','extensions' => 'png, jpg','checkExtensionByMimeType'=>false],
            [['oblogka'], 'string', 'max' => 300]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nazv' => 'Категория',
            'oblogka' => 'Oblogka',
            'imageFile'=>'imageFile',
        ];
    }

    public function getItems()
    {
        return $this->hasMany(Items::className(), ['category_id' => 'id']);
    }
}
