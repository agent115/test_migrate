<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $name
 * @property string $price
 * @property string $size_display
 * @property string $vendor
 * @property string $description
 * @property string $camera
 * @property integer $availability
 * @property string $resolution
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['availability'], 'integer'],
            [['name', 'price', 'size_display', 'vendor', 'camera', 'resolution'], 'string', 'max' => 255],
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
            'price' => 'Price',
            'size_display' => 'Size Display',
            'vendor' => 'Vendor',
            'description' => 'Description',
            'camera' => 'Camera',
            'availability' => 'Availability',
            'resolution' => 'Resolution',
        ];
    }
}
