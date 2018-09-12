<?php

namespace app\modules\academica\models;

use Yii;

/**
 * This is the model class for table "solicitud_prestacion".
 *
 * @property integer $id
 * @property integer $folio
 * @property integer $tipo_permiso
 * @property integer $id_platel
 * @property integer $id_periodo
 * @property integer $permiso_especial
 * @property integer $permiso_cyf
 * @property integer $cyf_horas
 * @property integer $cyf_dia
 * @property string $fecha_inicio
 * @property string $fecha_termino
 * @property string $pt_nombre
 * @property string $pt_plaza
 * @property string $pt_numemp
 * @property string $pt_turno
 * @property integer $pt_plantel
 * @property string $pt_areaads
 * @property string $pt_nivel
 * @property string $pt_categoria
 * @property string $pt_funcion_real
 * @property integer $cambio_turno_op1
 * @property integer $cambio_turno_op2
 * @property integer $cambio_turno_op3
 * @property integer $cambio_turno_anterior
 * @property integer $cambio_turno_cuenta
 * @property string $fecha_inicio_ct
 * @property string $fecha_termino_ct
 * @property integer $cambio_plantel_op1
 * @property integer $cambio_plantel_op2
 * @property integer $cambio_plantel_op3
 * @property integer $cambio_plantel_anterior
 * @property integer $cambio_plantel_cuenta
 * @property string $fecha_inicio_cp
 * @property string $fecha_termino_cp
 * @property integer $lcgs_primeravez
 * @property integer $lsgs_primeravez
 * @property integer $lsgs_prorroga
 * @property integer $lsgs_primeravez_admvo
 * @property integer $lsgs_prorroga_admvo
 * @property integer $lsgs_prorroga_quincedias
 * @property integer $lsgs_prorroga_anteriores
 * @property string $lsgs_otra
 * @property string $motivos
 * @property string $fecha_termino_licanterior
 * @property string $lcgs_justificante
 * @property integer $lcgs_prorroga_anteriores
 * @property string $observaciones
 * @property integer $estado
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class SolicitudPrestacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'solicitud_prestacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [
             
                ['folio', 'tipo_permiso', 'cambio_plantel', 'cambio_turno', 'cambio_permuta', 'id_emp', 'id_conv', 'id_platel', 'id_periodo', 'permiso_especial', 'permiso_cyf', 'cyf_horas', 'cyf_dia', 'pt_plantel', 'cambio_turno_op1', 'cambio_turno_op2', 'cambio_turno_op3', 'cambio_turno_anterior', 'cambio_turno_cuenta', 'cambio_plantel_op1', 'cambio_plantel_op2', 'cambio_plantel_op3', 'cambio_plantel_anterior', 'cambio_plantel_cuenta', 'lcgs_primeravez', 'lsgs_primeravez', 'lsgs_prorroga', 'lsgs_primeravez_admvo', 'lsgs_prorroga_admvo', 'lsgs_prorroga_quincedias', 'lsgs_prorroga_anteriores', 'lcgs_prorroga_anteriores', 'estado', 'created_by', 'updated_by'], 'integer'],
            [['fecha_inicio', 'fecha_termino', 'fecha_inicio_ct', 'fecha_termino_ct', 'fecha_inicio_cp', 'fecha_termino_cp', 'fecha_termino_licanterior', 'created_at', 'updated_at'], 'safe'],
            [['pt_nombre', 'pt_plaza', 'pt_numemp', 'pt_turno', 'pt_areaads', 'pt_nivel', 'pt_categoria', 'pt_funcion_real', 'lsgs_otra', 'motivos', 'lcgs_justificante', 'observaciones'], 'string'],
            [['cambio_plantel_op1', 'cambio_plantel_op2', 'cambio_plantel_op3','created_at', 'created_by'], 'required'],
            [['fecha_termino_cp','cambio_plantel_cuenta'], 'required', 'whenClient' => "function (attribute, value) {
        return $('#cambio_plantel_anterior').prop('checked');
    }"]
          
        ];
    }

    public function validacp()
    {
       
        if ($this->cambio_plantel_anterior == 1) {
     
               $this->addError('cambio_plantel_cuenta', 'Es necesario el numero de veces anteriores');
         
            
        }
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'folio' => 'Folio',
            'tipo_permiso' => 'Tipo Permiso',
            'id_platel' => 'Id Platel',
            'id_periodo' => 'Id Periodo',
            'permiso_especial' => 'Permiso Especial',
            'permiso_cyf' => 'Permiso Cyf',
            'cyf_horas' => 'Cyf Horas',
            'cyf_dia' => 'Cyf Dia',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_termino' => 'Fecha Termino',
            'pt_nombre' => 'Pt Nombre',
            'pt_plaza' => 'Pt Plaza',
            'pt_numemp' => 'Pt Numemp',
            'pt_turno' => 'Pt Turno',
            'pt_plantel' => 'Pt Plantel',
            'pt_areaads' => 'Pt Areaads',
            'pt_nivel' => 'Pt Nivel',
            'pt_categoria' => 'Pt Categoria',
            'pt_funcion_real' => 'Pt Funcion Real',
            'cambio_turno_op1' => 'Cambio Turno Op1',
            'cambio_turno_op2' => 'Cambio Turno Op2',
            'cambio_turno_op3' => 'Cambio Turno Op3',
            'cambio_turno_anterior' => 'Cambio Turno Anterior',
            'cambio_turno_cuenta' => 'Cambio Turno Cuenta',
            'fecha_inicio_ct' => 'Fecha Inicio Ct',
            'fecha_termino_ct' => 'Fecha Termino Ct',
            'cambio_plantel_op1' => 'Cambio Plantel Op1',
            'cambio_plantel_op2' => 'Cambio Plantel Op2',
            'cambio_plantel_op3' => 'Cambio Plantel Op3',
            'cambio_plantel_anterior' => 'He sido beneficiado por cambio de plantel',
            'cambio_plantel_cuenta' => 'Indique el número de veces que ha sido beneficiado',
            'fecha_inicio_cp' => 'Indique la fecha del ultimo cambio',
            'fecha_termino_cp' => 'Fecha Termino Cp',
            'lcgs_primeravez' => 'Lcgs Primeravez',
            'lsgs_primeravez' => 'Lsgs Primeravez',
            'lsgs_prorroga' => 'Lsgs Prorroga',
            'lsgs_primeravez_admvo' => 'Lsgs Primeravez Admvo',
            'lsgs_prorroga_admvo' => 'Lsgs Prorroga Admvo',
            'lsgs_prorroga_quincedias' => 'Lsgs Prorroga Quincedias',
            'lsgs_prorroga_anteriores' => 'Lsgs Prorroga Anteriores',
            'lsgs_otra' => 'Lsgs Otra',
            'motivos' => 'Motivos',
            'fecha_termino_licanterior' => 'Fecha Termino Licanterior',
            'lcgs_justificante' => 'Lcgs Justificante',
            'lcgs_prorroga_anteriores' => 'Lcgs Prorroga Anteriores',
            'observaciones' => 'Observaciones',
            'estado' => 'Estado',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'cambio_plantel' => 'Cambio de Adscripcion'
        ];
    }
}
