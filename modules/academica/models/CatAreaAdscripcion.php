<?php

namespace app\modules\academica\models;

use Yii;

/**
 * This is the model class for table "cat_area_adscripcion".
 *
 * @property integer $id
 * @property string $nombre
 */
class CatAreaAdscripcion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cat_area_adscripcion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
        ];
    }
}
