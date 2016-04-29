<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile; 

/**
 * This is the model class for table "Posts".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property string $tags
 * @property string $data
 * @property string $path
 */
class Posts extends \yii\db\ActiveRecord
{
  public $imageFile;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text'], 'required'],
            [['text'], 'string'],
            [['data'], 'safe'],
            [['title', 'path'], 'string', 'max' => 300],
            [['imageFile'], 'file','extensions' => 'png, jpg','checkExtensionByMimeType'=>false],
            [['tags'], 'string', 'max' => 250]
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
            'text' => 'Text',
            'tags' => 'Tags',
            'data' => 'Data',
            'path' => 'Path',
            'imageFile'=>'imageFile',
        ];
    }

    
}
