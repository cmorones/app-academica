<?php

namespace app\modules\academica\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\academica\models\InvExperiencia;

/**
 * InvExperienciaSearch represents the model behind the search form about `app\modules\academica\models\InvExperiencia`.
 */
class InvExperienciaSearch extends InvExperiencia
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_prof', 'ultimo_grado', 'estudio', 'institucion', 'situacion', 'docto_comp', 'valida_cedula', 'estado', 'created_by', 'updated_by'], 'integer'],
            [['fecha_reg', 'observaciones', 'created_at', 'updated_at'], 'safe'],
            [['cedula'], 'number'],
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
        $query = InvExperiencia::find();

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
            'id_prof' => $this->id_prof,
            'fecha_reg' => $this->fecha_reg,
            'ultimo_grado' => $this->ultimo_grado,
            'estudio' => $this->estudio,
            'institucion' => $this->institucion,
            'situacion' => $this->situacion,
            'docto_comp' => $this->docto_comp,
            'cedula' => $this->cedula,
            'valida_cedula' => $this->valida_cedula,
            'estado' => $this->estado,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'observaciones', $this->observaciones]);

        return $dataProvider;
    }
}
