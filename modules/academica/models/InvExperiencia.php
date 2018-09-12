<?php

namespace app\modules\academica\models;

use Yii;

/**
 * This is the model class for table "inv_experiencia".
 *
 * @property integer $id
 * @property integer $id_prof
 * @property string $fecha_reg
 * @property integer $ultimo_grado
 * @property integer $estudio
 * @property integer $institucion
 * @property integer $situacion
 * @property integer $docto_comp
 * @property double $cedula
 * @property integer $valida_cedula
 * @property integer $estado
 * @property string $observaciones
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 *
 * @property Users $createdBy
 * @property Users $updatedBy
 */
class InvExperiencia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inv_experiencia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_prof', 'ultimo_grado', 'estudio', 'institucion', 'situacion', 'docto_comp', 'valida_cedula', 'estado', 'created_by', 'updated_by'], 'integer'],
            [['fecha_reg', 'created_at', 'updated_at'], 'safe'],
            [['cedula'], 'number'],
            [['observaciones'], 'string'],
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
            'ultimo_grado' => 'Ultimo Grado',
            'estudio' => 'Estudio',
            'institucion' => 'Institucion',
            'situacion' => 'Situacion',
            'docto_comp' => 'Docto Comp',
            'cedula' => 'Cedula',
            'valida_cedula' => 'Valida Cedula',
            'estado' => 'Estado',
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

       public function getCatUltimo()
    {
        return $this->hasOne(CatNivelAc::className(),['id'=>'ultimo_grado']);
    }


       public function getCatEstudio()
    {
        return $this->hasOne(CatEstudio::className(),['id'=>'estudio']);
    }

      public function getCatInstitucion()
    {
        return $this->hasOne(CatInstituciones::className(),['id'=>'institucion']);
    }

      public function getCatSituacion()
    {
        return $this->hasOne(CatSituacionp::className(),['id'=>'situacion']);
    }


  public function getSoporte()
    {
        return $this->hasOne(SoporteDocumental::className(),['id'=>'docto_comp']);
    }

}
