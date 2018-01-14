<?php

namespace app\modules\academica\models;

use Yii;

/**
 * This is the model class for table "inv_domicilios".
 *
 * @property integer $id
 * @property integer $id_prof
 * @property string $fecha_reg
 * @property string $calle
 * @property string $num_int
 * @property string $num_ext
 * @property string $colonia
 * @property integer $delegacion
 * @property integer $estado
 * @property string $cp
 * @property string $status
 * @property string $observaciones
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 *
 * @property Users $createdBy
 * @property Users $updatedBy
 */
class InvDomicilios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inv_domicilios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_prof', 'delegacion', 'estado', 'created_by', 'updated_by'], 'integer'],
            [['fecha_reg', 'created_at', 'updated_at'], 'safe'],
            [['calle', 'num_int', 'num_ext', 'colonia', 'cp', 'status', 'observaciones'], 'string'],
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
            'fecha_reg' => 'Fecha Reg',
            'calle' => 'Calle',
            'num_int' => 'Num Int',
            'num_ext' => 'Num Ext',
            'colonia' => 'Colonia',
            'delegacion' => 'Delegacion',
            'estado' => 'Estado',
            'cp' => 'Cp',
            'status' => 'Status',
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
