<?php

namespace app\modules\academica\models;

use Yii;

/**
 * This is the model class for table "inv_convocatorias".
 *
 * @property integer $id
 * @property integer $id_anio
 * @property integer $id_semestre
 * @property string $fecha_reg
 * @property string $fecha_ini
 * @property string $fecha_fin
 * @property string $docto
 * @property integer $status
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 *
 * @property Users $createdBy
 * @property Users $updatedBy
 */
class InvConvocatorias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inv_convocatorias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_anio', 'id_semestre', 'status', 'created_by', 'updated_by'], 'integer'],
            [['fecha_reg', 'fecha_ini', 'fecha_fin', 'created_at', 'updated_at'], 'safe'],
            [['docto'], 'string'],
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
            'id_anio' => 'Id Anio',
            'id_semestre' => 'Id Semestre',
            'fecha_reg' => 'Fecha Reg',
            'fecha_ini' => 'Fecha Ini',
            'fecha_fin' => 'Fecha Fin',
            'docto' => 'Docto',
            'status' => 'Status',
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
