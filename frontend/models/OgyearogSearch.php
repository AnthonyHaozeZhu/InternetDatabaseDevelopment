<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Ogyearog;

/**
 * OgyearogSearch represents the model behind the search form of `frontend\models\Ogyearog`.
 */
class OgyearogSearch extends Ogyearog
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year', 'scoresRankID'], 'integer'],
            [['country', 'hostCity'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Ogyearog::find();

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
            'year' => $this->year,
            'scoresRankID' => $this->scoresRankID,
        ]);

        $query->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'hostCity', $this->hostCity]);

        return $dataProvider;
    }
}
