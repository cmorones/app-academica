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
    public $file;

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
            [['id_anio', 'id_semestre', 'id_tipo', 'status', 'created_by', 'updated_by'], 'integer'],
            [['fecha_reg', 'fecha_ini', 'fecha_fin', 'created_at', 'updated_at'], 'safe'],
            [['docto','descripcion'], 'string'],
             [['file'], 'file'],
            [['status','id_anio', 'id_semestre','fecha_reg', 'fecha_ini', 'fecha_fin','created_at', 'created_by', 'file','descripcion'], 'required'],
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
            'id_anio' => 'Año',
            'id_semestre' => 'Semestre',
            'fecha_reg' => 'Fecha de Publicación',
            'fecha_ini' => 'Fecha de Inicio de Convocatoria',
            'fecha_fin' => 'Fecha de Termino de Convocatoria',
            'docto' => 'Documento',
            'status' => 'Estado',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'file' => 'Documento Convocatoria',
            'id_tipo' => 'Tipo Convocatoria',
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

      public function getAnios()
    {
        return $this->hasOne(CatAnos::className(),['id'=>'id_anio']);
    }

      public function getSemestre()
    {
        return $this->hasOne(CatSemestre::className(),['id'=>'id_semestre']);
    }

     public function getEstado()
    {
        return $this->hasOne(CatEstado::className(),['id'=>'status']);
    }
}
