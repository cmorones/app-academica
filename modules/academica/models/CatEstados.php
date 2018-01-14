<?php

namespace app\modules\academica\models;

use Yii;

/**
 * This is the model class for table "cat_estados".
 *
 * @property integer $id
 * @property string $nombre
 */
class CatEstados extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cat_estados';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           // [['id'], 'required'],
         //   [['id'], 'integer'],
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
