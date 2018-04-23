<?php

namespace app\modules\academica\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\academica\models\InvConvocatorias;

/**
 * InvConvocatoriasSearch represents the model behind the search form about `app\modules\academica\models\InvConvocatorias`.
 */
class InvConvocatoriasSearch extends InvConvocatorias
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_anio', 'id_semestre', 'status', 'created_by', 'updated_by'], 'integer'],
            [['fecha_reg', 'fecha_ini', 'fecha_fin', 'docto', 'created_at', 'updated_at'], 'safe'],
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
        $query = InvConvocatorias::find();

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
            'id_anio' => $this->id_anio,
            'id_semestre' => $this->id_semestre,
            'fecha_reg' => $this->fecha_reg,
            'fecha_ini' => $this->fecha_ini,
            'fecha_fin' => $this->fecha_fin,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'docto', $this->docto]);

        return $dataProvider;
    }
}
