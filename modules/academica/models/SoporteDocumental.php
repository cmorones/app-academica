<?php

namespace app\modules\academica\models;

use Yii;

/**
 * This is the model class for table "soporte_documental".
 *
 * @property integer $id
 * @property string $nombre
 */
class SoporteDocumental extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'soporte_documental';
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
