<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "phone".
 *
 * @property string $id
 * @property string $name
 * @property integer $age
 * @property string $imageUrl
 * @property string $snippet
 * @property string $carrier
 */
class Phone extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phone';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'age', 'imageUrl', 'snippet', 'carrier'], 'required'],
            [['age'], 'integer'],
            [['id', 'name', 'imageUrl', 'snippet', 'carrier'], 'string', 'max' => 100],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'age' => 'Age',
            'imageUrl' => 'Image Url',
            'snippet' => 'Snippet',
            'carrier' => 'Carrier',
        ];
    }
}
