<?php

namespace app\modules\academica\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\academica\models\SolicitudPrestacion;

/**
 * SolicitudPrestacionSearch represents the model behind the search form about `app\modules\academica\models\SolicitudPrestacion`.
 */
class SolicitudPrestacionSearch extends SolicitudPrestacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'folio', 'tipo_permiso', 'id_platel', 'id_periodo', 'permiso_especial', 'permiso_cyf', 'cyf_horas', 'cyf_dia', 'pt_plantel', 'cambio_turno_op1', 'cambio_turno_op2', 'cambio_turno_op3', 'cambio_turno_anterior', 'cambio_turno_cuenta', 'cambio_plantel_op1', 'cambio_plantel_op2', 'cambio_plantel_op3', 'cambio_plantel_anterior', 'cambio_plantel_cuenta', 'lcgs_primeravez', 'lsgs_primeravez', 'lsgs_prorroga', 'lsgs_primeravez_admvo', 'lsgs_prorroga_admvo', 'lsgs_prorroga_quincedias', 'lsgs_prorroga_anteriores', 'lcgs_prorroga_anteriores', 'estado', 'created_by', 'updated_by'], 'integer'],
            [['fecha_inicio', 'fecha_termino', 'pt_nombre', 'pt_plaza', 'pt_numemp', 'pt_turno', 'pt_areaads', 'pt_nivel', 'pt_categoria', 'pt_funcion_real', 'fecha_inicio_ct', 'fecha_termino_ct', 'fecha_inicio_cp', 'fecha_termino_cp', 'lsgs_otra', 'motivos', 'fecha_termino_licanterior', 'lcgs_justificante', 'observaciones', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = SolicitudPrestacion::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'folio' => $this->folio,
            'tipo_permiso' => $this->tipo_permiso,
            'id_platel' => $this->id_platel,
            'id_periodo' => $this->id_periodo,
            'permiso_especial' => $this->permiso_especial,
            'permiso_cyf' => $this->permiso_cyf,
            'cyf_horas' => $this->cyf_horas,
            'cyf_dia' => $this->cyf_dia,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_termino' => $this->fecha_termino,
            'pt_plantel' => $this->pt_plantel,
            'cambio_turno_op1' => $this->cambio_turno_op1,
            'cambio_turno_op2' => $this->cambio_turno_op2,
            'cambio_turno_op3' => $this->cambio_turno_op3,
            'cambio_turno_anterior' => $this->cambio_turno_anterior,
            'cambio_turno_cuenta' => $this->cambio_turno_cuenta,
            'fecha_inicio_ct' => $this->fecha_inicio_ct,
            'fecha_termino_ct' => $this->fecha_termino_ct,
            'cambio_plantel_op1' => $this->cambio_plantel_op1,
            'cambio_plantel_op2' => $this->cambio_plantel_op2,
            'cambio_plantel_op3' => $this->cambio_plantel_op3,
            'cambio_plantel_anterior' => $this->cambio_plantel_anterior,
            'cambio_plantel_cuenta' => $this->cambio_plantel_cuenta,
            'fecha_inicio_cp' => $this->fecha_inicio_cp,
            'fecha_termino_cp' => $this->fecha_termino_cp,
            'lcgs_primeravez' => $this->lcgs_primeravez,
            'lsgs_primeravez' => $this->lsgs_primeravez,
            'lsgs_prorroga' => $this->lsgs_prorroga,
            'lsgs_primeravez_admvo' => $this->lsgs_primeravez_admvo,
            'lsgs_prorroga_admvo' => $this->lsgs_prorroga_admvo,
            'lsgs_prorroga_quincedias' => $this->lsgs_prorroga_quincedias,
            'lsgs_prorroga_anteriores' => $this->lsgs_prorroga_anteriores,
            'fecha_termino_licanterior' => $this->fecha_termino_licanterior,
            'lcgs_prorroga_anteriores' => $this->lcgs_prorroga_anteriores,
            'estado' => $this->estado,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'pt_nombre', $this->pt_nombre])
            ->andFilterWhere(['like', 'pt_plaza', $this->pt_plaza])
            ->andFilterWhere(['like', 'pt_numemp', $this->pt_numemp])
            ->andFilterWhere(['like', 'pt_turno', $this->pt_turno])
            ->andFilterWhere(['like', 'pt_areaads', $this->pt_areaads])
            ->andFilterWhere(['like', 'pt_nivel', $this->pt_nivel])
            ->andFilterWhere(['like', 'pt_categoria', $this->pt_categoria])
            ->andFilterWhere(['like', 'pt_funcion_real', $this->pt_funcion_real])
            ->andFilterWhere(['like', 'lsgs_otra', $this->lsgs_otra])
            ->andFilterWhere(['like', 'motivos', $this->motivos])
            ->andFilterWhere(['like', 'lcgs_justificante', $this->lcgs_justificante])
            ->andFilterWhere(['like', 'observaciones', $this->observaciones]);

        return $dataProvider;
    }
}
