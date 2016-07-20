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
 * @property string $additionalFeatures
 * @property string $os
 * @property string $ui
 * @property string $standbyTime
 * @property string $talkTime
 * @property string $type
 * @property string $description
 *
 * @property Image[] $images
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
            [['id', 'name', 'age', 'imageUrl', 'snippet', 'carrier', 'additionalFeatures', 'standbyTime', 'talkTime', 'type', 'description'], 'required'],
            [['age'], 'integer'],
            [['id'], 'string', 'max' => 50],
            [['name', 'imageUrl', 'carrier'], 'string', 'max' => 100],
            [['snippet', 'additionalFeatures', 'description'], 'string', 'max' => 1000],
            [['os', 'ui', 'talkTime', 'type'], 'string', 'max' => 25],
            [['standbyTime'], 'string', 'max' => 10],
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
            'additionalFeatures' => 'Additional Features',
            'os' => 'Os',
            'ui' => 'Ui',
            'standbyTime' => 'Standby Time',
            'talkTime' => 'Talk Time',
            'type' => 'Type',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Image::className(), ['id' => 'id'])->inverseOf('id0');
    }

    public function extraFields() {
            return [
                'images'
                //'images' => ['images']
            ];
    }
}
