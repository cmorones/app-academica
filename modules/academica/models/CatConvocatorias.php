<?php

namespace app\modules\academica\models;

use Yii;

/**
 * This is the model class for table "cat_convocatorias".
 *
 * @property integer $id
 * @property string $nombre
 * @property integer $estado
 */
class CatConvocatorias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cat_convocatorias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estado'], 'integer'],
            [['nombre'], 'string', 'max' => 255],
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
            'estado' => 'Estado',
        ];
    }
}
