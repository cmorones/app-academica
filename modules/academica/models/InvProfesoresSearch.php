<?php

namespace app\modules\academica\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\academica\models\InvProfesores;

/**
 * InvProfesoresSearch represents the model behind the search form about `app\modules\academica\models\InvProfesores`.
 */
class InvProfesoresSearch extends InvProfesores
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'expediente','modalidad', 'turno', 'id_plantel', 'id_academia', 'tipo_profesor', 'nivel_categoria', 'area_adcripcion', 'plaza', 'status', 'created_by', 'updated_by'], 'integer'],
            [['nombre', 'apellido_p', 'apellido_m', 'fecha_ingreso', 'observaciones', 'created_at', 'updated_at'], 'safe'],
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
        $query = InvProfesores::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([

            'query' => $query,
             'pagination' => [
                  'pageSize' => 150,
             ],
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
            'expediente' => $this->expediente,
            'modalidad' => $this->modalidad,
            'turno' => $this->turno,
            'id_plantel' => $this->id_plantel,
            'id_academia' => $this->id_academia,
            'tipo_profesor' => $this->tipo_profesor,
            'nivel_categoria' => $this->nivel_categoria,
            'area_adcripcion' => $this->area_adcripcion,
            'plaza' => $this->plaza,
            'status' => $this->status,
            'fecha_ingreso' => $this->fecha_ingreso,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'apellido_p', $this->apellido_p])
            ->andFilterWhere(['like', 'apellido_m', $this->apellido_m])
            ->andFilterWhere(['like', 'observaciones', $this->observaciones]);

        return $dataProvider;
    }
}
