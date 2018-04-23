<?php

namespace app\modules\academica\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\academica\models\InvDoctos;

/**
 * InvDoctosSearch represents the model behind the search form about `app\modules\academica\models\InvDoctos`.
 */
class InvDoctosSearch extends InvDoctos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_prof', 'created_by', 'updated_by'], 'integer'],
            [['fecha_reg', 'docto', 'infodocto', 'created_at', 'updated_at'], 'safe'],
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
        $query = InvDoctos::find();

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
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'docto', $this->docto])
            ->andFilterWhere(['like', 'infodocto', $this->infodocto]);

        return $dataProvider;
    }
}
