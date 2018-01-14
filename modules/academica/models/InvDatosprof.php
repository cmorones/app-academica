<?php

namespace app\modules\academica\models;

use Yii;

/**
 * This is the model class for table "inv_datosprof".
 *
 * @property integer $id
 * @property integer $id_prof
 * @property string $fecha_nac
 * @property string $lugar_nac
 * @property string $rfc
 * @property string $curp
 * @property integer $edad
 * @property integer $estado_civil
 * @property string $telefono
 * @property string $celular
 * @property string $observaciones
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 *
 * @property Users $createdBy
 * @property Users $updatedBy
 */
class InvDatosprof extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inv_datosprof';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_prof', 'edad', 'estado_civil', 'created_by', 'updated_by'], 'integer'],
            [['fecha_nac', 'created_at', 'updated_at'], 'safe'],
            [['lugar_nac', 'rfc', 'curp', 'telefono', 'celular', 'observaciones'], 'string'],
            [['created_at', 'created_by'], 'required'],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['created_by' => 'user_id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['updated_by' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_prof' => 'Id Prof',
            'fecha_nac' => 'Fecha Nacimiento',
            'lugar_nac' => 'Lugar Nacimiento',
            'rfc' => 'RFC',
            'curp' => 'Curp',
            'edad' => 'Edad',
            'estado_civil' => 'Estado Civil',
            'telefono' => 'Telefono',
            'celular' => 'Celular',
            'observaciones' => 'Observaciones',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'updated_by']);
    }
}
