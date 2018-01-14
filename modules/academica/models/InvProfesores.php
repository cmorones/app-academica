<?php

namespace app\modules\academica\models;

use Yii;

/**
 * This is the model class for table "inv_profesores".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $apellido_p
 * @property string $apellido_m
 * @property integer $modalidad
 * @property integer $turno
 * @property integer $id_plantel
 * @property integer $id_academia
 * @property integer $tipo_profesor
 * @property integer $nivel_categoria
 * @property integer $area_adcripcion
 * @property integer $plaza
 * @property integer $status
 * @property string $fecha_ingreso
 * @property string $observaciones
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 *
 * @property Users $createdBy
 * @property Users $updatedBy
 */
class InvProfesores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inv_profesores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido_p', 'apellido_m', 'email', 'observaciones'], 'string'],
            [['expediente','modalidad', 'turno', 'id_plantel', 'id_academia', 'tipo_profesor', 'nivel_categoria', 'area_adcripcion', 'plaza', 'status', 'created_by', 'updated_by'], 'integer'],
            [['fecha_ingreso', 'created_at', 'updated_at'], 'safe'],
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
            'expediente'=>'Expediente',
            'nombre' => 'Nombre',
            'apellido_p' => 'Paterno',
            'apellido_m' => 'Materno',
            'email' => 'Email',
            'modalidad' => 'Modalidad',
            'turno' => 'Turno',
            'id_plantel' => 'Plantel',
            'id_academia' => 'Academia',
            'tipo_profesor' => 'Tipo',
            'nivel_categoria' => 'Nivel',
            'area_adcripcion' => 'Area',
            'plaza' => 'Plaza',
            'status' => 'Status',
            'fecha_ingreso' => 'Ingreso',
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

      public function getCatModalidad()
    {
        return $this->hasOne(CatModalidad::className(),['id'=>'modalidad']);
    }

     public function getCatTurno()
    {
        return $this->hasOne(CatTurno::className(),['id'=>'turno']);
    }

      public function getCatPlanteles()
    {
        return $this->hasOne(CatPlanteles::className(),['id'=>'id_plantel']);
    }

      public function getCatAcademias()
    {
        return $this->hasOne(CatAcademias::className(),['id'=>'id_academia']);
    }

      public function getTipoProfesor()
    {
        return $this->hasOne(CatTipoProf::className(),['id'=>'tipo_profesor']);
    }

       public function getNivelProfesor()
    {
        return $this->hasOne(CatNivelProf::className(),['id'=>'nivel_categoria']);
    }

      public function getAreaAdscripcion()
    {
        return $this->hasOne(CatAreaAdscripcion::className(),['id'=>'area_adcripcion']);
    }

      public function getCatEstado()
    {
        return $this->hasOne(CatEstado::className(),['id'=>'status']);
    }





}
