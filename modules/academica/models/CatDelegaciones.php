<?php

namespace app\modules\academica\models;

use Yii;

/**
 * This is the model class for table "cat_delegaciones".
 *
 * @property integer $id
 * @property string $nombre
 */
class CatDelegaciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cat_delegaciones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           // [['id'], 'required'],
           // [['id'], 'integer'],
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
        ];
    }
}
