<?php

namespace app\modules\academica\models;

use Yii;

/**
 * This is the model class for table "cat_semestre".
 *
 * @property integer $id
 * @property integer $id_anio
 * @property string $nombre
 */
class CatSemestre extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cat_semestre';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_anio'], 'integer'],
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
            'id_anio' => 'Id Anio',
            'nombre' => 'Nombre',
        ];
    }
}
