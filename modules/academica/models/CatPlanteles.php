<?php

namespace app\modules\academica\models;

use Yii;

/**
 * This is the model class for table "cat_planteles".
 *
 * @property integer $id
 * @property string $nombre
 * @property integer $status
 * @property string $domicilio1
 * @property string $domicilio2
 * @property string $email
 * @property string $telefono
 * @property integer $responsable
 */
class CatPlanteles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cat_planteles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'responsable'], 'integer'],
            [['domicilio1', 'domicilio2', 'email', 'telefono'], 'string'],
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
            'status' => 'Status',
            'domicilio1' => 'Domicilio1',
            'domicilio2' => 'Domicilio2',
            'email' => 'Email',
            'telefono' => 'Telefono',
            'responsable' => 'Responsable',
        ];
    }
}
