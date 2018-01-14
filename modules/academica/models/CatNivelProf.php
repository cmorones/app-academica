<?php

namespace app\modules\academica\models;

use Yii;

/**
 * This is the model class for table "cat_nivel_prof".
 *
 * @property integer $id
 * @property string $nombre
 */
class CatNivelProf extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cat_nivel_prof';
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
